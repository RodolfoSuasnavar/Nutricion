<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis de Imágenes de Comida</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/vue-file-agent@latest/dist/vue-file-agent.css" />
    <script src="https://unpkg.com/vue-file-agent@latest/dist/vue-file-agent.umd.js"></script>
    <style>
        body {
            font-family: 'Indie Flower', cursive;
            background-color: rgb(241, 255, 241);
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 2px 2px rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.12);
            border-radius: 22px;
        }
        h1, h2, h3 {
            text-align: center;
        }
        #imageChooser {
            margin-bottom: 20px;
        }
        .nutritionBar {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .nutritionBar div {
            height: 20px;
            background-color: #f0f0f0;
            margin-right: 10px;
        }
        .nutritionBar span {
            font-weight: bold;
        }
        .recipe {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div id="app">
        <h1>Analizador de Imágenes de Comida</h1>
        <h2>Sube una imagen para analizar:</h2>
        <div id="imageChooser">
            <vue-file-agent ref="vueFileAgent"
                            :multiple="false"
                            :deletable="true"
                            :uploadUrl="uploadUrl"
                            :uploadHeaders="uploadHeaders"
                            :accept="'image/*'"
                            :maxSize="'10MB'"
                            :maxFiles="1"
                            @upload="handleUpload"
                            @select="handleSelect"
                            compact="true"
                            :helpText="'Selecciona imágenes o archivos zip'"
                            :errorText="{
                                type: 'Tipo de archivo no válido. Solo se permiten imágenes',
                                size: 'Los archivos no deben superar los 10MB de tamaño'
                            }"
                            v-model="foodImages">
            </vue-file-agent>
        </div>
        <div v-if="analyzed">
            <h2>Resultado del análisis:</h2>
            <p>
                Creo que esto es <span class="category">{{ analyzedImage.category.name.replace('_', ' ') }}</span> -
                {{ probabilityText }}
                Consulta la <a href="https://spoonacular.com/food-api/docs#Image-Classification-Categories">lista completa aquí</a>.
            </p>
            <h2>Perfil nutricional promedio de <span>{{ analyzedImage.category.name.replace('_', ' ') }}</span>:</h2>
            <div class="nutritionBar" id="calories">
                <div :style="{ width: nutrition.caloriesWidth + '%' }"></div>
                <span>{{ analyzedImage.nutrition.calories.value }} {{ analyzedImage.nutrition.calories.unit }}</span>
            </div>
            <div class="nutritionBar" id="fat">
                <div :style="{ width: nutrition.fatWidth + '%' }"></div>
                <span>{{ analyzedImage.nutrition.fat.value }}{{ analyzedImage.nutrition.fat.unit }} grasa</span>
            </div>
            <div class="nutritionBar" id="protein">
                <div :style="{ width: nutrition.proteinWidth + '%' }"></div>
                <span>{{ analyzedImage.nutrition.protein.value }}{{ analyzedImage.nutrition.protein.unit }} proteína</span>
            </div>
            <div class="nutritionBar" id="carbs">
                <div :style="{ width: nutrition.carbsWidth + '%' }"></div>
                <span>{{ analyzedImage.nutrition.carbs.value }}{{ analyzedImage.nutrition.carbs.unit }} carbohidratos</span>
            </div>
            <h2>Recetas relacionadas:</h2>
            <div v-for="(recipe, index) in analyzedImage.recipes" :key="index" class="recipe">
                <h3>{{ recipe.title }}</h3>
                <a :href="recipe.url">
                    <img :src="'https://spoonacular.com/recipeImages/' + recipe.id + '-240x150.' + recipe.imageType" />
                </a>
            </div>
        </div>
        <div v-else>
            <p>
                Sube una imagen para analizar o utiliza una <a href="#" @click.prevent="handleDemo">imagen de demostración</a>.
            </p>
            <img v-if="!analyzed" :src="demoImageUrl" id="demoImg" @click.prevent="handleDemo" style="cursor: pointer;" />
        </div>
        <div id="spoonacular">
            Powered by<br>
            <a href="https://spoonacular.com/food-api">
                <img src="https://spoonacular.com/application/frontend/images/logo-simple-framed-green-gradient.svg" alt="spoonacular logo"><br>
                Spoonacular API
            </a>
        </div>
    </div>

    <script>
        Vue.component('vue-file-agent', window.VueFileAgent.VueFileAgent);

        new Vue({
            el: '#app',
            data: {
                demoImageUrl: 'https://spoonacular.com/recipeImages/635350-240x150.jpg',
                uploadUrl: 'https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/food/images/analyze',
                uploadHeaders: {
                    'X-RapidAPI-Key': 'beb6029914mshce5e4175c692b42p19abaejsna7b66820b16b',
                    'X-RapidAPI-Host': 'spoonacular-recipe-food-nutrition-v1.p.rapidapi.com'
                },
                foodImages: [],
                analyzed: false,
                analyzedImage: {
                    nutrition: {
                        calories: { value: 0, unit: 'calorías' },
                        fat: { value: 0, unit: 'g' },
                        protein: { value: 0, unit: 'g' },
                        carbs: { value: 0, unit: 'g' }
                    },
                    category: { name: '', probability: 0 },
                    recipes: []
                },
                nutrition: {
                    caloriesWidth: 0,
                    fatWidth: 0,
                    proteinWidth: 0,
                    carbsWidth: 0
                }
            },
            computed: {
                probabilityText() {
                    const prob = this.analyzedImage.category.probability;
                    if (prob < 0.2) return 'No estoy seguro sobre esto.';
                    if (prob < 0.4) return 'Quizás, quizás no.';
                    if (prob < 0.6) return 'No estoy seguro, pero podría ser.';
                    if (prob < 0.8) return 'Estoy bastante seguro de esto.';
                    return '¡Estoy casi seguro!';
                }
            },
            methods: {
                handleUpload() {
                    this.analyzed = false;
                },
                handleSelect() {
                    this.analyzed = false;
                    this.uploadFiles();
                },
                uploadFiles() {
                    const formData = new FormData();
                    formData.append('file', this.foodImages[0]);
                    fetch(this.uploadUrl, {
                        method: 'POST',
                        headers: this.uploadHeaders,
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        this.analyzedImage = data;
                        this.analyzed = true;
                        this.animateNutrition();
                    })
                    .catch(error => {
                        console.error('Error en la solicitud:', error);
                    });
                },
                handleDemo() {
                    this.analyzedImage = {
                        nutrition: {
                            calories: { value: 100, unit: 'calorías' },
                            fat: { value: 10, unit: 'g' },
                            protein: { value: 5, unit: 'g' },
                            carbs: { value: 20, unit: 'g' }
                        },
                        category: { name: 'pasta', probability: 1 },
                        recipes: [
                            { id: 123, title: 'Spaghetti Carbonara', imageType: 'jpg', url: 'https://example.com/recipes/123' }
                        ]
                    };
                    this.analyzed = true;
                    this.animateNutrition();
                },
                animateNutrition() {
                    const { calories, fat, protein, carbs } = this.analyzedImage.nutrition;
                    this.nutrition.caloriesWidth = (calories.value / 800) * 100;
                    this.nutrition.fatWidth = (fat.value / 30) * 100;
                    this.nutrition.proteinWidth = (protein.value / 30) * 100;
                    this.nutrition.carbsWidth = (carbs.value / 30) * 100;
                }
            }
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
@include('layouts/navbar')
    <div class="min-h-screen bg-gray-900 flex flex-col">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-bold text-center my-6 text-teal-400">Hello</h1>
        </div>
    </div>
    <h1 class="text-teal-400">Hello</h1>
    <div class="max-h-[500px] overflow-x-auto overflow-y-hidden">
        <div class="flex space-x-4">
            <!-- Éléments à l'intérieur du conteneur -->
            <div class="w-[200px] h-[200px] bg-blue-500 text-white flex items-center justify-center">
                Élément 1
            </div>
            <div class="w-[200px] h-[200px] bg-green-500 text-white flex items-center justify-center">
                Élément 2
            </div>
            <div class="w-[200px] h-[200px] bg-red-500 text-white flex items-center justify-center">
                Élément 3
            </div>
            <div class="w-[200px] h-[200px] bg-yellow-500 text-white flex items-center justify-center">
                Élément 4
            </div>
            <div class="w-[200px] h-[200px] bg-purple-500 text-white flex items-center justify-center">
                Élément 5
            </div>
            <!-- Ajoutez plus d'éléments si nécessaire -->
        </div>
    </div>

    <div class="overflow-x-auto py-4 max-h-[300px]">
        <div class="flex space-x-4 max-h-[300px]">
            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" /> <!-- Utilisation du composant MovieCard -->
            @endforeach
        </div>
    </div>


    @vite('resources/js/app.js')

</body>
</html>

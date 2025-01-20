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
        <div class="main-wrapper w-[80%] mx-auto mt-10">
            <h2 class="text-3xl text-teal-400 font-semibold pb-3">Nouveautés</h2>
            <div class="wrapper-content flex justify-around items-center overflow-x-auto py-2 rounded-xl ">
                <div class="wrapper w-[95%] flex justify-around items-center overflow-x-auto">
                    <div class="w-auto flex py-5 gap-5">
                        @foreach ($popularMovies as $popularMovie)
                            <x-movie-card :movie="$popularMovie" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="main-wrapper w-[80%] mx-auto mt-10">
            <h2 class="text-3xl text-teal-400 font-semibold pb-3">A venir</h2>
            <div class="wrapper-content flex justify-around items-center overflow-x-auto py-2 border border-2 rounded-xl ">
                <div class="wrapper w-[95%] flex justify-around items-center overflow-x-auto">
                    <div class="w-auto flex py-5 gap-5">
                        @foreach ($upcomingMovies as $upcomingMovie)
                            <x-movie-card :movie="$upcomingMovie" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    


    @vite('resources/js/app.js')

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>



    <div class="container my-5">
        <h1 class="mb-4">Films populaires</h1>
        <div class="row">
            @foreach ($popularMovies as $movie)
                {{-- <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" 
                             class="card-img-top" 
                             alt="{{ $movie['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text">{{ Str::limit($movie['overview'], 100) }}</p>
                        </div>
                    </div>
                </div> --}}
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white">
                    <div class="flex">
                        <!-- Image du film -->
                        <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="w-48 h-32 object-cover">
                
                        <!-- Contenu de la carte -->
                        <div class="p-4 flex flex-col justify-between flex-grow">
                            <h3 class="text-xl font-semibold text-gray-800 truncate">{{ $movie['title'] }}</h3>
                            <p class="text-sm text-gray-600 mt-2 line-clamp-3">{{ Str::limit($movie['overview'], 150) }}</p>
                            <div class="flex items-center justify-between mt-4">
                                <span class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($movie['release_date'])->year }}</span>
                                <a href="#" class="text-blue-500 text-sm hover:underline">Voir plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

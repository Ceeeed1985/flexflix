<div x-data="{ open: false }" class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden flex">
    <!-- Image du film (partie gauche) -->
    <img src="https://image.tmdb.org/t/p/w500/{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="w-24 h-32 object-cover">

    <!-- Détails du film (partie droite) -->
    <div class="flex flex-col p-4 justify-between flex-grow">
        <h3 class="text-lg font-semibold text-gray-800">{{ $movie['title'] }}</h3>
        <p class="text-sm text-gray-600 mt-2 line-clamp-3">{{ Str::limit($movie['overview'], 100) }}</p>
        <div class="flex items-center justify-between mt-4">
            <span class="text-gray-500 text-sm">{{ \Carbon\Carbon::parse($movie['release_date'])->year }}</span>
            <button @click="open = ! open" class="text-blue-500 text-sm hover:underline">Voir plus</button>
        </div>

        <!-- Détails supplémentaires (affichés quand open est true) -->
        <div x-show="open" class="mt-2 text-sm text-gray-600">
            <p>{{ $movie['overview'] }}</p>
        </div>
    </div>
</div>
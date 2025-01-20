<div 
    x-data="scrollContainer({{ $scrollSpeed ?? 15 }})"
    class="relative wrapper-content flex justify-around items-center py-2 rounded-xl"
>
    <!-- Bouton gauche -->
    <button 
        @mouseover="scrollLeft" 
        @mouseleave="stopScroll"
        class="absolute left-0 z-10 bg-gray-800 text-white p-2 rounded-full shadow-md hover:bg-teal-500 transition"
    >
        &#8592;
    </button>

    <!-- Conteneur défilant -->
    <div 
        x-ref="scrollContainer" 
        class="wrapper w-[95%] flex justify-around items-center overflow-x-auto" 
        style="scrollbar-width: none;"
    >
        {{ $slot }}
    </div>

    <!-- Bouton droit -->
    <button 
        @mouseover="scrollRight" 
        @mouseleave="stopScroll"
        class="absolute right-0 z-10 bg-gray-800 text-white p-2 rounded-full shadow-md hover:bg-teal-500 transition"
    >
        &#8594;
    </button>
</div>

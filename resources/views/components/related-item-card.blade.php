<div class=" min-w-full sm:min-w-1/3 md:min-w-1/4 lg:min-w-1/5 xl:min-w-1/7">
    <div class="flex flex-col items-center justify-center p-4 bg-white rounded-lg shadow-md">
        <img src="{{ asset('/related-images').'/'.$img }}" alt="{{ $img}}" class="w-full h-32 object-contain rounded-t-lg">
        <h2 class="mt-2 text-sm text-center line-clamp-2 font-semibold text-sky-600">{{ $name }}</h2>
        <p class=" text-gray-600 text-xs mt-3 font-semibold">{{ $stocks }} products</p>
        </div>
</div>
<div class="p-3 rounded-lg border min-w-full sm:min-w-1/2 lg:min-w-full xl:min-w-1/2 border-gray-300">
    <div class="flex">
        <img class="h-24" src="{{ asset('/matched-images/'.$imgName) }}" alt="">
        <div class="px-3 flex flex-col justify-around">
            <h3 class=" text-sm font-semibold">
                {{ $itemName }}
            </h3>
            <p>{{ $price }}MMK</p>
        </div>
    </div>
    <div class="flex items-center text-sm mt-2">
        <div class="mr-2 flex items-center border border-gray-300 rounded-md">
            <button class="px-2 py-1 cursor-pointer rounded-l-md hover:bg-gray-100" id="decrease-quantity">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                </svg>
            </button>
            <span class="px-2 py-1" id="quantity">1</span>
            <button class="px-2 py-1 cursor-pointer rounded-r-md hover:bg-gray-100" id="increase-quantity">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 w-2" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </button>
        </div>
        <button
            class="mr-2 cursor-pointer border border-sky-600  flex-1 bg-sky-600 hover:bg-sky-700 text-white font-medium py-1 px-2 rounded-md flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-3 w-3" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
            Add to Cart
        </button>
        <button class="border cursor-pointer border-gray-300 hover:bg-gray-100 text-gray-700 font-medium py-1  px-2 rounded-md">
            Buy Now
        </button>
    </div>
</div>
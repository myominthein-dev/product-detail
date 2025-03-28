@extends('layouts.app')

@section('content')

    <section class="container py-2">

        <!-- Promotion Banner -->
    <div id="promo-banner" class="promo-banner mb-5 text-white py-3 px-4 text-center relative overflow-hidden">
        <div class="container mx-auto">
            <!-- Marquee Text -->
            <div class="marquee-container mb-2">
                <div class="marquee-content">
                    <div class="inline-flex items-center space-x-6">
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a4 4 0 118 0v7M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                            <span class="font-bold">SPRING SALE:</span>
                            <span class="ml-1">Save up to 25% on all commercial ovens!</span>
                        </span>
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            <span>FREE SHIPPING on orders over 1,000,000 MMK</span>
                        </span>
                        <span class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>EASY FINANCING available - 0% interest for 12 months!</span>
                        </span>
                    </div>
                </div>
                
            </div>
            
            <!-- Countdown Timer -->
            <div class="flex flex-col md:flex-row items-center justify-center gap-3 md:gap-6">
                <div class="flex items-center">
                    <span class="mr-2 font-semibold">Sale Ends In:</span>
                    <div class="flex space-x-1">
                        <div class="countdown-item  bg-opacity-20 rounded px-2 py-1">
                            <span id="countdown-days" class="font-mono font-bold">00</span>
                        </div>
                        <div class="countdown-item  bg-opacity-20 rounded px-2 py-1">
                            <span id="countdown-hours" class="font-mono font-bold">00</span>
                        </div>
                        <div class="countdown-item  bg-opacity-20 rounded px-2 py-1">
                            <span id="countdown-minutes" class="font-mono font-bold">00</span>
                        </div>
                        <div class="countdown-item  bg-opacity-20 rounded px-2 py-1">
                            <span id="countdown-seconds" class="font-mono font-bold">00</span>
                        </div>
                    </div>
                </div>
                
                <a href="#" class="text-gray-200 border border-gray-300  font-medium py-1 px-4 rounded-full text-sm">
                    Buy Now
                </a>
            </div>
            
            <button id="close-promo" class="absolute top-1 right-2 text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

        {{-- bread crumb start --}}

        <nav class="flex items-center text-[10px] sm:text-sm text-gray-500 mb-6">
            <a href="/" class="flex items-center hover:text-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Home
            </a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <a href="/products" class="hover:text-primary-600">Products</a>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mx-1" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
            <span class="text-gray-800  font-semibold line-clamp-1">{{ $product['name'] }}</span>
        </nav>

        {{-- product detail start --}}

        <div class="grid gap-5 md:grid-cols-2">

            {{-- product image lightbox  start --}}

            <div>
                {{-- main image start --}}

                <div id="main-image">
                    <img class="w-full rounded-xl" src="{{ asset('/oven-images/'.$product['images'][0]) }}" alt="">
                </div>

                {{-- sub images start --}}
                <div class="grid grid-cols-5 gap-2 py-2">

                    @foreach ($product['images'] as $imgeName)
                        <button>
                            <img class="rounded-lg" src="{{ asset('/oven-images/'.$imgeName) }}" alt="">
                        </button>
                    @endforeach   
                </div>
            </div>



            {{-- product info   --}}

            <div class=" flex flex-col ">
                <h1 class="text-xl lg:text-2xl font-semibold"> {{ $product['name'] }} </h1>
                <div class="flex items-center mr-4 my-2">


                    @for ($i = 1; $i <= 5; $i++)
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="{{ $i <= 7 ? 'currentColor' : 'none' }}"
                            class="w-5 h-5 {{ $i <= 5 ? 'text-amber-500' : 'text-gray-300 stroke-gray-400' }}">
                            <path fill-rule="evenodd"
                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                clip-rule="evenodd" />
                        </svg>
                    @endfor


                    <span class="text-gray-500 ml-2">
                        4.8(124 reviews)
                    </span>
                </div>

                <div class="mt-2 mb-6">
                    <div class="relative">
                        <div class="bg-gradient-to-r from-sky-50 to-sky-100 p-4 rounded-lg border-l-4 border-sky-600">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-sm text-gray-500 line-through">{{ number_format($product['price'], 2) }} MMK</span>
                                    <h4 class="text-xl lg:text-3xl font-bold text-sky-700 my-1">{{ number_format($product['price'] * 0.75, 2) }} MMK</h4>
                                    <span class="text-sm text-gray-600">Save {{ number_format($product['price'] * 0.25, 2) }} MMK</span>
                                </div>
                                <div class="absolute -right-2 -top-2 bg-sky-600 text-white text-sm font-bold px-3 py-1 rounded-full shadow-md transform rotate-3">
                                    25% OFF
                                </div>
                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-sky-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class=" text-[11px] sm:text-xs lg:text-sm">Limited time offer - Spring Sale ends in <span class="font-semibold" id="price-countdown">3d 00h 00m 00s</span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class=" text-[14px] text-gray-600 lg:text-sm font-semibold tracking-wide">
                    This Cooking Performance Group FEC-200-BK double deck standard depth full size electric convection oven
                    is a valuable asset to any commercial kitchen.
                </p>

                <div class="flex items-center my-5 ">
                    <div class="mr-4 flex items-center border border-gray-300 rounded-md">
                        <button class="px-2 py-2 cursor-pointer rounded-l-md hover:bg-gray-100" id="decrease-quantity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </button>
                        <span class=" px-3 lg:px-4 py-2 text-[11px] sm:text-sm lg:text-lg" id="quantity">1</span>
                        <button class="px-3 py-2 cursor-pointer rounded-r-md hover:bg-gray-100" id="increase-quantity">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </button>
                    </div>
                    <button
                        class="mr-3 cursor-pointer text-[11px] sm:text-sm lg:text-lg flex-1 bg-sky-600 hover:bg-sky-700 text-white font-medium px-2 py-2 lg:px-4 rounded-md flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                        Add to Cart
                    </button>
                    <button
                        class="border cursor-pointer text-[11px] sm:text-sm lg:text-lg border-gray-300 hover:bg-gray-100 text-gray-700 font-medium py-2 px-4 rounded-md">
                        Buy Now
                    </button>
                </div>

                <div class="flex items-center text-sm text-gray-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0" />
                    </svg>
                    <span>Free delivery on orders over 1,000,000 MMK</span>
                </div>

                <div class="my-3">
                    <span>Availability : </span>
                    <span>
                        @if (true)
                            In Stock ( {{ $product['available_stocks'] }} units )
                        @else
                            Out of stock
                        @endif

                    </span>
                </div>

                {{-- product features --}}

                <div class="space-y-2 hidden xl:block">
                    <h3 class="font-medium">Key Features:</h3>
                    <ul class="space-y-1">

                        @foreach ($product['key_features'] as $feature)
                        <li class="flex items-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 mr-2 mt-0.5 flex-shrink-0"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span>{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                {{-- matched items --}}

              <div class="mt-5 hidden lg:block">
                <h4 class="mb-3 text-lg font-semibold">Work With : </h4>

                <div class=" flex pb-2 gap-2 overflow-x-scroll ">

                    @foreach ($product['matched_items'] as $item)
                     <x-matched-item-card :imgName="$item['image']" :itemName="$item['name']" :price="$item['price']" />
                    @endforeach
                   

                    
                </div>
              </div>

            </div>

        </div>

        {{-- small screen features --}}

        <div class="space-y-2  xl:hidden">
            <h3 class="font-medium">Key Features:</h3>
            <ul class="space-y-1 grid sm:grid-cols-2 gap-x-4">

                <li class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 mr-2 mt-0.5 flex-shrink-0"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Double stack design includes 2 ovens for optimal space efficiency; stacking kit
                        included</span>
                </li>

                <li class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 mr-2 mt-0.5 flex-shrink-0"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Each oven features full size cavity that houses 3 adjustable wire racks</span>
                </li>
                <li class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 mr-2 mt-0.5 flex-shrink-0"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Temperature range from 150 to 500 degrees Fahrenheit per oven</span>
                </li>
                <li class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 mr-2 mt-0.5 flex-shrink-0"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                    <span>Independent glass doors; stainless steel exterior; porcelain interior floors and
                        sides</span>
                </li>
                <li class="flex items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-sky-600 mr-2 mt-0.5 flex-shrink-0"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                    <span>208V, 1 Phase, 11 kW</span>
                </li>
            </ul>
        </div>

        {{-- small screen matched items --}}
        <div class="mt-5  lg:hidden">
            <h4 class="mb-3 text-lg font-semibold">Work With : </h4>

            <div class=" flex pb-2 gap-2 overflow-x-scroll ">

                @foreach ($product['matched_items'] as $item)
                <x-matched-item-card :imgName="$item['image']" :itemName="$item['name']" :price="$item['price']" />
               @endforeach

                
            </div>
          </div>
        {{-- tab start --}}

        <div class="  mt-5">

            {{-- tab nav --}}

            <div>
                <ul class="flex text-sm font-semibold border-b text-gray-600 border-b-gray-300 gap-4">
                    <li tab-data="spec-tab" class="tab-nav border-b-2 ">
                        Specifications
                    </li>
                    <li tab-data='review-tab' class="tab-nav border-b-2 border-b-transparent">
                        Reviews
                    </li>
                    <li tab-data='shipping-tab' class="tab-nav border-b-2 border-b-transparent">
                        Shipping & Returns
                    </li>
                </ul>
            </div>

            {{-- tab content --}}
            <div class="mt-5">
                <div id="spec-tab" class="h-full tab-content  bg-blue-400">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($product['specifications'] as $key => $value)
                                    <tr>
                                        <td class="px-6 py-2 whitespace-nowrap text-sm font-medium text-gray-900 w-1/3">
                                            {{ $key }}</td>
                                        <td class="px-6 py-2 whitespace-nowrap text-sm text-gray-500">{{ $value }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="review-tab" class="h-full tab-content hidden">

                    {{-- star show --}}
                    <div class="grid md:grid-cols-2 gap-5 mb-5">
                        <div class="border p-4 rounded-lg border-gray-300">
                            <div class="flex items-center"> <span class="text-xl mr-2 font-semibold">4.8</span>
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="{{ $i <= 7 ? 'currentColor' : 'none' }}"
                                        class="w-5 h-5 {{ $i <= 5 ? 'text-amber-500' : 'text-gray-300 stroke-gray-400' }}">
                                        <path fill-rule="evenodd"
                                            d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endfor
                                </p>
                            </div>

                            <p class="my-3">Based on 124 reviews</p>

                            @foreach ($product['starDisplay'] as $star)
                                <div class="flex items-center">
                                    <div class="w-12 text-sm">{{ $star['star-count'] }} stars</div>
                                    <div class="h-2 mx-2 flex-1 bg-gray-200 rounded-full overflow-hidden">
                                        <div class="bg-sky-600 h-full rounded-full"
                                            style=width:{{ $star['percentage'] }}%></div>
                                    </div>
                                    <div class="w-10 text-sm text-right">{{ $star['percentage'] }} %</div>
                                </div>
                            @endforeach
                        </div>
                        <div class="border p-4 rounded-lg border-gray-300">
                            <h4 class="text-lg text-gray-700 font-semibold">Review this product</h4>
                            <p class="text-sm text-gray-500 my-3">Share your experience with this product to help other
                                customers make informed decisions.</p>

                            <div class="flex justify-center">
                                <div class="flex space-x-1">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-8 w-8 cursor-pointer text-gray-300 hover:text-amber-500"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- user review --}}

                    <h3 class="my-5 text-lg font-semibold text-gray-700">Users' Reviews</h3>
                    <div class="grid md:grid-cols-2 gap-5 ">
                       @foreach ($product['reviews'] as $review)
                       <div class="border border-gray-300 p-4 rounded-lg">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 flex items-center justify-center text-sm font-semibold text-gray-500 bg-gray-300 overflow-hidden text-nowrap rounded-full">
                                {{ $review['user'] }}</div>
                            <div class="ml-3">
                                <h4 class="font-semibold">{{ $review['user'] }}</h4>
                                <p class="text-sm text-gray-500 flex">
                                    @for ($i = 1; $i <=  $review['rating']  ; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="{{ $i <= $review['rating'] ? 'currentColor' : 'none' }}"
                                            class="w-5 h-5 {{ $i <= $review['rating'] ? 'text-amber-500' : 'text-gray-300 stroke-gray-400' }}">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    @endfor
                                </p>
                            </div>
                            <p class=" ml-auto text-gray-500 text-sm ">{{ $review['date'] }}</p>
                        </div>

                        <p class="text-gray-500 text-sm mt-3">
                           {{ $review['comment'] }}
                        </p>
                       </div>
                       @endforeach
                    </div>
                    
                </div>
                <div id="shipping-tab" class="h-full  tab-content hidden ">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div class="border border-gray-300 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold">Shipping</h3>
                            <p class="text-sm text-gray-500 my-3">We offer free shipping on orders over 1,000,000 MMK. Orders
                                under 1,000,000 MMK will be charged a flat rate of 50,000 MMK. Orders are shipped within 2
                                business days and typically arrive within 5-7 business days. We will provide you with a
                                tracking number as soon as your order ships.</p>
                        </div>
                        <div class="border border-gray-300 p-4 rounded-lg ">
                            <h3 class="text-lg font-semibold">Return Policy</h3>
                            <p class="text-sm text-gray-500 my-3">If you are not satisfied with your purchase, you may return
                                it within 30 days for a full refund. Items must be in new condition and in their original
                                packaging. To initiate a return, please contact our customer service team at 1-800-555-5555.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Related Products -->
        <div class="my-5">
            <h2 class="text-xl font-semibold mb-6">Related Products</h2>
           
            <div class="flex overflow-x-scroll gap-5 py-5">
                @foreach ($product['relatedProducts'] as $relatedProduct)
                    <x-related-item-card :img="$relatedProduct['image']" :name="$relatedProduct['name']" :stocks="$relatedProduct['stocks']" />
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const tabs = document.querySelectorAll('.tab-nav');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.forEach(tab => {

                tab.addEventListener('click', () => {
                    const tabId = tab.getAttribute('tab-data');

                    tabs.forEach(tab => {
                        tab.classList.remove('border-b-gray-400')
                        tab.classList.add('border-b-transparent')

                    })

                    tab.classList.remove('border-b-transparent')
                    tab.classList.add('border-b-gray-400')

                    tabContents.forEach(tabContent => {
                        tabContent.classList.add('hidden');

                        document.getElementById(tabId).classList.remove('hidden')
                        document.getElementById(tabId).classList.add('block')

                    })
                })
            });

             // Countdown Timer
             function updateCountdown() {
                // Set the date we're counting down to (3 days from now)
                const now = new Date();
                const countdownDate = new Date();
                countdownDate.setDate(now.getDate() + 10);
                countdownDate.setHours(23, 59, 59, 0);
                
                // Get current time
                const currentTime = new Date().getTime();
                
                // Find the distance between now and the countdown date
                const distance = countdownDate - currentTime;
                
                // Time calculations for days, hours, minutes and seconds
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
                // Display the result
                document.getElementById("countdown-days").textContent = days.toString().padStart(2, '0');
                document.getElementById("countdown-hours").textContent = hours.toString().padStart(2, '0');
                document.getElementById("countdown-minutes").textContent = minutes.toString().padStart(2, '0');
                document.getElementById("countdown-seconds").textContent = seconds.toString().padStart(2, '0');

                document.getElementById("price-countdown").textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
                
                // If the countdown is finished, display expired message
                if (distance < 0) {
                    clearInterval(countdownInterval);
                    document.getElementById("promo-banner").style.display = "none";
                }
            }
            
            // Update the countdown every 1 second
            updateCountdown();
            const countdownInterval = setInterval(updateCountdown, 1000);
            
            // Close button for promo banner
            const closePromoBtn = document.getElementById('close-promo');
            if (closePromoBtn) {
                closePromoBtn.addEventListener('click', function() {
                    document.getElementById('promo-banner').style.display = 'none';
                });
            }
        })
    </script>
@endpush

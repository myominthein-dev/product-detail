@php
    $payments = [
        [
            'name' => 'AYA Pay',
            'image' => 'aya.jpg',
        ],
        [
            'name' => 'CB Pay',
            'image' => 'cb.jpg',
        ],
        [
            'name' => 'KBZ Pay',
            'image' => 'kbz.jpg',
        ],
        [
            'name' => 'Wave Pay',
            'image' => 'wave.jpg',
        ],
        [
            'name' => 'Paypal Pay',
            'image' => 'paypal.jpg',
        ]
    ];
@endphp

<footer class="mt-auto border-t py-3 border-t-gray-300 w-full ">
    <div class="container ">

        <div class="my-5 flex flex-col items-center justify-center">
            <h3 class="text-lg text-gray-600 font-semibold mb-3">Pay With :</h3>
            <div>

                @foreach ($payments as $payment)
                <img src="{{ asset('/payments/').'/'.$payment['image'] }}" alt="Visa" class="h-8 w-8 inline-block mr-2">
                    
                @endforeach
             </div>
        </div>
        <div class="flex flex-col md:flex-row justify-between gap-2 items-center">
            <div class="flex space-x-4">
                <a href="/" class="text-gray-700 dark:text-gray-100 hover:text-primary-600">Privacy Policy</a>
                <a href="/" class="text-gray-700 dark:text-gray-100 hover:text-primary-600">Terms of Service</a>
            </div>
            <p class="text-gray-700 dark:text-gray-100">© 2025 Mart. All rights reserved.</p>
        </div>

    </div>
</footer>

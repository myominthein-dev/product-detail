<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProductController extends Controller
{
    public $product = [
        'name' => 'Double Deck Convection Oven - 208V, 1 Phase, 11 kW',
        'price' => 24000000,
        'description' => 'This Cooking Performance Group FEC-200-BK double deck standard depth full size electric convection oven is a valuable asset to any commercial kitchen.',
        'key_features' => [
            'Double stack design includes 2 ovens for optimal space efficiency; stacking kit included',
            'Each oven features full size cavity that houses 3 adjustable wire racks',
            'Temperature range from 150 to 500 degrees Fahrenheit per oven',
            'Independent glass doors; stainless steel exterior; porcelain interior floors and sides',
            '208V, 1 Phase, 11 kW',
        ],
        'images' => [
            'oven_1.jpg',
            'oven_2.jpg',
            'oven_3.jpg',
            'oven_4.jpg',
            'oven_5.jpg',
        ],
    
        'specifications' => [
            'Quantity' => '1/Each',
            'Shipping Weight' => '1105 lb.',
            'Width' => '38 Inches',
            'Depth' => '41 1/2 Inches',
            'Height' => '63 1/2 Inches',
            'Interior Width' => '29 Inches',
            'Interior Depth' => '22 1/4 Inches',
            'Interior Height' => '20 Inches',
            'Amps' => '53 Amps',
            'Hertz' => '60 Hz',
            'Phase' => '1 Phase',
            'Voltage' => '208 Volts',
            'Wattage' => '11 Kilowatts',
            'Amps per Cavity' => '53 Amps',
            'Control Type' => 'Dial',
            'Door Type' => 'Glass',
            'Installation Type' => 'Freestanding',
            'Kw per Cavity' => '11 Kw',
            'Maximum Temperature' => '500 Degrees F',
            'Number of Chambers' => '2 Chambers',
            'Number of Decks' => 'Double',
            'Number of Doors' => '4 Doors',
            'Number of Racks' => '6 Racks',
            'Oven Interior Style' => 'Standard Depth',
            'Plug Type' => 'Hardwire',
            'Power Type' => 'Electric',
            'Size' => 'Full Size',
            'Temperature Range' => '150 - 500 Degrees F',
        ],
        'available_stocks' => 10,
        'matched_items' => [
            [
                'name' => 'Cooking Performance Group 351110578 Oven Rack - 28" x 20 5/8"',
                'price' => '400,000',
                'image' => 'matched_1.jpg',
            ],
            [
                'name' => 'Choice Quarter Size 9 1/2" x 13" 19 Gauge Wire in Rim Aluminum Bun / Sheet Pan',
                'price' => '25,000',
                'image' => 'matched_2.webp',
            ],
            [
                'name' => 'Sani Professional Heavy-Duty Cleaning Wipes 11 1/2" X 10" - 675/Case',
                'price' => '300,000',
                'image' => 'matched_3.jpg',
            ],
            [
                'name' => 'Choice Full Size 18" x 26" 19 Gauge Wire in Rim Aluminum Bun Pan / Sheet Pan',
                'price' => '30,000',
                'image' => 'matched_4.webp',
            ],
        ],
    
        'reviews' => [ 
            [
                'user' => 'John Doe',
                'rating' => 5,
                'comment' => 'This oven is an absolute workhorse! It heats up quickly and distributes heat evenly, ensuring perfectly baked goods every time. The dual decks allow me to bake in bulk, which has significantly increased my productivity. If you own a bakery or a restaurant, this is a fantastic investment!',
                'date' => '2023-10-01',
            ],
            [
                'user' => 'Jane Smith',
                'rating' => 4,
                'comment' => 'The oven performs exceptionally well, and I love how consistent the baking results are. However, it’s quite heavy and takes up a lot of space. Make sure you have a dedicated spot for it before purchasing. Other than that, it’s an excellent choice for commercial kitchens.',
                'date' => '2023-09-15',
            ],
            [
                'user' => 'Bob Johnson',
                'rating' => 3,
                'comment' => 'The oven works well for most baking needs, but I’ve noticed slight temperature differences between the two decks. This means I sometimes have to rotate trays for even baking. It’s not a dealbreaker, but better temperature calibration would make this oven perfect.',
                'date' => '2023-08-20',
            ],
            [
                'user' => 'Alice Brown',
                'rating' => 5,
                'comment' => 'I love this oven! It’s easy to use, and the glass doors allow me to monitor my baking without opening the doors. The stainless steel exterior is also easy to clean. Highly recommend for any commercial kitchen looking for a reliable convection oven.',
                'date' => '2023-07-10',
            ]
            ],
            'starDisplay' => [
                [
                    'star-count' => 5,
                    'percentage' => 85,
                ],
                [
                    'star-count' => 4,
                    'percentage' => 10,
                ],
                [
                    'star-count' => 3,
                    'percentage' => 3,
                ],
                [
                    'star-count' => 2,
                    'percentage' => 1,
                ],
                [
                    'star-count' => 1,
                    'percentage' => 1,
                ],
            ],

        'relatedProducts' => [
        [
            'image' => 'related_1.webp', 
            'name' => 'Commercial Convection Ovens', 
            'stocks' => 215
            
            
        ],
        [
            'image' => 'related_2.webp', 
            'name' => 'Backery Convection Ovens', 
            'stocks' => 56
        ],
        [
            'image' => 'related_3.webp', 
            'name' => ' Convection Oven Parts and Accessories', 
            'stocks' => 4210
        ],
        [
            'image' => 'related_4.webp', 
            'name' => 'Commercial Convection Ovens', 
            'stocks' => 150
        ],
        [
            'image' => 'related_5.webp', 
            'name' => 'Commercial Convection Ovens', 
            'stocks' => 20
        ],
        [
            'image' => 'related_6.webp', 
            'name' => 'Commercial Convection Ovens', 
            'stocks' => 80
        ],
        [
            'image' => 'related_7.webp', 
            'name' => 'Commercial Convection Ovens', 
            'stocks' => 275
        ]
    ]
    
    ];

   

    function show () {
        return view('products.show', [
            'product' => $this->product,
        ]);
    }
}

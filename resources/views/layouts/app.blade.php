<!DOCTYPE html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>eCommerce</title>

       
        <!-- Styles / Scripts -->
          
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>

           @keyframes pulse-bg {
            0%, 100% { background-color: rgba(2, 132, 199, 0.9); }
            50% { background-color: rgba(3, 105, 161, 0.9); }
        }
        
        .promo-banner {
            animation: pulse-bg 3s infinite;
        }

            @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        
        .marquee-container {
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
        }
        
        .marquee-content {
            display: inline-block;
            animation: marquee 20s linear infinite;
            padding-left: 10%;
        }
        
        /* For a smoother infinite loop, we duplicate the content */
        .marquee-content2 {
            display: inline-block;
            animation: marquee 20s linear infinite;
            animation-delay: 10s;
            padding-left: 200%;
        }
        
        .countdown-item {
            position: relative;
        }
        
        .countdown-item:not(:last-child)::after {
            content: ":";
            position: absolute;
            right: -4px;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            font-weight: bold;
        }
        </style>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] ">
        <main class=" mx-auto flex  items-center  min-h-screen flex-col">
            @include('partials.header')
            @yield('content')
            @include('partials.footer')
        </main>

        @stack('scripts')
    </body>
</html>

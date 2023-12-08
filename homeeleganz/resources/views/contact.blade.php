<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact Us - Home Decorators</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css'])

    <!-- Tailwind CSS CDN (if not already included in your project) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.1/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 font-sans overflow-x-hidden">

    @include('partials.header')

    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Bringing Elegance to Your Doorstep – Contact Home Eleganz for Your Dream Space Transformation!</p>
        
        <!-- Contact Form -->
        <form action="#" class="space-y-8 mb-8">
            <!-- form contents -->
        </form>

        <!-- Map Section -->
        <div class="flex justify-center">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.1821728395!2d-77.11975948354006!3d38.90466327966786!2m3!1f0!2f0!3f0!3m2!1i1024!1i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDjCsDUyJzIwLjgiTiA3N8KwMDcnMzAuMCJX!5e0!3m2!1sen!2sus!4v1650000000000"
                width="70%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <!-- Contact Details -->
        <div class="text-center mb-8">
            <h3 class="text-xl font-semibold">Home Eleganz</h3>
            <p>460 Portage Ave, Winnipeg, MB R3M3B2</p>
            <p>Phone: (123) 456-7890</p>
            <p>Email: homeeleganz@gmail.com</p>
        </div>
    </div>

    @include('partials.footer')
</body>

</html>

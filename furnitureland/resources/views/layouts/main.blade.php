<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Eleganz</title>

    <!-- slide in animation js -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- @vite('resources/css/app.css') -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>


<body class="font-lato overflow-x-hidden" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    @include('partials.header')
    <!-- flash message according to information-->
    @if (session('success'))
        <div class="alert alert-success mt-7 rounded-lg bg-green-200">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error mt-7 rounded-lg bg-green-200">
            {{ session('error') }}
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger mt-7 rounded-lg bg-red-200">
            {{ session('danger') }}
        </div>
    @endif

    @yield('content')

    <!-- js for animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  	<script>
    	AOS.init();
  	</script>

    <!-- timeout for flashmessages -->
    <script>
        // Wait for the document to be ready
        document.addEventListener("DOMContentLoaded", function() {
            // Select the flash message element
            var flashMessage = document.querySelector('.alert');

            // Check if the flash message exists
            if (flashMessage) {
                // Set a timeout to hide the flash message after 4 seconds
                setTimeout(function() {
                    flashMessage.style.display = 'none';
                }, 3000);
            }
        });
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>


<body>
    @include('partials.header')


    <strong><h1 class="home-h1">Shop By Category</h1></strong><br>
    <div class="category list-view">
        
        <img src="images/img-1.jpg" alt="Description of Image 1">
        <img src="images/img-2.jpg" alt="Description of Image 2">
        <img src="images/pexels-pew-nguyen-244133.jpg" alt="Description of Image 3">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/img-1.jpg" alt="Description of Image 1">
        <img src="images/img-2.jpg" alt="Description of Image 2">
        <img src="images/pexels-pew-nguyen-244133.jpg" alt="Description of Image 3">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
        <img src="images/pexels-tiana-2995012.jpg" alt="Description of Image 4">
    </div>

    @include('partials.footer')


</body>

</html>
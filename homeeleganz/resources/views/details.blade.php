<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Details</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')

</head>


<body class="font-lato overflow-x-hidden">
    @include('partials.header')

    <div class="prod-details-container">
        <div class="prod-desc-image">
            <div class="main-img box-shadow-details">
                <img src="/images/sofa.jpeg" alt="sofa image">
            </div>
            <div class="small-img">
                <div class="img1 box-shadow-details">
                    <img src="/images/img-1.jpg" alt="sofa image">
                </div>
                <div class="img2 box-shadow-details">
                    <img src="/images/img-2.jpg" alt="sofa image">
                </div>
            </div>
        </div>
        <div class="details">
            <h1>Product Name</h1>
            <p class="cat-text">Category Name</p>
            <p class="cat-text">Top Rated in Living Room</p>
            <hr>
            <p class="prod-info"><strong>Price:</strong> $599.99 </p>
            <p class="prod-info"><strong>Brand:</strong> Ciello</p>
            <p class="prod-info"><strong>Colour:</strong> Blue</p>
            <p class="prod-info"><strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <hr>
            <strong><h2>About This Item</h2></strong>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

    <div class="review">
        <h3>Product Reviews</h3>
        <div class="review-box">
            <div class="user-img"></div>
            <div class="user-contents">
                
            </div>
        </div>
    </div>

    
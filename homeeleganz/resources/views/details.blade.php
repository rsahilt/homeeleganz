<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Product Details</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
            <br>
            <button type="button" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add to Cart</button>

        </div>
    </div>

    <div class="review">
        <h3>Product Reviews</h3>
        <div class="review-box">
            <div class="user-img">
                <div class="w-[70px] h-[70px] bg-black rounded-[50%]"></div>
            </div>

            <div class="user-contents">
                <strong><p>Firstname Lastname</p></strong>
                <p class="cat-text date-text">Posted on: 12/01/2023</p>
                <p>mollit anim id est laborum.  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>mollit anim id est laborum.  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>mollit anim id est laborum.  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="review-box">
            <div class="user-img">
                <div class="w-[70px] h-[70px] bg-black rounded-[50%]"></div>
            </div>

            <div class="user-contents">
                <strong><p>Firstname Lastname</p></strong>
                <p class="cat-text date-text">Posted on: 12/01/2023</p>
                <p>mollit anim id est laborum.  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <div class="review-box">
            <div class="user-img">
                <div class="w-[70px] h-[70px] bg-black rounded-[50%]"></div>
            </div>

            <div class="user-contents">
                <strong><p>Firstname Lastname</p></strong>
                <p class="cat-text date-text">Posted on: 12/01/2023</p>
                <p>mollit anim id est laborum.  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>

        <p>Please <a href="#"><u>login</u></a> to leave a review.</p>
        <h2 class="reviewh2">Leave a Review</h2>
        <form class="mb-6">
            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <label for="comment" class="sr-only">Your comment</label>
                <textarea id="comment" rows="6"
                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                    placeholder="Leave your review..." ></textarea>
            </div>
            <button type="submit"
                class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                Post comment
            </button>
        </form>
    </div>

    @include('partials.footer')
</body>

</html>

    
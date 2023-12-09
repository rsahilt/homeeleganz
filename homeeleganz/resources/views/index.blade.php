@extends('layouts.main')
@section('content')   

    <div id="title" class="font-lato text-center text-[1.5em] mt-[1rem] tracking-wider">
        <h1>Transform Your Space, Click by Click: Where Style Meets Convenience!</h1>
    </div>

    <div id=" hero-image" class="w-[100%] mt-[1rem]">
        <img src="/images/hero-image.png" class="mx-auto">
    </div>
    
    <div id="shop" class="mb-[1rem]">

        <div id="shop-by-category">
            <h1 class="text-[1.5em] my-[1rem] ml-[1rem] tracking-wider">Shop by category</h1>
            <div class="flex justify-around">
                @include('components.card')
                @include('components.card')
                @include('components.card')
                @include('components.card')
            </div>
        </div>
        <!-- <div id="shop-by-brand">
            <h1 class="text-[1.5em] my-[1rem] ml-[1rem] tracking-wide">Shop by brand</h1>
            <div class="flex justify-around">
                @include('components.card')
                @include('components.card')
                @include('components.card')
                @include('components.card')
            </div>
        </div> -->
        
        <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl mt-9">
            <h3
                class="mb-6 text-3xl font-bold text-neutral-800 dark:text-neutral-200">
                Testimonial
            </h3>
        </div>


        <!-- Container for the Testimonials -->
        <div class="grid gap-6 text-center md:grid-cols-3 lg:gap-12 bg-gray-100 py-10 px-5">
            <!-- First Testimonial -->
            <div class="mb-12 md:mb-0">
                <div class="mb-6 flex justify-center">
                    <img
                        src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                        class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                </div>
                <h5 class="mb-2 text-xl font-semibold">Steve George</h5>
                <h6 class="mb-2 font-semibold text-primary dark:text-primary-500">
                Winnipeg
                </h6>
                <p class="mb-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                </p>
            </div> <!--First testimonial closed-->

            <div class="mb-12 md:mb-0">
                <div class="mb-6 flex justify-center">
                    <img
                        src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                        class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                </div>
                <h5 class="mb-2 text-xl font-semibold">Brent Scott</h5>
                <h6 class="mb-2 font-semibold text-primary dark:text-primary-500">
                Toronto
                </h6>
                <p class="mb-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                </p>
            </div> <!--second testimonial closed-->


            <div class="mb-12 md:mb-0">
                <div class="mb-6 flex justify-center">
                    <img
                        src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                        class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
                </div>
                <h5 class="mb-2 text-xl font-semibold">Victor Balogun</h5>
                <h6 class="mb-2 font-semibold text-primary dark:text-primary-500">
                Alberta
                </h6>
                <p class="mb-2">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
                id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                </p>
            </div> <!--third testimonial closed-->

        
        </div><!-- Container for the Testimonials Closed-->

    </div>

    @include('partials.footer')

@endsection


    
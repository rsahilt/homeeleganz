@extends('layouts.main')
@section('content')   

<!-- flash message for admin/auth logi -->
@if(session('error'))
    <div class="bg-red-500 text-white text-center py-2" style="margin-top: 15px;">
        <div class="mx-auto w-full max-w-xl">{{ session('error') }}</div> 
    </div>
@endif

    <!-- image slider -->
    <div id="hero-image" class="w-[100%] h-700">
        <!-- <img src="/images/hero-image.png" class="mx-auto"> -->
        <div class="slideshow-container">
  			<div class="mySlides fade">
   				<img src="/images/slide1.jpeg" class="slides">
    		</div>
    		<div class="mySlides fade">
   				<img src="/images/slide2.jpeg" class="slides">
    		</div>
    		<div class="mySlides fade">
   				<img src="/images/slide3.jpeg" class="slides">
    		</div>
    		<div class="mySlides fade">
   				<img src="/images/slide4.jpeg" class="slides">
    		</div>
		</div>
    </div>
    
    <div id="shop" class="mb-[1rem]">
        <!-- a static section -->
        <div id="shop-by-category" data-aos="slide-up" data-aos-duration="1000">
            <h1 class="text-[1.5em] my-[1rem] ml-[1rem] tracking-wider">Shop by category</h1>
            <div class="flex md:flex-row md:gap-0 flex-col gap-[2rem] justify-around">
                <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
                    <!-- Page1 -->
                    <div class="page1home absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                        <img class="h-5/6 w-full object-cover" src="/images/resized_living_1.jpg" alt="living" />
                        <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="mt-1 px-4 text-center text-gray-600">Living</p>
                    </div>
                    <!-- /Page1 -->

                    <!-- Page2 -->
                    <div class="page2home absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                        <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="px-8 text-center">Give life to your living room.</p>
                    </div>
                    <!-- /Page2 -->
                </div>


                <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
                    <!-- Page1 -->
                    <div class="page1home absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                        <img class="h-5/6 w-full object-cover" src="/images/resized_Dining_2.jpg" alt="dining" />
                        <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="mt-1 px-4 text-center text-gray-600">Dining</p>
                    </div>
                    <!-- /Page1 -->

                    <!-- Page2 -->
                    <div class="page2home absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                        <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="px-8 text-center">Not just your tummy, make you eyes full with our collection of beautiful kitchen and dining decors.</p>
                    </div>
                    <!-- /Page2 -->
                </div>
                

                <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
                    <!-- Page1 -->
                    <div class="page1home absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                        <img class="h-5/6 w-full object-cover" src="/images/resized_office_1.jpg" alt="office" />
                        <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="mt-1 px-4 text-center text-gray-600">Home Office</p>
                    </div>
                    <!-- /Page1 -->

                    <!-- Page2 -->
                    <div class="page2home absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                        <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="px-8 text-center">Make your home feel like your cabin.</p>
                    </div>
                    <!-- /Page2 -->
                </div>


                <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
                    <!-- Page1 -->
                    <div class="page1home absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                        <img class="h-5/6 w-full object-cover" src="/images/resized_bedroom_6.jpg" alt="bedroom" />
                        <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="mt-1 px-4 text-center text-gray-600">Bedroom</p>
                    </div>
                    <!-- /Page1 -->

                    <!-- Page2 -->
                    <div class="page2home absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                        <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="px-8 text-center">Let your soul take a nap.</p>
                    </div>
                    <!-- /Page2 -->
                </div>


                <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
                    <!-- Page1 -->
                    <div class="page1home absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                        <img class="h-5/6 w-full object-cover" src="/images/resized_garden_3.jpg" alt="garden" />
                        <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="mt-1 px-4 text-center text-gray-600">Garden</p>
                    </div>
                    <!-- /Page1 -->

                    <!-- Page2 -->
                    <div class="page2home absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                        <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                        <p class="px-8 text-center">Beautiful collection for to bring colors to your garden.</p>
                    </div>
                    <!-- /Page2 -->
                </div>
            </div>
        </div>
       
       
        <!-- Container for the Testimonials -->
        <div class="grid gap-6 text-center md:grid-cols-3 lg:gap-12 bg-gray-100 py-10 px-5 mt-6" data-aos="slide-up" data-aos-duration="1000">
            <!-- First Testimonial -->
            <div class="testimonial mb-12 md:mb-0 bg-white py-4 px-4 rounded-2xl hover:scale-105 transition-all" data-aos="slide-up" data-aos-duration="1000">
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

            <div class="testimonial mb-12 md:mb-0 bg-white py-4 px-4 rounded-2xl hover:scale-105 transition-all" data-aos="slide-up" data-aos-duration="1000">
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


            <div class="testimonial mb-12 md:mb-0 bg-white py-4 px-4 rounded-2xl hover:scale-105 transition-all" data-aos="slide-up" data-aos-duration="1000">
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


    
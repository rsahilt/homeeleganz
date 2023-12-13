@extends('layouts.main')
@section('content')   

@if(session('error'))
    <div class="bg-red-500 text-white text-center py-2" style="margin-top: 15px;">
        <div class="mx-auto w-full max-w-xl">{{ session('error') }}</div> 
    </div>
@endif


    <div id=" hero-image" class="w-[100%] h-650 mt-[1rem]">
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

        <div id="shop-by-category" data-aos="slide-up" data-aos-duration="1000">
            <h1 class="text-[1.5em] my-[1rem] ml-[1rem] tracking-wider">Shop by category</h1>
            <div class="flex md:flex-row md:gap-0 flex-col gap-[2rem] justify-around">
            <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
            <!-- Page1 -->
            <div class="absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                <img class="h-4/6 w-full object-cover" src="/images/resized_living_1.jpg" alt="living" />
                <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="mt-1 px-4 text-center text-gray-600">Living</p>
            </div>
            <!-- /Page1 -->

            <!-- Page2 -->
            <div class="absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="px-8 text-center">The living room is a versatile and central space in any home, often serving as a gathering spot for family and friends. Typically furnished with comfortable sofas, armchairs, and a coffee table, it's designed for relaxation and socializing. Many living rooms also feature entertainment systems, like televisions and sound equipment. </p>
            </div>
            <!-- /Page2 -->
        </div>
        <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
            <!-- Page1 -->
            <div class="absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                <img class="h-4/6 w-full object-cover" src="/images/resized_Dining_2.jpg" alt="dining" />
                <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="mt-1 px-4 text-center text-gray-600">Dining</p>
            </div>
            <!-- /Page1 -->

            <!-- Page2 -->
            <div class="absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="px-8 text-center">The kitchen is the heart of many homes, serving as a place for cooking, dining, and socializing. It typically includes appliances like a stove, refrigerator, and dishwasher, along with countertops for food preparation and storage cabinets. A well-designed kitchen is both functional and inviting, with an efficient layout and easy access to utensils, cookware, and ingredients.</p>
            </div>
            <!-- /Page2 -->
        </div>
        <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
            <!-- Page1 -->
            <div class="absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                <img class="h-4/6 w-full object-cover" src="/images/resized_office_1.jpg" alt="office" />
                <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="mt-1 px-4 text-center text-gray-600">Home Office</p>
            </div>
            <!-- /Page1 -->

            <!-- Page2 -->
            <div class="absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="px-8 text-center">A home office is designed to be a productive space for work or study. It usually features a desk, comfortable chair, and storage solutions like shelves or filing cabinets. Good lighting is crucial, with many people opting for a combination of natural light and task lighting.</p>
            </div>
            <!-- /Page2 -->
        </div>
        <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
            <!-- Page1 -->
            <div class="absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                <img class="h-4/6 w-full object-cover" src="/images/resized_bedroom_6.jpg" alt="bedroom" />
                <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="mt-1 px-4 text-center text-gray-600">Bedroom</p>
            </div>
            <!-- /Page1 -->

            <!-- Page2 -->
            <div class="absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="px-8 text-center">
                    A bedroom is a personal sanctuary that offers privacy and comfort. It is primarily furnished with a bed, which is the focal point of the room, often complemented by bedside tables, a dresser, and sometimes a wardrobe. Many bedrooms also include a small seating area or a study space. The choice of bedding, curtains, and lighting plays a significant role in setting a calm and relaxing atmosphere.
                </p>
            </div>
            <!-- /Page2 -->
        </div>
        <div class="group relative m-10 h-96 w-96 overflow-hidden rounded-lg shadow-md">
            <!-- Page1 -->
            <div class="absolute left-0 top-0 h-full w-full transition-all duration-300 ease-in-out group-hover:-top-96">
                <img class="h-4/6 w-full object-cover" src="/images/resized_garden_3.jpg" alt="garden" />
                <h1 class="mt-4 px-4 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="mt-1 px-4 text-center text-gray-600">Garden</p>
            </div>
            <!-- /Page1 -->

            <!-- Page2 -->
            <div class="absolute left-0 -bottom-96 flex h-full w-full flex-col justify-center transition-all duration-300 ease-in-out group-hover:bottom-0">
                <h1 class="mb-2 px-8 text-center font-serif text-xl font-semibold text-rose-500"></h1>
                <p class="px-8 text-center"> A garden is an outdoor area that brings nature close to home. It can vary greatly in size and style, from manicured lawns and flowerbeds to wild, naturalistic landscapes. Gardens often feature elements like patios or decks, garden furniture, and sometimes a water feature, like a fountain or pond. </p>
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


    
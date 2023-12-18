@extends('layouts.main')

@section('content')
    <section class="text-gray-600 body-font bg-gray-100 mt-6">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20 mt-[-55px]">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">
                    {{ $title ?? 'Default Title' }} 
                </h1>
                <div class="prose">
                    <h2 class="text-2xl font-bold mb-2">General Terms</h2>
                    <p><p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        By accessing and placing an order with Preline, you confirm that you are in agreement with and bound by the terms and conditions contained in the Terms Of Use outlined below. These terms apply to the entire website and any email or other type of communication between you and Preline.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Liability Disclaimer</h2>

                    <p><p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        Under no circumstances shall Preline team be liable for any direct, indirect, special, incidental, or consequential damages, including, but not limited to, loss of data or profit, arising out of the use, or the inability to use, the materials on this site, even if Preline team or an authorized representative has been advised of the possibility of such damages. If your use of materials from this site results in the need for servicing, repair or correction of equipment or data, you assume any costs thereof.
                    </p>
                    <h2 class="text-2xl font-bold mb-2" >Resource Usage</h2>
                    <p><p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                        Preline will not be responsible for any outcome that may occur during the course of usage of our resources. We reserve the rights to change prices and revise the resources usage policy at any moment.
                    </p>
                    <!-- Additional sections with their respective titles -->
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.footer')
@endsection

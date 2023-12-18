@extends('layouts.main')

@section('content')
    <section class="text-gray-600 body-font bg-gray-100 mt-6">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-left w-full mb-20 mt-[-55px]">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900 text-center">
                   {{ $title }} 
                </h1>

                <div class="prose">
                    <h2 class="text-2xl font-bold mb-2">General Terms</h2>
                    <p>
                        By accessing and placing an order with HomeEleganz, you confirm that you are in agreement with and bound by the terms and conditions contained in the Terms Of Use outlined below. These terms apply to the entire website and any email or other type of communication between you and HomeEleganz.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Liability Disclaimer</h2>
                    <p>
                        Under no circumstances shall HomeEleganz team be liable for any direct, indirect, special, incidental, or consequential damages, including, but not limited to, loss of data or profit, arising out of the use, or the inability to use, the materials on this site, even if HomeEleganz team or an authorized representative has been advised of the possibility of such damages. If your use of materials from this site results in the need for servicing, repair or correction of equipment or data, you assume any costs thereof.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Resource Usage</h2>
                    <p>
                        HomeEleganz will not be responsible for any outcome that may occur during the course of usage of our resources. We reserve the rights to change prices and revise the resources usage policy at any moment.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Products</h2>
                    <p>
                        All products and services are delivered by HomeEleganz electronically and you can access your downloads from your profile page. HomeEleganz is not responsible for any technological delays beyond our control. If your spam blocker blocks our emails from reaching you or you do not provide a valid email address where you can be reachable then you can access your download from the Downloads page.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Security</h2>
                    <p>
                        HomeEleganz does not process any order payments through the website. All payments are processed securely through an online payment provider (e.g. PayPal, Stripe), a third-party online payment provider. Feel free to contact us about our security policies.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Ownership</h2>
                    <p>
                        Ownership of the product is governed by the usage license selected by the seller.
                    </p>
                    <h2 class="text-2xl font-bold mb-2">Changes to Terms</h2>
                    <p>
                        If we change our terms of use, we will post those changes on this page. Registered users will be sent an email that outlines changes made to the terms of use.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.footer')
@endsection

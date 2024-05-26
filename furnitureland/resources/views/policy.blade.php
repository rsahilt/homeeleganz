@extends('layouts.main')
@section('content')
    <!-- a static policy page -->
    <section class="bg-gray-100 body-font">
        <div class="container px-5 py-24 mx-auto bg-gray-100" data-aos="slide-up" data-aos-duration="1000">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font text-indigo-900">Privacy Policy</h1>
            </div>
            <div class="lg:w-2/3 mx-auto leading-relaxed text-base">
                <p>Welcome to Home Eleganz's Privacy Policy. This policy outlines how we collect, use, disclose, and protect your personal information when you use our website.</p>
                <ol class="list-decimal mt-4 ml-6">
                    <li>
                        <h2 class="font-medium text-gray-900 mb-2">Information We Collect</h2>
                        <p>When you visit our website, we may collect certain information to improve your browsing experience:</p>
                        <ul class="list-disc mt-2 ml-6">
                            <li>Personal Information: Such as your name, email address, and contact details provided when you register an account or make a purchase.</li>
                            <li>Usage Data: Details about your browsing activity on our website, including pages visited, time spent, and interactions.</li>
                            <li>Cookies and Tracking Technologies: We use cookies and similar tracking technologies to enhance user experience, analyze trends, and administer the website.</li>
                        </ul>
                    </li>
                    <li class="mt-4">
                        <h2 class="font-medium text-gray-900 mb-2">How We Use Your Information</h2>
                        <p>We use the collected information for various purposes:</p>
                        <ul class="list-disc mt-2 ml-6">
                            <li>Personalization: To personalize your experience and tailor our content, products, and services to your preferences.</li>
                            <li>Communication: To communicate with you regarding orders, inquiries, and promotional offers.</li>
                            <li>Analytics: To analyze website usage, track trends, and improve our website's functionality.</li>
                            <li>Marketing: To send you marketing communications and updates about new products or services, if you've opted to receive them.</li>
                        </ul>
                    </li>
                    <!-- Include more points as needed -->
                </ol>
                <!-- Add more content sections based on the privacy policy -->
            </div>
            <!-- Contact information -->
            <div class="mt-8 text-center">
                <p>If you have any questions or concerns about our Privacy Policy, please contact us at <a href="mailto:contactus@homeeleganz.com" class="text-indigo-500">contactus@homeeleganz.com</a>.</p>
            </div>
        </div>
    </section>

    <!-- ... Remaining Sections ... -->

    @include('partials.footer')
@endsection

@extends('layouts.app')
@section('head_scripts')
<title>Home - {{ config('app.name') }}</title>
<meta name="description" content="Chinley Community.">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')
<main>
    <header class="relative bg-cool-gray-100 lg:bg-gray-50">
        <div class="relative pt-10 sm:pb-10 md:py-18 lg:py-24 px-4 sm:px-8 mx-auto lg:max-w-7xl">
            <div class="mx-auto max-w-md sm:max-w-3xl lg:max-w-none lg:w-1/2 lg:mx-0">

                <h1
                    class="mb-8 text-gray-900 font-extrabold tracking-tight sm:tracking-normal leading-none text-4xl sm:text-5xl text-center lg:text-left">
                    {{$venue->name}}
                    <span class="block text-pink-600">Chinley {{$venue->town}}</span>
                </h1>
                <p class="mb-10 mx-auto text-gray-600 text-lg sm:text-xl md:max-w-xl lg:max-w-none">
                    {{$venue->intro}}
                </p>

                <div class="flex justify-center sm:justify-start">
                    <span class="rounded-md shadow">
                        <a href="#book"
                            class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-2 md:px-8 md:text-lg">Book
                            {{$venue->name}}</a>
                    </span>
                </div>
            </div>
        </div>

        <div
            class="relative  -mt-15 sm:mt-0 w-full sm:h-72 md:h-96 lg:h-full lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <picture>
                <img src="{{asset($venue->cover_image)}}"
                    class="sm:absolute sm:inset-0 sm:w-full sm:h-full sm:object-cover" alt="{{$venue->name}}"
                    aria-hidden="true">
            </picture>
        </div>


        <svg class="block lg:hidden absolute top-0 left-0 w-full text-gray-50 " viewBox="0 0 411 201">
            <path
                d="M0 0C80.0392 0 322.5 0 322.5 0C322.5 0 330.534 0 411 0C411 0 411 5.1327 411 25.5C411 39 343.5 38 276.5 105.5C209.5 173 146 105.5 86.5 140.5C27 175.5 0 201 0 201V0Z"
                fill="currentColor"></path>
        </svg>


        <svg class="hidden lg:block absolute right-1/2 inset-y-0 h-full w-48 text-gray-50 transform translate-x-1/2 "
            fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M50 0h50L50 100H0z"></path>
        </svg>
    </header>
    <div class="bg-gray-50 pt-12 sm:pt-16">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900 sm:text-4xl sm:leading-10">
                    Give your customers the experience they deserve
                </h2>
                <p class="mt-3 text-xl leading-7 text-gray-500 sm:mt-4">
                    Your reputation is safe in the hands of Reception 24/7’s phone
                    answering service. Our team of trained receptionists learn all the ins
                    and outs of your business, so they’re always ready to handle your
                    calls professionally and give your customers a quality experience
                    every time they call.
                </p>
            </div>
        </div>
        <div class="mt-10 bg-white">
            <div class="relative">
                <div class="absolute inset-0 h-1/2 bg-gray-50"></div>
                <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-7xl mx-auto">
                        <dl class="rounded-lg bg-white shadow-lg md:grid md:grid-cols-3 items-start">
                            <div class="border-b border-gray-100 p-6 text-center md:border-0 md:border-r">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto mb-3 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z">
                                        </path>
                                    </svg>
                                    Every caller is a <abbr class="no-underline"
                                        title="Very Important Person">VIP</abbr>
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    Our receptionists are on-hand when you need us to politely and
                                    professionally answer your calls. You can trust us to handle
                                    every customer with the same care and attention that you do.
                                </dd>
                            </div>
                            <div
                                class="flex flex-col border-t border-b border-gray-100 p-6 text-center sm:border-0 sm:border-l sm:border-r">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto mb-3 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z">
                                        </path>
                                    </svg>
                                    We’ll be your voice
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    We’ll represent your business by answering every call with a
                                    personalized greeting and guiding each customer interaction
                                    with a custom script that’s developed just for you.
                                </dd>
                            </div>
                            <div class="flex flex-col border-t border-gray-100 p-6 text-center sm:border-0 sm:border-l">
                                <dt class="text-2xl leading-none font-extrabold text-pink-600">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 mx-auto mb-3 text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                    Real people, no bots
                                </dt>
                                <dd class="mt-3 text-gray-600 md:text-center">
                                    Your customers want to speak to a live agent who understands
                                    them and gives them clear answers to their queries. All of our
                                    receptionists have native or equivalent English proficiency.
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-24 relative max-w-screen-xl mx-auto">
        <div class="h-56 sm:h-80 md:h-96 lg:h-full lg:w-1/2 lg:absolute lg:right-1/2">
            <picture>
                <source type="image/webp"
                    srcset="/marketing/images/never-miss-a-call-1280x853.webp?id=fa78254638285a508efe 1280w, /marketing/images/never-miss-a-call-2560x1707.webp?id=58721fbe9b0872b6e4a5 2560w">
                <source type="image/jpeg"
                    srcset="/marketing/images/never-miss-a-call-1280x853.jpg?id=c686f9981d957d57651a 1280w, /marketing/images/never-miss-a-call-2560x1707.jpg?id=b8690adeb40afae6cb33 2560w">
                <img src="/marketing/images/never-miss-a-call-2560x1707.jpg?id=b8690adeb40afae6cb33"
                    class="w-full h-full object-cover object-right-top"
                    alt="A business woman stands outside her office, smiling at the viewer" loading="lazy">
            </picture>
        </div>
        <div class="px-4 py-8 sm:px-6 sm:py-12 lg:py-16 lg:ml-1/2 lg:pl-12">
            <h2 class="text-4xl leading-tight font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                Never miss a call, <span class="whitespace-no-wrap">never miss a sale</span>
            </h2>
            <p class="font-bold mt-6 text-xl leading-7 text-gray-700">
                <strong class="font-bold text-pink-600">85% of people whose calls are not answered won’t call
                    back.¹</strong>
                How much are missed calls costing your business?
            </p>
            <p class="mt-6 text-lg leading-7 text-gray-500">
                With Reception 24/7’s call answering service, you’ll capture every lead,
                book every appointment, and solve every caller issue. We answer most
                calls in the first few rings so your customers know you care.
            </p>
            <div class="mt-8">
                <span class="inline-flex rounded-md shadow">
                    <a href="/en-GB/sign-up"
                        class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-4 md:px-10 md:text-lg">Get
                        started for free</a>
                </span>
            </div>
            <p class="mt-12 text-xs leading-4 text-gray-500">
                <cite class="not-italic">¹ Aircall - “Missed Calls: The Real Impact on Your Business”</cite>
            </p>
        </div>
    </div>
    <div class="mt-12 lg:mt-24 relative max-w-screen-xl mx-auto">
        <div class="h-56 sm:h-80 md:h-96 lg:h-full lg:w-1/2 lg:absolute lg:left-1/2">
            <picture>
                <source type="image/webp"
                    srcset="/marketing/images/focus-on-your-business-1280x850.webp?id=5bcaea1003a6d3941755 1280w, /marketing/images/focus-on-your-business-2560x1700.webp?id=878fc30113cf1f661d50 2560w">
                <source type="image/jpeg"
                    srcset="/marketing/images/focus-on-your-business-1280x850.jpg?id=12056dba02e28cfb77ad 1280w, /marketing/images/focus-on-your-business-2560x1700.jpg?id=241dfc787bfefcab9af5 2560w">
                <img src="/marketing/images/focus-on-your-business-2560x1700.jpg?id=241dfc787bfefcab9af5"
                    class="w-full h-full object-cover object-left-top"
                    alt="An architect smiles at the viewer while colleagues work on in the background" loading="lazy">
            </picture>
        </div>
        <div class="px-4 py-8 sm:px-6 sm:py-12 lg:py-16 lg:mr-1/2 lg:pr-12">
            <h2 class="text-4xl leading-tight font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                We’ll focus on your calls, so you can focus on your business
            </h2>
            <p class="font-bold mt-6 text-xl leading-7 text-gray-700">
                <strong class="font-bold text-pink-600">Answering spam calls wastes tens of millions of hours every year
                    for small businesses.²</strong> How much is your employees’ time worth?
            </p>
            <p class="mt-6 text-lg leading-7 text-gray-500">
                So your teams are not disrupted, our remote receptionists are trained to
                weed out the telemarketers, robocalls, and unqualified leads. Plans start from
                <strong>just £11.99 per month</strong>—a fraction of the cost of hiring in-house.
            </p>
            <div class="mt-8">
                <span class="inline-flex rounded-md shadow">
                    <a href="/en-GB/pricing"
                        class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-4 md:px-10 md:text-lg">Choose
                        your plan</a>
                </span>
            </div>
            <p class="mt-12 text-xs leading-4 text-gray-500">
                <cite class="not-italic">² Marchex - “Spam Phone Calls Cost U.S. Small Businesses Half-Billion Dollars
                    in Lost Productivity”</cite>
            </p>
        </div>
    </div>
    <div class="bg-gray-50 overflow-hidden">
        <div class="relative max-w-screen-xl mx-auto py-12 lg:py-24 px-4 sm:px-6 lg:px-8">

            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
                width="404" height="784" viewBox="0 0 404 784" fill="none">
                <defs>
                    <pattern id="a" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <path fill="currentColor" d="M0 0h4v4H0z" class="text-gray-200"></path>
                    </pattern>
                </defs>
                <path fill="url(#a)" d="M0 0h404v784H0z"></path>
            </svg>

            <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
                <div class="lg:col-span-1">
                    <h2 class="text-3xl leading-tight font-extrabold tracking-snug text-gray-900 sm:text-4xl">
                        A telephone answering service that ticks all the boxes
                    </h2>
                </div>
                <div class="mt-10 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:col-span-2 lg:mt-0">
                    <div class="">
                        <div class="flex">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-lime-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-4 pt-2">
                                <h3 class="text-xl leading-6 font-medium text-gray-900">
                                    Custom greetings and call scripts
                                </h3>
                                <p class="mt-2 text-base leading-6 text-gray-600">
                                    We’ll work with you to define how you want your calls and queries answered. Your
                                    customers will think our virtual receptionists are in your office.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 sm:mt-0">
                        <div class="flex">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-lime-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-4 pt-2">
                                <h3 class="text-xl leading-6 font-medium text-gray-900">
                                    Message taking
                                </h3>
                                <p class="mt-2 text-base leading-6 text-gray-600">
                                    Never miss a business opportunity again! Our call handling team will take messages
                                    and deliver them to you via email or SMS.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 sm:mt-0">
                        <div class="flex">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-lime-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-4 pt-2">
                                <h3 class="text-xl leading-6 font-medium text-gray-900">
                                    Call transfer
                                </h3>
                                <p class="mt-2 text-base leading-6 text-gray-600">
                                    We’ll transfer calls through to you and your team, and we can even stay on the line
                                    to provide the caller’s details and the reason for their call.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 sm:mt-0">
                        <div class="flex">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-lime-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-4 pt-2">
                                <h3 class="text-xl leading-6 font-medium text-gray-900">
                                    Call screening
                                </h3>
                                <p class="mt-2 text-base leading-6 text-gray-600">
                                    No more robocalls, telemarketers, or other distractions interrupting your workday!
                                    Simply tell us which calls you want us to allow through.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 sm:mt-0">
                        <div class="flex">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-lime-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-4 pt-2">
                                <h3 class="text-xl leading-6 font-medium text-gray-900">
                                    Appointment scheduling
                                </h3>
                                <p class="mt-2 text-base leading-6 text-gray-600">
                                    Our live agents can book new appointments directly into your calendar, as well as
                                    reschedule and cancel existing bookings.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 sm:mt-0">
                        <div class="flex">
                            <div>

                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-lime-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div class="pl-4 pt-2">
                                <h3 class="text-xl leading-6 font-medium text-gray-900">
                                    Lead collection
                                </h3>
                                <p class="mt-2 text-base leading-6 text-gray-600">
                                    Tell us the information you need and our experienced receptionists will pre-qualify
                                    leads so you can focus on the best opportunities.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 sm:col-span-2 text-center">
                        <span class="inline-flex rounded-md shadow">
                            <a href="/en-GB/faq"
                                class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-500 hover:bg-teal-600 focus:outline-none focus:border-teal-600 focus:shadow-outline-teal transition duration-150 ease-in-out px-8 py-3 md:py-4 md:px-10 md:text-lg">Your
                                questions answered</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative bg-gray-800">
        <div class="h-56 sm:h-72 md:absolute md:left-0 md:h-full md:w-1/2">
            <picture>
                <img src="/marketing/images/request-a-consultation-2560x1707.jpg?id=bb96f62be19959cf1eec"
                    class="w-full h-full object-cover object-right-top"
                    alt="Two colleagues in an office work together on a tablet" loading="lazy">
            </picture>
        </div>
        <div class="relative max-w-screen-xl mx-auto px-4 py-12 sm:px-6 lg:pl-12 lg:pr-8 lg:py-16">
            <div class="md:ml-auto md:w-1/2 md:pl-10">
                <div class="text-base leading-6 font-semibold uppercase tracking-wider text-gray-300">
                    Looking to book {{$venue->name}}?
                </div>
                <h2 class="mt-2 text-white text-3xl leading-9 font-extrabold sm:text-4xl sm:leading-10">
                    Book Here
                </h2>
                <p class="mt-3 text-lg leading-7 text-gray-300">
                    {{$venue->name}} is available for public bookings , e.g Childrens parties.
                </p>

                <form action="" method="POST" class="mt-8 max-w-sm">

                    <div>
                        <label for="contactName" class="block text-sm font-medium leading-5 text-white">Your
                            name</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-fullName" name="fullName" autocomplete="name" autocapitalize="words"
                                type="text" maxlength="70" required=""
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-4">
                        <label for="contactEmail" class="block text-sm font-medium leading-5 text-white">Email
                            address</label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-email" name="email" autocomplete="email" type="email" maxlength="254"
                                required=""
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label for="contact-phone" class="block text-sm font-medium leading-5 text-white">Phone
                                number</label>
                            <span class="text-xs leading-5 text-gray-300" id="contact-phone-optional">Optional</span>
                        </div>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="contact-phone" name="phone" autocomplete="tel" type="tel"
                                aria-describedby="contact-phone-optional"
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-teal focus:border-teal-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>
                    </div>


                    <div class="mt-8">
                        <span class="inline-flex rounded-md shadow">
                            <button type="submit"
                                class="flex items-center justify-center border border-transparent text-base leading-6 font-medium rounded-md text-gray-900 bg-white hover:text-pink-600 focus:outline-none focus:text-pink-600 focus:shadow-outline transition duration-150 ease-in-out px-5 py-3">
                                Request A Booking
                            </button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('layouts.app')
@section('head_scripts')
<title>Home - {{ config('app.name') }}</title>
<meta name="description" content="Chinley Community.">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endsection

@section('content')




{{-- Tag Line --}}

{{-- Intro --}}
<section class="relative bg-cover h-96" style="background-image:url('{{ asset($venue->cover_image) }}');">
    <div class="w-full h-full absolute bg-gray-800 opacity-40"></div>

</section>
<div class="max-w-7xl mx-auto px-8 z-10 relative">
    <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 py-12">

            <h1 class="text-4xl effect-4 text-white">
                {{ $venue->name }}
            </h1>

            <p class="mt-4 text-white"> {{ $venue->intro }}</p>
        </div>


    </div>

</div>


<div class="container">
    <div class="row lg:flex justify-between">
        <div class="column w-full lg:w-6/12 pt-6 md:pt-8 xl:pt-12 lg-max:mb-12">
            <p class="tagline text-tangerine mb-2 words chars splitting animate" data-animate="splitting"
                style="--word-total:2; --char-total:11;"><span class="word" data-word="Early"
                    style="--word-index:0;"><span class="char" data-char="E" style="--char-index:0;">E</span><span
                        class="char" data-char="a" style="--char-index:1;">a</span><span class="char" data-char="r"
                        style="--char-index:2;">r</span><span class="char" data-char="l"
                        style="--char-index:3;">l</span><span class="char" data-char="y"
                        style="--char-index:4;">y</span></span><span class="whitespace"> </span><span class="word"
                    data-word="Access" style="--word-index:1;"><span class="char" data-char="A"
                        style="--char-index:5;">A</span><span class="char" data-char="c"
                        style="--char-index:6;">c</span><span class="char" data-char="c"
                        style="--char-index:7;">c</span><span class="char" data-char="e"
                        style="--char-index:8;">e</span><span class="char" data-char="s"
                        style="--char-index:9;">s</span><span class="char" data-char="s"
                        style="--char-index:10;">s</span></span></p>

            <h1 class="heading-l mb-4 words chars splitting animate" data-animate="splitting"
                style="--word-total:5; --char-total:18;"><span class="word" data-word="Honey,"
                    style="--word-index:0;"><span class="char" data-char="H" style="--char-index:0;">H</span><span
                        class="char" data-char="o" style="--char-index:1;">o</span><span class="char" data-char="n"
                        style="--char-index:2;">n</span><span class="char" data-char="e"
                        style="--char-index:3;">e</span><span class="char" data-char="y"
                        style="--char-index:4;">y</span><span class="char" data-char=","
                        style="--char-index:5;">,</span></span><span class="whitespace"> </span><span class="word"
                    data-word="I" style="--word-index:1;"><span class="char" data-char="I"
                        style="--char-index:6;">I</span></span><span class="whitespace"> </span><span class="word"
                    data-word="Joined" style="--word-index:2;"><span class="char" data-char="J"
                        style="--char-index:7;">J</span><span class="char" data-char="o"
                        style="--char-index:8;">o</span><span class="char" data-char="i"
                        style="--char-index:9;">i</span><span class="char" data-char="n"
                        style="--char-index:10;">n</span><span class="char" data-char="e"
                        style="--char-index:11;">e</span><span class="char" data-char="d"
                        style="--char-index:12;">d</span></span><span class="whitespace"> </span><span class="word"
                    data-word="A" style="--word-index:3;"><span class="char" data-char="A"
                        style="--char-index:13;">A</span></span><span class="whitespace"> </span><span class="word"
                    data-word="Cult" style="--word-index:4;"><span class="char" data-char="C"
                        style="--char-index:14;">C</span><span class="char" data-char="u"
                        style="--char-index:15;">u</span><span class="char" data-char="l"
                        style="--char-index:16;">l</span><span class="char" data-char="t"
                        style="--char-index:17;">t</span></span></h1>


            <hr class="border-none bg-white w-full my-4 md:my-6 xl:my-8" style="height: 1px; opacity: 0.6;">

            <div class="wysiwyg items splitting animate" data-animate="splitting-group"
                aria-label="Early Access version of Honey I Joined a Cult is now available on Steam! It’s time to start working towards that ultimate goal of enlightenment, faith and money…lots and lots of money. Create, customize, expand and manage your own cult whilst listening to funky music in Honey, I Joined a Cult!
🎅 NEW 15 DEC 2021: Update #1 for Honey I Joined a Cult is out now. Included in the update you’ll discover four brand new features including mission choices, random events, cultist quirks and Christmas cosmetics, just in time to deck your followers out for the festive season! Buy HIJAC on Steam now."
                style="--item-total:2;">
                <p style="--item-index:0;">Early Access version of Honey I Joined a Cult is now available on Steam! It’s
                    time to start working towards that ultimate goal of enlightenment, faith and money…lots and lots of
                    money. Create, customize, expand and manage your own cult whilst listening to funky music in Honey,
                    I Joined a Cult!</p>
                <p style="--item-index:1;">🎅 NEW 15 DEC 2021: Update #1 for Honey I Joined a Cult is out now. Included
                    in the update you’ll discover four brand new features including mission choices, random events,
                    cultist quirks and Christmas cosmetics, just in time to deck your followers out for the festive
                    season! <a href="https://store.steampowered.com/app/841190/Honey_I_Joined_a_Cult/">Buy HIJAC on
                        Steam now.</a></p>
            </div>
        </div>

        <div class="column w-full lg:w-6/12 xl:w-5/12 lg:-mt-15 space-y-4 animate" data-animate="fade-up-group">

            <div class="bg-royal rounded-20 px-5 py-6 xl:p-8" data-animate-child="">
                <h3 class="heading-xs mb-3 xl:mb-4">Game details</h3>

                <div class="space-y-3">
                    <div class="flex items-start">
                        <h4 class="copy-s uppercase font-bold w-2/5 pr-2 lg:pr-4">Platforms</h4>

                        <ul class="w-3/5 flex flex-wrap items-center -mb-2 -mr-4 lg:-mr-5">

                            <li class="mb-2 mr-4 lg:mr-5" style="height: 22px">
                                <img class="w-auto max-w-none h-full"
                                    src="https://www.team17.com/wp-content/uploads/2020/08/Steam-Icon.svg" alt="">

                            </li>

                        </ul>
                    </div>

                    <div class="flex items-start">
                        <h4 class="copy-s uppercase font-bold w-2/5 pr-2 lg:pr-4">Genre</h4>
                        <p class="w-3/5 copy-s">
                            <a href="/our-games/?game_name=&amp;platform=&amp;status=&amp;genre=resource-manager#paged">
                                Resource Manager, </a>
                            <a href="/our-games/?game_name=&amp;platform=&amp;status=&amp;genre=simulation#paged">
                                Simulation, </a>
                            <a href="/our-games/?game_name=&amp;platform=&amp;status=&amp;genre=strategy#paged">
                                Strategy </a>
                        </p>
                    </div>



                    <div class="flex items-start">
                        <h4 class="copy-s uppercase font-bold w-2/5 pr-2 lg:pr-4">Developers</h4>
                        <p class="w-3/5 copy-s">Sole Survivor Games</p>
                    </div>



                    <div class="flex items-start">
                        <h4 class="copy-s uppercase font-bold w-2/5 pr-2 lg:pr-4">Age Rating</h4>
                        <p class="w-3/5 copy-s">PEGI 12</p>
                    </div>



                    <div class="flex items-start">
                        <h4 class="copy-s uppercase font-bold w-2/5 pr-2 lg:pr-4">Social</h4>

                        <ul class="w-3/5 flex flex-wrap items-center -mb-2 -mr-4 lg:-mr-5">
                            <li class="mb-2 mr-4 lg:mr-5" style="height: 22px">
                                <a href="https://www.facebook.com/solesurvivorgames/"
                                    class="text-white opacity-75 hover:opacity-100" target="_blank"
                                    rel="noopener noreferrer" aria-label="Honey, I Joined A Cult Facebook"
                                    style="width: 20px; min-width: 20px;"><span class="inline-svg"
                                        style="padding-top:100%"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 8 16">
                                            <path fill="currentColor"
                                                d="M5 5.5v-2a1 1 0 011-1h1V0H5a3 3 0 00-3 3v2.5H0V8h2v8h3V8h2l1-2.5H5z">
                                            </path>
                                        </svg></span></a>
                            </li>

                            <li class="mb-2 mr-4 lg:mr-5" style="height: 22px">
                                <a href="https://twitter.com/solesurvivorgms"
                                    class="text-white opacity-75 hover:opacity-100" target="_blank"
                                    rel="noopener noreferrer" aria-label="Honey, I Joined A Cult Twitter"
                                    style="width: 20px; min-width: 20px;"><span class="inline-svg"
                                        style="padding-top:100%"><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 16">
                                            <path fill="currentColor"
                                                d="M19.688 1.894a8.065 8.065 0 01-2.32.636A4.046 4.046 0 0019.144.295a8.092 8.092 0 01-2.565.98A4.032 4.032 0 0013.631 0c-2.608 0-4.524 2.433-3.935 4.959A11.467 11.467 0 011.37.739a4.045 4.045 0 001.25 5.393 4.022 4.022 0 01-1.83-.505c-.044 1.87 1.298 3.622 3.24 4.011a4.049 4.049 0 01-1.824.07 4.042 4.042 0 003.773 2.804A8.122 8.122 0 010 14.185 11.435 11.435 0 006.192 16c7.5 0 11.737-6.334 11.48-12.015a8.224 8.224 0 002.016-2.09z">
                                            </path>
                                        </svg></span></a>
                            </li>



                        </ul>
                    </div>


                </div>
            </div>

            <div class="bg-tangerine rounded-20 px-5 py-6 xl:p-8 flex items-center" data-animate-child=""
                style="transition-delay: 0.08s;">
                <div class="mr-4 w-full">
                    <h3 class="heading-xs">Team17 Store</h3>
                    <p class="copy">Purchase PC version at our store</p>
                </div>


                <a href="https://store.team17.com/product/Honey_I_Joined_a_Cult" class="block" aria-label="Team17 Store"
                    target="_blank" rel="noopener noreferrer" style="width: 53px; min-width: 53px;">
                    <img class="w-auto max-w-none h-full"
                        src="https://www.team17.com/wp-content/uploads/2020/08/t17-1.svg" alt="">

                </a>

            </div>

            <div class="bg-tangerine rounded-20 px-5 py-6 xl:p-8" data-animate-child=""
                style="transition-delay: 0.16s;">
                <h3 class="heading-xs">Stores</h3>
                <p class="copy mb-4">Purchase a game on your favourite store</p>

                <ul class="flex flex-wrap -mb-2 -mr-2">

                    <li class="mb-2 mr-2" style="width: 53px; min-width: 53px;">
                        <a href="https://store.steampowered.com/app/841190/Honey_I_Joined_a_Cult/" class="block"
                            aria-label="Steam" target="_blank" rel="noopener noreferrer">
                            <img class="w-auto max-w-none h-full"
                                src="https://www.team17.com/wp-content/uploads/2020/08/steam-1.svg" alt="">

                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>


{{-- Whats On At Venue --}}
<section>
    <div class="bg-gray-100 py-12">
        <h3 class="text-3xl text-blue-600 text-center">What's On At {{ $venue->name }}</h3>
        <div class="gallery p-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-8 mt-2">


                <div>
                    <a href="/venue/{{ $venue->slug }}">
                        <div>
                            <img class="h-64 object-cover" src="{{ asset($venue->cover_image) }}" alt="" srcset="">
                        </div>
                        <div class="text-center">
                            <h2>{{ $venue->name }}</h2>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </div>
</section>


{{-- Quick Links --}}



@if ($events ?? '')
<div class="bg-gray-100 py-12">
    <h3 class="text-3xl text-blue-600 text-center">Events</h3>
    @include('includes.events-list')
</div>
@endif

<div class="py-12">
    <div class="max-w-7xl mx-auto p-8 text-center">
        <h3 class="text-3xl text-blue-600 text-center">Everyone at Chinley Community Association is committed to
            ensuring the
            safety and well-being of all the children in
            our
            care.</h3>
        <h3 class="mt-4">We take safeguarding very seriously. If you are worried about a child, don’t wait.
            Contact Mr.
            Lambert or Mrs.
            Glover in confidence, who are the designated lead teachers for safeguarding in school.</h3>
        <p class="mt-4">
            Further information about our policies and procedures with regards to safeguarding can be found in the
            <a class="text-blue-600 font-bold underline" href="{{ url('information') }}">Information</a>
            section under safeguarding.
        </p>

    </div>
</div>
@endsection
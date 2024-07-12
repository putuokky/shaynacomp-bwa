@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative overflow-hidden">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar></x-navbar>
            @forelse ($hero_section as $hero)
                <input type="hidden" name="path_video" id="path_video" value="{{ $hero->path_video }}">
                <div id="Hero" class="flex flex-col gap-[30px] mt-20 pb-20">
                    <div class="flex items-center bg-white p-[8px_16px] gap-[10px] rounded-full w-fit">
                        <div class="flex w-5 h-5 overflow-hidden shrink-0">
                            <img src="{{ asset('assets/icons/crown.svg') }}" class="object-contain" alt="icon">
                        </div>
                        <p class="text-sm font-semibold">{{ $hero->achievement }}</p>
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <h1 class="font-extrabold text-[50px] leading-[65px] max-w-[536px]">{{ $hero->heading }}</h1>
                        <p class="text-cp-light-grey leading-[30px] max-w-[437px]">{{ $hero->subheading }}</p>
                    </div>
                    <div class="flex items-center gap-4">
                        <a href=""
                            class="bg-cp-dark-blue p-5 w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Explore
                            Now</a>
                        <button class="bg-cp-black p-5 w-fit rounded-xl font-bold text-white flex items-center gap-[10px]"
                            onclick="{modal.show()}">
                            <div class="flex w-6 h-6 overflow-hidden shrink-0">
                                <img src="{{ asset('assets/icons/play-circle.svg') }}" class="object-contain w-full h-full"
                                    alt="icon">
                            </div>
                            <span>Watch Video</span>
                        </button>
                    </div>
                </div>
        </div>
        <div class="absolute w-[43%] h-full top-0 right-0 overflow-hidden z-0">
            <img src="{{ asset(Storage::url($hero->banner)) }}" class="object-cover w-full h-full" alt="banner">
        </div>
    @empty
        @endforelse
    </div>
    <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
        <h2 class="text-lg font-bold">Trusted by 500+ Top Leaders Worldwide</h2>
        <div class="flex flex-wrap justify-center gap-5 logo-container">
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-52.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-55.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-44.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-51.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-55.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-52.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-54.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="{{ asset('assets/logo/logo-51.svg') }}" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
        </div>
    </div>
    <div id="OurPrinciples" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR PRINCIPLES</p>
                <h2 class="font-bold text-4xl leading-[45px]">We Might Best Choice <br> For Your Company</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
        </div>
        <div class="flex flex-wrap items-center gap-[30px] justify-center">
            @forelse ($principles as $principle)
                <div
                    class="card w-[356.67px] flex flex-col bg-white border border-[#E8EAF2] rounded-[20px] gap-[30px] overflow-hidden hover:border-cp-dark-blue transition-all duration-300">
                    <div class="thumbnail h-[200px] flex shrink-0 overflow-hidden">
                        <img src="{{ asset(Storage::url($principle->thumbnail)) }}"
                            class="object-cover object-center w-full h-full" alt="thumbnails">
                    </div>
                    <div class="flex flex-col p-[0_30px_30px_30px] gap-5">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{ asset(Storage::url($principle->icon)) }}" class="object-contain w-full h-full"
                                alt="icon">
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="title font-bold text-xl leading-[30px]">{{ $principle->name }}</p>
                            <p class="leading-[30px] text-cp-light-grey">{{ $principle->subtitle }}</p>
                        </div>
                        <a href="" class="font-semibold text-cp-dark-blue">Learn More</a>
                    </div>
                </div>
            @empty
                <p>Belum ada data terbaru</p>
            @endforelse
        </div>
    </div>
    <div id="Stats" class="w-full mt-20 bg-cp-black">
        <div class="container max-w-[1000px] mx-auto py-10">
            <div class="flex flex-wrap items-center justify-between p-[10px]">
                @forelse ($statistics as $statistic)
                    <div class="card w-[200px] flex flex-col items-center gap-[10px] text-center">
                        <div class="w-[55px] h-[55px] flex shrink-0 overflow-hidden">
                            <img src="{{ asset(Storage::url($statistic->icon)) }}" class="object-contain w-full h-full"
                                alt="icon">
                        </div>
                        <p class="text-cp-pale-orange font-bold text-4xl leading-[54px]">{{ $statistic->goal }}</p>
                        <p class="text-cp-light-grey">{{ $statistic->name }}</p>
                    </div>
                @empty
                    <p>Belum ada data terbaru</p>
                @endforelse
            </div>
        </div>
    </div>
    <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">
        @forelse ($products as $product)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                    <img src="{{ asset(Storage::url($product->thumbnail)) }}" class="object-contain w-full h-full"
                        alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                    <p
                        class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        {{ $product->tagline }}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{ $product->name }}</h2>
                        <p class="leading-[30px] text-cp-light-grey">{{ $product->about }}</p>
                    </div>
                    <a href="{{ route('front.appointment') }}"
                        class="bg-cp-dark-blue p-[14px_20px] w-fit rounded-xl hover:shadow-[0_12px_30px_0_#312ECB66] transition-all duration-300 font-bold text-white">Book
                        Appointment</a>
                </div>
            </div>
        @empty
            <p>Belum ada data terbaru</p>
        @endforelse
    </div>
    <div id="Teams" class="bg-[#F6F7FA] w-full py-20 px-[10px] mt-20">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] items-center">
            <div class="flex flex-col gap-[14px] items-center">
                <p class="badge w-fit bg-cp-light-blue text-white p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR POWERFUL TEAM</p>
                <h2 class="font-bold text-4xl leading-[45px] text-center">We Share Same Dreams <br> Change The World
                </h2>
            </div>
            <div
                class="teams-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
                @forelse ($teams as $team)
                    <div
                        class="card bg-white flex flex-col h-full justify-center items-center p-[30px] px-[29px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                        <div
                            class="w-[100px] h-[100px] flex shrink-0 items-center justify-center rounded-full bg-[linear-gradient(150.55deg,_#007AFF_8.72%,_#312ECB_87.11%)]">
                            <div class="w-[90px] h-[90px] rounded-full overflow-hidden">
                                <img src="{{ asset(Storage::url($team->avatar)) }}"
                                    class="object-cover object-center w-full h-full" alt="photo">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 text-center">
                            <p class="font-bold text-xl leading-[30px]">{{ $team->name }}</p>
                            <p class="text-cp-light-grey">{{ $team->occupation }}</p>
                        </div>
                        <div class="flex items-center justify-center gap-[10px]">
                            <div class="flex w-6 h-6 shrink-0">
                                <img src="{{ asset('assets/icons/global.svg') }}" alt="icon">
                            </div>
                            <p class="font-semibold text-cp-dark-blue">{{ $team->location }}</p>
                        </div>
                    </div>
                @empty
                    <p>Belum ada data terbaru</p>
                @endforelse
                <a href="{{ route('front.team') }}" class="view-all-card">
                    <div
                        class="card bg-white flex flex-col h-full justify-center items-center p-[30px] gap-[30px] rounded-[20px] border border-white hover:shadow-[0_10px_30px_0_#D1D4DF80] hover:border-cp-dark-blue transition-all duration-300">
                        <div class="w-[60px] h-[60px] flex shrink-0">
                            <img src="{{ asset('assets/icons/profile-2user.svg') }}" alt="icon">
                        </div>
                        <div class="flex flex-col gap-1 text-center">
                            <p class="font-bold text-xl leading-[30px]">View All</p>
                            <p class="text-cp-light-grey">Our Great People</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="Testimonials" class="w-full flex flex-col gap-[50px] items-center mt-20">
        <div class="flex flex-col gap-[14px] items-center">
            <p
                class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                SUCCESS CLIENTS</p>
            <h2 class="font-bold text-4xl leading-[45px] text-center">Our Satisfied Clients<br>From Worldwide Company
            </h2>
        </div>
        <div class="w-full main-carousel">
            @forelse ($testimonials as $testimonial)
                <div
                    class="carousel-card container max-w-[1130px] w-full flex flex-wrap justify-between items-center lg:mx-[calc((100vw-1130px)/2)]">
                    <div class="testimonial-container flex flex-col gap-[112px] w-[565px]">
                        <div class="flex flex-col gap-[30px]">
                            <div class="overflow-hidden h-9">
                                <img src="{{ asset(Storage::url($testimonial->client->logo)) }}" class="object-contain"
                                    alt="icon">
                            </div>
                            <div class="relative pt-[27px] pl-[30px]">
                                <div class="absolute top-0 left-0">
                                    <img src="{{ asset('assets/icons/quote.svg') }}" alt="icon">
                                </div>
                                <p class="font-semibold text-2xl leading-[46px] relative z-10">{{ $testimonial->message }}
                                </p>
                            </div>
                            <div class="flex items-center justify-between pl-[30px]">
                                <div class="flex items-center gap-6">
                                    <div class="w-[60px] h-[60px] flex shrink-0 rounded-full overflow-hidden">
                                        <img src="{{ asset(Storage::url($testimonial->client->avatar)) }}"
                                            class="object-cover w-full h-full" alt="photo">
                                    </div>
                                    <div class="flex flex-col justify-center gap-1">
                                        <p class="font-bold">{{ $testimonial->client->name }}</p>
                                        <p class="text-sm text-cp-light-grey">{{ $testimonial->client->occupation }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-nowrap">
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                    <div class="flex w-6 h-6 shrink-0">
                                        <img src="{{ asset('assets/icons/Star-rating.svg') }}" alt="star">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center justify-center h-4 gap-2 carousel-indicator shrink-0">
                        </div>
                    </div>
                    <div class="testimonial-thumbnail w-[470px] h-[550px] rounded-[20px] overflow-hidden bg-[#D9D9D9]">
                        <img src="{{ asset(Storage::url($testimonial->thumbnail)) }}"
                            class="object-cover object-center w-full h-full" alt="thumbnail">
                    </div>
                </div>
            @empty
                <p>Belum ada data terbaru</p>
            @endforelse
        </div>
    </div>
    <div id="Awards" class="container max-w-[1130px] mx-auto flex flex-col gap-[30px] mt-20">
        <div class="flex items-center justify-between">
            <div class="flex flex-col gap-[14px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR AWARDS</p>
                <h2 class="font-bold text-4xl leading-[45px]">We’ve Dedicated Our<br>Best Team Efforts</h2>
            </div>
            <a href="" class="bg-cp-black p-[14px_20px] w-fit rounded-xl font-bold text-white">Explore More</a>
        </div>
        <div
            class="awards-card-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-[30px] justify-center">
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Solid Fundamental Crafter Async</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bali, 2020</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Most Crowded Yet Harmony Place</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Shanghai, 2021</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Small Things Made Much Big Impacts</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Zurich, 2022</p>
            </div>
            <div
                class="card bg-white flex flex-col h-full p-[30px] gap-[30px] rounded-[20px] border border-[#E8EAF2] hover:border-cp-dark-blue transition-all duration-300">
                <div class="w-[55px] h-[55px] flex shrink-0">
                    <img src="{{ asset('assets/icons/cup-blue.svg') }}" alt="icon">
                </div>
                <hr class="border-[#E8EAF2]">
                <p class="font-bold text-xl leading-[30px]">Teamwork and Solidarity</p>
                <hr class="border-[#E8EAF2]">
                <p class="text-cp-light-grey">Bandung, 2023</p>
            </div>
        </div>
    </div>
    <div id="FAQ" class="bg-[#F6F7FA] w-full py-20 px-[10px] mt-20 -mb-20">
        <div class="container max-w-[1000px] mx-auto">
            <div class="flex flex-col lg:flex-row gap-[50px] sm:gap-[70px] items-center">
                <div class="flex flex-col gap-[30px]">
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">Frequently Asked Questions</h2>
                    </div>
                    <a href="{{ route('front.appointment') }}"
                        class="p-5 font-bold text-white bg-cp-black rounded-xl w-fit">Contact
                        Us</a>
                </div>
                <div class="flex flex-col gap-[30px] sm:w-[603px] shrink-0">
                    <div class="flex flex-col w-full p-5 bg-white rounded-2xl">
                        <button class="flex items-center justify-between gap-1 accordion-button"
                            data-accordion="accordion-faq-1">
                            <span class="font-bold text-lg leading-[27px] text-left">Can installments be beneficial for
                                both?</span>
                            <div class="flex arrow w-9 h-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-1" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full p-5 bg-white rounded-2xl">
                        <button class="flex items-center justify-between gap-1 accordion-button"
                            data-accordion="accordion-faq-2">
                            <span class="font-bold text-lg leading-[27px] text-left">What kind of framework you popular
                                with?</span>
                            <div class="flex arrow w-9 h-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-2" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full p-5 bg-white rounded-2xl">
                        <button class="flex items-center justify-between gap-1 accordion-button"
                            data-accordion="accordion-faq-3">
                            <span class="font-bold text-lg leading-[27px] text-left">What insurance provider do you
                                use?</span>
                            <div class="flex arrow w-9 h-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-3" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                    <div class="flex flex-col w-full p-5 bg-white rounded-2xl">
                        <button class="flex items-center justify-between gap-1 accordion-button"
                            data-accordion="accordion-faq-4">
                            <span class="font-bold text-lg leading-[27px] text-left">What if we have other
                                questions?</span>
                            <div class="flex arrow w-9 h-9 shrink-0">
                                <img src="{{ asset('assets/icons/arrow-circle-down.svg') }}"
                                    class="transition-all duration-300" alt="icon">
                            </div>
                        </button>
                        <div id="accordion-faq-4" class="accordion-content hide">
                            <p class="leading-[30px] text-cp-light-grey pt-[14px]">We want to protect our and clients
                                assets to the max level so that we chose the best one from Jakarta, Indonesia will also
                                protect post building finished completed ahead one.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="relative w-full mt-20 overflow-hidden bg-cp-black">
        <div
            class="container max-w-[1130px] mx-auto flex flex-wrap gap-y-4 items-center justify-between pt-[100px] pb-[220px] relative z-10">
            <div class="flex flex-col gap-10">
                <div class="flex items-center gap-3">
                    <div class="flex shrink-0 h-[43px] overflow-hidden">
                        <img src="{{ asset('assets/logo/logo.svg') }}" class="object-contain w-full h-full"
                            alt="logo">
                    </div>
                    <div class="flex flex-col">
                        <p id="CompanyName" class="font-extrabold text-xl leading-[30px] text-white">ShaynaComp</p>
                        <p id="CompanyTagline" class="text-sm text-cp-light-grey">Build Futuristic Dreams</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="{{ asset('assets/icons/youtube.svg') }}" class="object-contain w-full h-full"
                                alt="youtube">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="{{ asset('assets/icons/whatsapp.svg') }}" class="object-contain w-full h-full"
                                alt="whatsapp">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="{{ asset('assets/icons/facebook.svg') }}" class="object-contain w-full h-full"
                                alt="facebook">
                        </div>
                    </a>
                    <a href="">
                        <div class="flex w-6 h-6 overflow-hidden shrink-0">
                            <img src="{{ asset('assets/icons/instagram.svg') }}" class="object-contain w-full h-full"
                                alt="instagram">
                        </div>
                    </a>
                </div>
            </div>
            <div class="flex flex-wrap gap-[50px]">
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="text-lg font-bold text-white">Products</p>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">General
                        Contract</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Building
                        Assessment</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">3D Paper
                        Builder</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Legal
                        Constructions</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="text-lg font-bold text-white">About</p>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">We’re
                        Hiring</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Our Big
                        Purposes</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Investor
                        Relations</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Media
                        Press</a>
                </div>
                <div class="flex flex-col w-[200px] gap-3">
                    <p class="text-lg font-bold text-white">Useful Links</p>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Privacy
                        & Policy</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Terms &
                        Conditions</a>
                    <a href="contact.html" class="transition-all duration-300 text-cp-light-grey hover:text-white">Contact
                        Us</a>
                    <a href="" class="transition-all duration-300 text-cp-light-grey hover:text-white">Download
                        Template</a>
                </div>
            </div>
        </div>
        <div class="absolute -bottom-[135px] w-full">
            <p class="font-extrabold text-[250px] leading-[375px] text-center text-white opacity-5">SHAYNA</p>
        </div>
    </footer>
    <div id="video-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-h-full p-4 lg:w-1/2">
            <!-- Modal content -->
            <div class="relative bg-white rounded-[20px] overflow-hidden shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                    <h3 class="text-xl font-semibold text-cp-black">
                        Company Profile Video
                    </h3>
                    <button type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto"
                        onclick="{modal.hide()}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="">
                    <!-- video src added from the js script (modal-video.js) to prevent video running in the backgroud -->
                    <iframe id="videoFrame" class="aspect-[16/9]" width="100%" src=""
                        title="Demo Project Laravel Portfolio" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- JavaScript -->
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-fade@1/flickity-fade.js"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/accordion.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="{{ asset('js/modal-video.js') }}"></script>
@endpush

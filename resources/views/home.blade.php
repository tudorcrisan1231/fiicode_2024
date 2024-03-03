@extends('layouts.main')

@section('content')
{{--    <div class="py-20 px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">--}}
{{--    </div>--}}

<section>
    <div class="relative py-12 bg-white sm:py-16 lg:py-20 flex items-center h-screen">
        <div class="absolute inset-0">
            <img class="object-cover object-right w-full h-full lg:object-center" src="{{asset('media/hero.jpg')}}" alt="" />
        </div>

        <div class="absolute inset-0 bg-gray-900 bg-opacity-40"></div>

        <div class="relative px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-lg mx-auto text-center xl:max-w-2xl">
                <h1 class="text-3xl font-bold text-white sm:text-4xl xl:text-5xl">
                    Healthy Choices Made Simple
                </h1>
                <p class="max-w-lg mx-auto mt-6 text-base font-normal leading-7 text-gray-200">Join the Fun, Find Your Fit, and Feel Fabulous on Your Path to Better Health! Contribute Your Insights and Shape the Healthier Future You Want to See!</p>

                <form action="#" class="max-w-xl mx-auto mt-10">
                    <div>
                        <label for="" class="sr-only"> Search </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>

                            <input type="text" name="" id="" placeholder="Search a product fact for a healthier you..." class="block w-full py-3 pl-10 pr-4 text-base font-normal leading-7 text-gray-900 placeholder-gray-500 bg-white border border-white focus:ring-white focus:border-white focus:ring-offset-2" />
                        </div>
                    </div>

                    <div>
                        <button
                            type="submit"
                            class="
                                inline-flex
                                items-center
                                justify-center
                                w-full
                                px-6
                                py-4
                                text-sm
                                font-bold
                                tracking-widest
                                text-white
                                uppercase
                                transition-all
                                duration-200
                                bg-green-800
                                border border-transparent
                                focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-900 focus:ring-white
                                hover:bg-green-700
                            "
                        >
                            Search now
                        </button>
                    </div>
                </form>

                <div class="grid max-w-md grid-cols-2 mx-auto mt-8 md:mt-16 lg:mt-24 xl:mt-32 gap-x-6 grid-col-2">
                    <div>
                        <p class="text-4xl font-bold text-white">38,942</p>
                        <p class="mt-2 text-sm font-medium text-gray-200">
                            Products Available
                        </p>
                    </div>

                    <div>
                        <p class="text-4xl font-bold text-white">14,344</p>
                        <p class="mt-2 text-sm font-medium text-gray-200">
                            Contributors Worldwide
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@extends('layouts.auth')

@section('content')

    <section class="py-12 bg-white sm:py-16 lg:py-20 h-screen flex items-center">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-1 gap-y-12 lg:gap-x-20 lg:grid-cols-2 2xl:gap-x-8 items-center">
                <div>
                    <div class="2xl:max-w-sm">
                        <h1 class="text-3xl font-bold text-gray-900">Welcome Back 🥦</h1>
                        <p class="mt-4 text-sm font-medium leading-6 text-gray-500">
                            Sign in to your account to continue using our web app. If you don't have an account, you can create a free one in a few seconds.
                        </p>

                        <form action="{{route('login.custom')}}" method="POST" class="mt-12">
                            @csrf
                            <div class="space-y-6">
                                <div>
                                    <label for="" class="text-sm font-bold text-gray-900"> Email </label>
                                    <div class="relative mt-2">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                            </svg>
                                        </div>

                                        <input type="email" name="email" id="email" placeholder="Email address" value="" class="border block w-full py-3 pl-12 pr-4 placeholder-gray-500 border-gray-300 rounded-lg focus:ring-green-600 focus:border-green-600 sm:text-sm caret-green-600" />
                                    </div>
                                </div>

                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="" class="text-sm font-bold text-gray-900"> Password </label>

{{--                                        <a href="#" title="" class="text-sm font-medium text-green-600 hover:text-green-700"> Forgot Password? </a>--}}
                                    </div>
                                    <div class="relative mt-2">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                            </svg>
                                        </div>

                                        <input type="password" name="password" id="password" placeholder="Password (min. 8 character)" value="" class="border block w-full py-3 pl-12 pr-4 placeholder-gray-500 border-gray-300 rounded-lg focus:ring-green-600 focus:border-green-600 sm:text-sm caret-green-600" />
                                    </div>
                                </div>

                                <div class="relative flex items-center">
                                    <div class="flex items-center h-5">
                                        <input type="checkbox" name="remember-password" id="remember-password" class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-600" />
                                    </div>

                                    <div class="ml-3">
                                        <label for="remember-password" class="text-sm font-medium text-gray-900"> Remember Me </label>
                                    </div>
                                </div>

                                <div>
                                    <button
                                        type="submit"
                                        class="inline-flex items-center justify-center w-full px-6 py-3 text-sm font-semibold leading-5 text-white transition-all duration-200 bg-green-600 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600 hover:bg-green-500"
                                    >
                                        Sign in
                                    </button>
                                </div>
                            </div>
                        </form>


                        <div class="mt-20">
                            <p class="text-sm font-medium text-gray-900">Don't have any? <a href="{{route('register')}}" title="Register" class="font-bold text-green-600 hover:underline">Create a free account</a></p>
                        </div>
                    </div>
                </div>

                <div class="overflow-hidden text-center bg-gray-100 rounded-2xl">
                    <div class="flex items-center justify-center px-8 py-12 sm:px-12 sm:py-16 md:py-24 md:px-20">
                        <div>
                            <img class="w-auto mx-auto" src="{{asset('media/Eating healthy food-bro.svg')}}" alt="" />
                            <p class="mt-4 text-2xl font-bold text-gray-900">
                                Empowering Healthier Choices
                            </p>
                            <p class="mt-4 text-sm font-medium text-gray-500">
                                Join the revolution in public health with our groundbreaking web app. Take charge of your well-being by accessing comprehensive health ratings for products in the market.
                            </p>

                            <div class="flex items-center justify-center mt-16 space-x-1.5">
                                <div class="w-2.5 h-2.5 bg-gray-300 rounded-full"></div>
                                <div class="w-2.5 h-2.5 bg-gray-600 rounded-full"></div>
                                <div class="w-2.5 h-2.5 bg-gray-300 rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

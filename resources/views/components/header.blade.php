<header class="py-4 bg-white sm:py-5 fixed top-0 w-full z-50" x-data="{expanded: false}">
    <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
        <div class="flex items-center justify-between">
            <div class="shrink-0">
                <a href="@if(auth()->check()) {{route('dashboard')}} @else {{route('home')}} @endif" title="" class="">
                    <img class="w-auto h-16" src="{{asset('media/logo_fiicode.png')}}" alt="" />
                </a>
            </div>

            <div :class="{ 'hidden': !expanded }" class="items-center border-r border-gray-200 lg:border-none p-12 lg:p-0 z-50 left-0 top-0 h-screen lg:h-auto w-1/2 bg-white lg:w-auto fixed lg:flex flex-col lg:static lg:flex-row lg:items-center lg:space-x-4 lg:justify-end lg:ml-auto">
                <div class="flex items-center justify-center gap-2 lg:gap-0 text-center h-full flex-col lg:flex-row">
                    <a href="#" title="" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-gray-900 transition-all duration-200 border border-transparent rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                        Products
                    </a>

                    <a href="#" title="" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-gray-900 transition-all duration-200 border border-transparent rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                        Contribute
                    </a>

                    <a href="#" title="" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-gray-900 transition-all duration-200 border border-transparent rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                        Pricing
                    </a>

                    @if(!auth()->check())
                        <a href="{{route('login')}}" title="" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-gray-900 transition-all duration-200 border border-transparent rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                            Login
                        </a>
                    @else
                        <a href="{{route('signout')}}" title="" class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-gray-900 transition-all duration-200 border border-transparent rounded-full hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700">
                            Sign out
                        </a>
                    @endif
                </div>

            </div>

            @if(!auth()->check())
            <div class="hidden sm:flex sm:ml-auto lg:ml-4">
                <a
                    href="{{route('register')}}"
                    title=""
                    class="inline-flex items-center justify-center px-6 py-2.5 text-base font-medium text-white transition-all duration-200 bg-green-600 border border-transparent rounded-full hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700"
                    role="button"
                >
                    Get started
                </a>
            </div>
            @else
                <div class="hidden sm:flex sm:ml-auto lg:ml-4">
                    <a
                        href="#"
                        title=""
                        class="inline-flex items-center justify-center px-6 gap-2 py-2.5 text-base font-medium text-white transition-all duration-200 bg-green-600 border border-transparent rounded-full hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700"
                        role="button"
                    >
                        <svg class="w-auto h-6" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                        <span>Your account</span>
                    </a>
                </div>
            @endif

            <div class="flex ml-4 lg:hidden">
                <button
                    type="button"
                    class="inline-flex items-center p-2.5 text-white duration-200 bg-green-600 border border-transparent rounded-full hover:bg-green-700 transiton-all focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-700"
                    @click="expanded = !expanded"
                    :aria-expanded="expanded"
                >
                    <span x-show="!expanded" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </span>

                    <span x-show="expanded" aria-hidden="true">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>
</header>

<aside class="w-full fixed z-10 min-h-screen bg-primaryBlack flex flex-col transform translate-x-full duration-300 md:hidden" id="sidebar">
    <div class="w-full flex justify-end p-6">
        <div id="close">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
    </div>
    <div class="w-full flex flex-col items-center">
        <a href="{{ route("customer.products") }}">
            <div class="w-screen py-6 flex items-center justify-center bg-transparent poppins-medium duration-200 text-sm text-white hover:bg-white uppercase hover:text-primaryBlack">
                home
            </div>
        </a>
        <a href="{{ route("customer.products") }}">
            <div class="w-screen py-6 flex items-center justify-center bg-transparent poppins-medium duration-200 text-sm text-white hover:bg-white uppercase hover:text-primaryBlack">
                products
            </div>
        </a>
        <div class="flex mt-5">
            <a href="{{ route("customer.carts") }}" class="mr-10">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </a>
            <a href="{{ route("customer.search") }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </a>
        </div>
        @if (Auth::user())
            <a href="{{ route("logout") }}" class="mt-8">
                <button class="px-6 py-2 border-2 border-white bg-transparent text-sm poppins-medium text-white duration-200 hover:bg-white hover:text-primaryBlack focus:outline-none">
                    Logout
                </button>
            </a>
        @else
            <a href="{{ route("login") }}" class="mt-8">
                <button class="px-6 py-2 border-2 border-white bg-transparent text-sm poppins-medium text-white duration-200 hover:bg-white hover:text-primaryBlack focus:outline-none">
                    Login
                </button>
            </a>
        @endif
    </div>
</aside>

<nav class="w-full px-6 py-4 flex flex-row items-center justify-between md:px-20 md:py-6">
    <div class="flex items-center">
        <a href="{{ route("customer.landing_page") }}">
            <span class="poppins-bold text-2xl uppercase text-primaryBlack">bigshoot.</span>
        </a>
        <div class="hidden ml-10 md:flex mt-1">
            <a href="{{ route("customer.landing_page") }}" class="mr-10">
                <span class="poppins-medium text-sm uppercase text-secondaryGray hover:text-primaryBlack">Home</span>
            </a>
            <a href="{{ route("customer.products") }}" class="mr-10">
                <span class="poppins-medium text-sm uppercase text-secondaryGray hover:text-primaryBlack">Products</span>
            </a>
        </div>
    </div>
    <div class="hidden items-center md:flex">
        <a href="{{ route("customer.carts") }}" class="mr-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
            </svg>
        </a>
        <a href="{{ route("customer.search") }}" class="mr-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </a>
        @if (Auth::user())
            <a href="{{ route("logout") }}">
                <button class="px-6 py-2 border-2 border-primaryBlack bg-transparent text-sm poppins-medium text-primaryBlack duration-200 hover:bg-primaryBlack hover:text-white focus:outline-none">
                    Logout
                </button>
            </a>
        @else
            <a href="{{ route("login") }}">
                <button class="px-6 py-2 border-2 border-primaryBlack bg-transparent text-sm poppins-medium text-primaryBlack duration-200 hover:bg-primaryBlack hover:text-white focus:outline-none">
                    Login
                </button>
            </a>
        @endif
    </div>
    <div class="flex flex-col items-end cursor-pointer md:hidden" id="hamburger">
        <div class="w-8 bg-primaryBlack h-1 mb-1"></div>
        <div class="w-3 bg-primaryBlack h-1 mb-1"></div>
        <div class="w-5 bg-primaryBlack h-1"></div>
    </div>
</nav>
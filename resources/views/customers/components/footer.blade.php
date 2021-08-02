        <script src="{{ asset("assets/customer/js/navbar.js") }}" ></script>
        <script src="{{ asset("assets/customer/js/jquery.js") }}"></script>
        <script src="{{ asset("assets/customer/js/owl.carousel.js") }}"></script>
        @yield('js')

        <footer class="w-full relative bottom-0 mt-10 bg-primaryBlack px-8 py-10 flex flex-col md:px-20">
            <div>
                <span class="poppins-bold text-2xl uppercase text-white">bigshoot.</span>
            </div>
            <div class="w-full flex flex-col justify-between mt-8 md:flex-row">
                <div class="flex flex-col mb-10 flex-1 md:mb-0">
                    <h6 class="poppins-medium text-white text-sm">Store</h6>
                    <div class="flex flex-col">
                        <a href="{{ route("customer.landing_page") }}">
                            <span class="text-xs poppins-regular text-secondaryGray hover:text-white mt-4">
                                Home
                            </span>
                        </a>
                        <a href="{{ route("customer.products") }}">
                            <span class="text-xs poppins-regular text-secondaryGray hover:text-white mt-2">
                                Products
                            </span>
                        </a>
                        <a href="{{ route("customer.carts") }}">
                            <span class="text-xs poppins-regular text-secondaryGray hover:text-white mt-2">
                                Cart
                            </span>
                        </a>
                        <a href="{{ route("customer.search") }}">
                            <span class="text-xs poppins-regular text-secondaryGray hover:text-white mt-2">
                                Search
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col mb-10 flex-1 md:mb-0">
                    <h6 class="poppins-medium text-white text-sm">Pages Link</h6>
                    <div class="flex flex-col">
                        <a href="{{ route("login") }}">
                            <span class="text-xs poppins-regular text-secondaryGray hover:text-white mt-4">
                                Login
                            </span>
                        </a>
                        <a href="{{ route("register") }}">
                            <span class="text-xs poppins-regular text-secondaryGray hover:text-white mt-2">
                                Register
                            </span>
                        </a>
                    </div>
                </div>
                <div class="flex flex-col mb-10 flex-1 md:mb-0">
                    <h6 class="poppins-medium text-white text-sm">Information</h6>
                    <div class="flex flex-col">
                        <span class="text-xs poppins-regular text-secondaryGray mt-4 leading-relaxed tracking-wider">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore unde quam earum consequatur iure alias ex error magnam consectetur pariatur?
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-full flex flex-col items-center justify-between mt-10 md:flex-row">
                <span class="text-xs poppins-regular text-secondaryGray mt-4 leading-relaxed tracking-wider">
                    All copyright reserved by BIGSHOOT.
                </span>
                <span class="text-xs poppins-regular text-secondaryGray mt-4 leading-relaxed tracking-wider">
                    Design by peserta_06
                </span>
            </div>
        </footer>
    </body>
</html>
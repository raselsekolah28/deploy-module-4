@extends('customers.pages.template')

@section('title')
    BIGSHOOT.
@endsection

@section('content')
    <div class="w-full px-6 md:px-20">
        <div class="owl-carousel">
            <div class="w-full bg-gray-400 item-slidder h-96" style="background-image: url({{ asset("assets/customer/images/bg-1.jpg") }});">
                <div class="w-1/2 bg-green-300 h-full p-10 text-white flex flex-col justify-center md:w-1/3">
                    <div class="flex flex-col">
                        <i class="fas fa-quote-right text-4xl opacity-30 mb-6"></i>
                        <h1 class="uppercase font-bold text-4xl">sample 1</h1>
                        <h5 class="uppercase font-bold text-sm">EXCEPTURE OCCATEUR</h5>
                        <p class="text-xs leading-relaxed tracking-wider mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, nihil.</p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-400 item-slidder h-96" style="background-image: url({{ asset("assets/customer/images/bg-1.jpg") }});">
                <div class="w-1/2 bg-green-300 h-full p-10 text-white flex flex-col justify-center md:w-1/3">
                    <div class="flex flex-col">
                        <i class="fas fa-quote-right text-4xl opacity-30 mb-6"></i>
                        <h1 class="uppercase font-bold text-4xl">sample 2</h1>
                        <h5 class="uppercase font-bold text-sm">EXCEPTURE OCCATEUR</h5>
                        <p class="text-xs leading-relaxed tracking-wider mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo, nihil.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center w-full mt-20">
            <div class="flex flex-col">
                <span class="text-xs poppins-medium text-secondaryGray uppercase tracking-wide">products</span>
                <h3 class="text-2xl poppins-semibold text-primaryBlack leading-relaxed">Our served products</h3>
            </div>
            <a href="{{ route("customer.products") }}" class="flex items-center">
                <span class="text-xs poppins-semibold text-secondaryGray uppercase">All Products</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-secondaryGray ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
        <div class="flex justify-between w-full flex-wrap mt-5">
            @foreach ($products as $item)
                <div class="w-full md:w-w-32% flex flex-col mb-5">
                    <div class="w-full h-52" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url({{ asset($item->image) }})"></div>
                    <div class="w-full flex justify-between items-center mt-3">
                        <h6 class="text-sm poppins-semibold text-primaryBlack">Rp.{{ number_format($item->price) }}</h6>
                        <div class="flex p-2 bg-gray-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>
                            <h6 class="text-xs poppins-regular text-primaryBlack ml-2">{{ $item->stock }} PCS</h6>
                        </div>
                    </div>
                    <h3 class="text-xl text-primaryBlack poppins-semibold ">{{ $item->name }}</h3>
                    <p class="text-xs poppins-regular text-secondaryGray leading-relaxed tracking-wider mt-1 exerpt">{{ $item->description }}</p>
                    <a href="{{ route("customer.detail_product", $item->id) }}">
                        <div class="flex items-center mt-3">
                            <span class="text-xs poppins-medium text-primaryBlack">Read More</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primaryBlack ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1,
                    }
                }
            })
        });
    </script>
@endsection
@extends('customers.pages.template')

@section('title')
    PRODUCTS
@endsection

@section('content')
    <div class="w-full px-6 flex flex-col md:px-20">
        <div class="flex flex-col mt-10">
            <span class="text-xs poppins-medium text-secondaryGray uppercase tracking-wide">products</span>
            <h3 class="text-2xl poppins-semibold text-primaryBlack leading-relaxed">Several stages of ordering our products.</h3>
        </div>
        <div class="w-full flex mt-8 justify-between flex-col md:flex-row">
            <div class="w-full md:w-8/12 flex flex-wrap justify-between">
                @foreach ($products as $item)
                    <div class="w-full md:w-48% flex flex-col mb-5">
                        <div class="w-full h-52" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url({{ asset($item->image) }})"></div>
                        <div class="w-full flex justify-between items-center mt-3">
                            <h6 class="text-sm poppins-semibold text-primaryBlack">Rp{{ number_format($item->price) }}</h6>
                            <div class="flex p-2 bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                </svg>
                                <h6 class="text-xs poppins-regular text-primaryBlack ml-2">14 PCS</h6>
                            </div>
                        </div>
                        <h3 class="text-xl text-primaryBlack poppins-semibold ">Product Name</h3>
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
            <div class="hidden md:w-3/12 md:flex justify-end">
                <div class="flex flex-col items-end">
                    <h5 class="text-xl poppins-medium text-primaryBlack mb-3">Categories</h5>
                    @foreach ($categories as $item)
                        <a href="" class="mb-2">
                            <span class="text-sm poppins-regular text-secondaryGray hover:text-primaryBlack">{{ $item->name }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
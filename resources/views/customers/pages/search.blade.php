@extends('customers.pages.template')

@section('title')
    Search
@endsection

@section('content')
    <div class="w-full px-6 flex flex-col md:px-20">
        <div class="flex flex-col mt-10">
            <span class="text-xs poppins-medium text-secondaryGray uppercase tracking-wide">search</span>
            <h3 class="text-2xl poppins-semibold text-primaryBlack leading-relaxed">Find some products you want here.</h3>
        </div>
        <form action="{{ route("customer.search") }}" method="GET" class="flex flex-col md:flex-row justify-between mt-8 bg-gray-100 p-4 md:w-4/6 items-center">
            <div class="flex w-full md:w-auto mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search..." class="border-none bg-transparent poppins-medium text-sm text-primaryBlack ml-3 focus:outline-none" name="search">
            </div>
            <button type="submit" class="px-6 py-2 border-2 border-transparent bg-primaryBlack text-sm poppins-medium text-white duration-200 hover:bg-transparent  hover:border-primaryBlack hover:text-primaryBlack focus:outline-none w-full md:w-auto">
                Search
            </button>
        </form>
        <div class="mt-10">
            <h6 class="text-xs poppins-medium text-secondaryGray">Result product by keyword <span class="text-primaryBlack">{{ (isset($_GET["search"])) ? $_GET["search"] : "--" }}</span></h6>
            <div class="w-full flex justify-between flex-wrap mt-5">
                @foreach ($products as $item)
                    <div class="w-full md:w-w-32% flex flex-col mb-5">
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
        </div>
    </div>
@endsection
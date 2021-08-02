@extends('customers.pages.template')

@section('title')
    Carts
@endsection

@section('content')
    @if (session("success"))
        <script>
            alert("{{ session("success") }}");
        </script>
    @endif
    <div class="w-full px-6 flex flex-col md:px-20">
        <div class="flex flex-col mt-10">
            <span class="text-xs poppins-medium text-secondaryGray uppercase tracking-wide">carts</span>
            <h3 class="text-2xl poppins-semibold text-primaryBlack leading-relaxed">Some of the products you wil buy.</h3>
        </div>
        <div class="w-full flex mt-8 justify-between flex-col md:flex-row">
            <div class="w-full md:w-48% flex flex-col">
                <div class="flex flex-col w-full bg-gray-100 p-4">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-xs text-secondaryGray uppercase poppins medium">phone</span>
                            <h5 class="text-base text-primaryBlack poppins-medium">{{ Auth::user()->profile->phone }}</h5>
                        </div>
                        <span class="text-xs text-secondaryGray uppercase poppins medium cursor-pointer">CHANGE</span>
                    </div>
                </div>
                <div class="flex flex-col w-full bg-gray-100 p-4 mt-4">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-col">
                            <span class="text-xs text-secondaryGray uppercase poppins medium">address</span>
                            <h5 class="text-base text-primaryBlack poppins-medium">{{ Auth::user()->profile->address }}</h5>
                        </div>
                        <span class="text-xs text-secondaryGray uppercase poppins medium cursor-pointer">CHANGE</span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-48% flex flex-col mt-10 md:mt-0">
                @foreach (Auth::user()->carts as $item)
                    <div class="w-full flex items-center">
                        <div class="w-1 min-h-full bg-primaryBlack">
                        </div>
                        <div class="flex w-full items-center ml-2">
                            <div class="w-20 h-20 flex-shrink-0" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url({{ asset($item->product->image) }})"></div>
                            <div class="flex w-full flex-col ml-3">
                                <div class="flex justify-between mb-1 items-center">
                                    <span class="text-xs poppins-medium text-primaryBlack">Rp.{{ number_format($item->product->price) }}</span>
                                    <div class="p-1 bg-gray-100 text-xs poppins-medium text-primaryBlack flex items-center justify-center">
                                        {{ $item->qty }} PCS
                                    </div>
                                </div>
                                <h3 class="text-lg poppins-semibold text-primaryBlack mb-1">{{ $item->product->name }}</h3>
                                <span class="text-xs poppins-regular text-secondaryGray">{{ $item->product->created_at->format("Y m d") }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr class="w-full h-1 my-5">
                @foreach(Auth::user()->carts as $item)
                    <div class="w-full flex justify-between items-center">
                        <h6 class="text-sm poppins-semibold text-secondaryGray">{{ $item->product->name }} * {{ $item->qty }}</h6>
                        <h6 class="text-sm poppins-semibold text-primaryBlack">Rp{{ number_format($item->product->price * $item->qty) }}</h6>
                    </div>
                @endforeach
                <div class="w-full flex justify-between items-center mt-8">
                    <h6 class="text-xl poppins-semibold text-primaryBlack">Total</h6>
                    <h6 class="text-xl poppins-semibold text-primaryBlack">Rp{{ number_format(Auth::user()->total()) }}</h6>
                </div>
                <div class="w-full flex justify-end items-center mt-8">
                    <a href="{{ route("customer.carts.clear") }}">
                        <button type="submit" class="px-6 py-2 mr-2 border-2 border-primaryBlack bg-transparent text-sm poppins-medium text-primaryBlack duration-200 hover:bg-primaryBlack hover:text-white focus:outline-none">
                            Clear
                        </button>
                    </a>
                    <form action="{{ route("customer.carts.checkout") }}" method="POST">
                        @csrf

                        <button type="submit" class="px-6 py-2 border-2 border-primaryBlack bg-transparent text-sm poppins-medium text-primaryBlack duration-200 hover:bg-primaryBlack hover:text-white focus:outline-none">
                            Checkout Now
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
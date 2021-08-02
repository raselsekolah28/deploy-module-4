@extends('customers.pages.template')

@section('title')
    Product Detail
@endsection

@section('content')
    @if (session("success"))
        <script >
            alert("{{ session("success") }}");
        </script>
    @endif
    <div class="w-full px-8 flex flex-col justify-between md:flex-row md:px-20 mt-10">
        <div class="hidden md:w-1/5 md:flex justify-start">
            <div class="flex flex-col items-start">
                <h5 class="text-xl poppins-medium text-primaryBlack mb-3">Categories</h5>
                @foreach ($categories as $item)
                    <a href="" class="mb-2">
                        <span class="text-sm poppins-regular text-secondaryGray hover:text-primaryBlack">{{ $item->name }}</span>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex flex-col w-full md:w-3/5">
            <div class="w-full h-72" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url({{ asset($item->image) }})">
            </div>
            <div class="flex items-center justify-between w-full mt-4">
                <h3 class="text-xl poppins-semibold text-primaryBlack">{{ $item->name }}</h3>
                <h3 class="text-4xl poppins-semibold text-primaryBlack">Rp.{{ number_format($item->price) }}</h3>
            </div>
            <p class="mt-3 text-secondaryGray poppins-regular text-xs leading-relaxed tracking-wider">{{ $item->description }}</p>
            <div class="w-full justify-end flex items-center mt-10">
                @if ($item->stock > 0)
                    <form action="{{ route("customer.carts.add", $item->id) }}" method="POST">
                        @csrf
                        <input type="number" placeholder="qty" name="qty" value="1" min="1" max="{{ $item->stock }}" class="mr-2 bg-gray-100 p-3 poppins-medium text-sm text-primaryBlack w-20 focus:outline-none">
                        <button type="submit" class="px-6 py-2 border-2 border-primaryBlack bg-primaryBlack text-sm poppins-medium text-white duration-200 hover:bg-transparent hover:text-primaryBlack focus:outline-none">
                            Add to cart
                        </button>
                    </form>
                @else
                    <button class="px-6 py-2 border-2 border-primaryBlack bg-primaryBlack text-sm poppins-medium text-white duration-200 hover:bg-transparent hover:text-primaryBlack focus:outline-none">
                        Sold out
                    </button>
                @endif
            </div>
            <div class="w-full flex justify-between flex-wrap mt-20">
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
        <div class="w-full flex flex-col items-center md:w-1/6">
            <h6 class="uppercase text-secondaryGray poppins-semibold text-sm">share</h6>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primaryBlack mt-4 cursor-pointer" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
            </svg>
        </div>
    </div>
@endsection
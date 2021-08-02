<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success Checkout</title>

    <link rel="stylesheet" href="../../../css/app.css">
</head>
    <body>
        <div class="w-full min-h-screen bg-gray-100 z-10 fixed flex items-center justify-center">
            <div class="bg-white p-6 w-full m-5 md:w-5/12 flex flex-col items-center md:m-0 md:p-14">
                <div class="rounded-full bg-gray-100 p-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-xl poppins-semibold text-primaryBlack mt-4">Thank you for ordering!!</h3>
                <p class="text-sm poppins-regular leading-relaxed tracking-wide text-secondaryGray"></p>
                <div class="w-full bg-gray-100 p-4 flex flex-col mt-8">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h6 class="text-sm poppins-medium text-primaryBlack ml-2">
                            Information that we use for delivery products.
                        </h6>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-secondaryGray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <h6 class="text-xs poppins-regular text-secondaryGray ml-2">
                            {{ Auth::user()->profile->address }}
                        </h6>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-secondaryGray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <h6 class="text-xs poppins-regular text-secondaryGray ml-2">
                            {{ Auth::user()->profile->phone }}
                        </h6>
                    </div>
                    <div class="flex items-center mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-secondaryGray" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h6 class="text-xs poppins-regular text-secondaryGray ml-2">
                            {{ Auth::user()->name }}
                        </h6>
                    </div>
                </div>
                <div class="w-full bg-gray-100 p-4 flex flex-col mt-2">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                        <h6 class="text-sm poppins-medium text-primaryBlack ml-2">
                            The code transaction that we provide.
                        </h6>
                    </div>
                    <div class="flex flex-col">
                        @foreach (session("success-checkout") as $index => $item)
                            <h6 class="text-xs poppins-regular text-secondaryGray mt-2">
                                {{ $index + 1 }}. {{ $item }}
                            </h6>
                        @endforeach
                    </div>
                </div>
                <div class="flex flex-row items-center mt-8 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-primaryBlack" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <a href="{{ route("customer.carts") }}">
                        <h6 class="text-sm mpoppins-regular text-primaryBlack ml-2">
                            CLOSE
                        </h6>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
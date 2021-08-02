<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset("assets/customer/css/customer.css") }}">
    <link rel="stylesheet" href="../../../css/app.css">
    <link rel="stylesheet" href="{{ asset("assets/customer/css/slidder.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/customer/css/owl/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/customer/css/owl/owl.theme.default.min.css") }}">
    @yield('css')
</head>
    <body>
        <header>
            @include('customers.components.navbar')
        </header>
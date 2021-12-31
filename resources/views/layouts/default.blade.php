<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="description" content="Blubber Lounge Plaue, die einzig und wahre Shisha lounge in Brandenburg an der Havel" />
    <meta name="author" content="Maximilian Mewes" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- title -->
    <title>@yield('title') - Maximilian Mewes</title>

    <!-- Font Awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- styleshets -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />        
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;900&display=swap">
    <link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @auth
        {{-- Get a "Admin" bar when logged in --}}
        {{-- @include('includes.backend') --}}
    @endauth


    @yield('content')

    @unless(request()->is('/'))
    <div id="back">
        <a href="{{ url()->previous() }}" class="btn btn-primary"> 
            <i class="fas fa-long-arrow-alt-left"></i>
            Back
        </a>
    </div>
    @endunless

    {{-- Load all Javascript files --}}
    @include('includes.scripts')
</body>
</html>
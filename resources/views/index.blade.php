<!DOCTYPE html>
<html lang="en">

<head>


    @include('templates.layouts.head')
    <style>
        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 40px;
            right: 40px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }
    </style>
</head>

<body class="index-page">

    @include('templates.layouts.header')
    <main class="main">

        <!-- Hero Section -->
        @include('templates.layouts.hero')

        <!-- Featured Services Section -->
        @include('templates.layouts.Feature-services')
        <!-- Call To Action Section -->
        @include('templates.layouts.call-to-action')
        <!-- About Section -->
        @include('templates.layouts.about')
        <!-- Stats Section -->
        @include('templates.layouts.stats')
        <!-- Features Section -->
        @include('templates.layouts.featurs')
        <!-- Services Section -->
        @include('templates.layouts.services')
        <!-- Appointment Section -->
        @include('templates.layouts.appointment')
        <!-- Tabs Section -->
        @include('templates.layouts.tabss')
        <!-- Testimonials Section -->
        @include('templates.layouts.testimonials')
        <!-- Doctors Section -->
        @include('templates.layouts.doctors')

        <!-- Gallery Section -->
        @include('templates.layouts.gallary')
        <!-- Pricing Section -->
        {{-- @include('templates.layouts.pricing') --}}
        <!-- Faq Section -->
        {{-- @include('templates.layouts.faq') --}}

        {{-- <!-- Contact Section -->
 @include('templates.layouts.contact') --}}

    </main>

    @include('templates.layouts.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send?phone=923228023744&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    @include('templates.layouts.js')

</body>

</html>

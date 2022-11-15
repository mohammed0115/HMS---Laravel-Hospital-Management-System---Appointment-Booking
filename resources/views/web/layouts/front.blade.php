<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="{{config('app.name')}}">

    <meta name="keywords" content="Hospital Management System"/>

    <meta name="description" content="Hospital Management System | HMS"/>
    <meta name="author" content="{{getAppName()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name') }}</title>
    @php
        $settingValue = getSettingValue();
    @endphp
    <link rel="icon" href="{{ $settingValue['favicon']['value'] }}" type="image/png">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{ asset('web_front/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ mix('web_front/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('web_front/css/home.css') }}">
    <link rel="stylesheet" href="{{ mix('web_front/css/layout.css') }}">
    <link rel="stylesheet" href="{{ mix('web_front/css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/selectize.min.css') }}">
    <link rel="stylesheet" href="{{ asset('web_front/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>

    <link rel="stylesheet" href="{{asset('css/front-third-party.css')}}">
    <link rel="stylesheet" href="{{asset('css/front-pages.css')}}">
    <link rel="stylesheet" href="{{ mix('web_front/css/custom.css') }}">
    @yield('page_css')
    @yield('css')
</head>
<body>
{{--@include('web.layouts.web_loader')--}}
@include('web.layouts.header')
@yield('content')
@include('web.layouts.footer')

<!-- Start Go Top Area -->
<div class="go-top bg-success d-flex align-items-center justify-content-center">
    <i class="fas fa-chevron-up next-arrow"></i>
</div>
<!-- End Go Top Area -->

<!-- Links of JS files -->

<script src="{{ asset('js/front-third-party.js')}}"></script>


<script src="{{ asset('web_front/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{ asset('web_front/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('web_front/js/slick.min.js') }}"></script>
<script src="{{ asset('web_front/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('web_front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('web_front/js/jquery.appear.js') }}"></script>
<script src="{{ asset('web_front/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('web_front/js/jquery-ui.js') }}"></script>
<script src="{{ asset('web_front/js/selectize.min.js') }}"></script>
<script src="{{ asset('web_front/js/aos.js') }}"></script>
<script src="{{ asset('web_front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('web_front/js/form-validator.min.js') }}"></script>
<script src="{{ asset('web_front/js/main.js') }}"></script>
<script src="{{ mix('js/front-pages.js') }}"></script>


<script>
    $(".slick-slider").slick({
        slidesToShow: 4,
        infinite: true,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1500,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
</script>

<script>
    $(".testimonial-slider").slick({
        slidesToShow: 1,
        infinite: true,
        slidesToScroll: 1,
        // autoplay: true,
        autoplaySpeed: 1500,
        dots: true,
        arrows: true,
        prevArrow: '<span class="prev-arrow"><i class="fas fa-chevron-left fs-5"></i></span>',
        nextArrow: '<span class="next-arrow"><i class="fas fa-chevron-right fs-5"></i></span>',
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    arrows: false,
                },
            }
        ],
    });
</script>

<script>
    $(document).ready(function () {
        $(this).scrollTop(0);
        $('.alert').delay(5000).slideUp(300)
        $('.selectize-dropdown').addClass('d-none');
    })
    
    $(document).on('click','.doctor-name-filter',function (){
        $('.selectize-dropdown').removeClass('d-none');
    })
    $(document).on('click', '.languageSelection', function () {
        let languageName = $(this).data('prefix-value')

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            type: 'POST',
            url: '/change-language',
            data: {languageName: languageName},
            success: function () {
                location.reload();
            },
        });
    });
</script>
@yield('page_scripts')
@yield('scripts')
</body>
</html>

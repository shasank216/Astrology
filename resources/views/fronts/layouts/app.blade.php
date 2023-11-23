<!DOCTYPE html>
<html lang="en">

<head>
    <title>Astrology</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('newhome/assets/css/bootstrap.css')}}">
    <link href="{{asset('newhome/assets/css/font.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('newhome/assets/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('newhome/assets/js/plugins/slick/slick.css')}}">
    <!-- pt sans font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&family=Great+Vibes&family=PT+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('newhome/assets/css/style.css')}}" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('newhome/assets/images/favicon.png')}}" type="image/x-icon">



    <!-- javascript -->
    <script src="{{asset('newhome/assets/js/jquery.js')}}"></script>
    <script src="{{asset('newhome/assets/js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('newhome/assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('newhome/assets/js/custom.js')}}"></script>
    <script src="{{asset('newhome/assets/js/plugins/slick/slick.main.js')}}"></script>


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',  // Set the original language of your website
                includedLanguages: 'en,hi,ne',  // Set the languages you want to offer for translation
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                autoDisplay: false,
                multilanguagePage: true  // Enable translation of the entire page
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script type="text/javascript">
        // Set English as the default selected language
        function setDefaultLanguage() {
            var select = document.querySelector('.goog-te-combo');
            select.value = 'en';
        }
        // Execute the function to set the default language after the Google Translate plugin has loaded
        googleTranslateElementInit();
        setDefaultLanguage();
    </script>
</head>
<body>
@include('fronts.layouts.header')
@yield('front-content')
@include('fronts.layouts.footer')
</body>
</html>

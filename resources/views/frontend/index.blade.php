<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ session()->has('dir') ? session()->get('dir') : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="baseUrl" content="{{env('APP_URL')}}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" class="site_favicon_preview"
        href="{{ getSingleMedia(settingSession('get'),'site_favicon',null) }}" />
    <link rel="stylesheet" href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link href="{{ asset('css/frontend.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/frontend/slick.css')}}">
    <!-- Add this script tag to enable Google Translate -->
    <script type="text/javascript">
        function googleTranslateElementInit() {
                new google.translate.TranslateElement({
                    pageLanguage: 'en',  // Change to your website's default languageW  // Customize the languages you want to offer
                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                    autoDisplay: false
                }, 'google_translate_element');
            }
    </script>
    <script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</head>
<script>
    window._locale = '{{ $locale }}';
        window._translations = {!! cache('translations') !!};
</script>

<body>
    <div id="google_translate_element"></div>
    <div id="app">

        <Default></Default>
    </div>
    <script src="{{ asset('js/frontend.min.js') }}" defer></script>

</body>

</html>
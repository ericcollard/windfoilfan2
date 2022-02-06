<meta charset="utf-8" />

<x-meta
    title="{{ View::getSection('page_title') }} | Windfoilfan - Ultimate windfoil database"
    description="{{ View::getSection('page_description') }}"
    image="{{ View::getSection('page_image') }}"
    author="{{ View::getSection('page_author') }}"
    url="{{ View::getSection('page_url') }}"
/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('/assets/images/favicon.ico')}}">


@yield('css')

<!-- App css -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

@if(isset($demo) && $demo == 'modern')
<link href="{{asset('assets/css/app-modern.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
<link href="{{asset('assets/css/app-modern-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
@else
@if(isset($demo) && $demo == 'creative')
<link href="{{asset('assets/css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
<link href="{{asset('assets/css/app-creative-dark.min.css')}} " rel="stylesheet" type="text/css" id="dark-style" />
@else
<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
<link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />
@endif
@endif


@yield('script-head')

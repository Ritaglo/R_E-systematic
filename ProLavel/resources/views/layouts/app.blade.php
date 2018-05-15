<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>{{config('app.name', 'Church')}}</title>
 
    </head>
    <body>
        @yield('content')
        {{-- ext install laravel-blade
            Its a highlighting syntax plugin for blade  --}}
    </body>
    
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? 'Boum' }}</title>

</head>
<body>
@section('menu')
   @include('layouts.partials._nav',['age' => '18 ans'])
@show
@yield('content')

@yield('footer')
</body>
</html>

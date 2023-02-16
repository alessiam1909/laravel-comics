<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics</title>


    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main class="bg-cards">
        <div class="container-cards">
            @foreach ($fumetti as $fumetto)
                <div class="fumetto">
                    <img class="img-fumetto" src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                    <h3>{{$fumetto['title']}}</h3>
                </div>
                
            @endforeach
        </div>
    
    </main>
    @include('partials.footer')
</body>

</html>
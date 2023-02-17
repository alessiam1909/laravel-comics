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
    <div class="jumbotron">
    </div>
    <main class="bg-cards">
        <div class="current-button">CURRENT SERIES</div>
        <div class="container-cards">
            <div class="row-fumetti">
                @foreach ($fumetti as $fumetto)
                    <div class="col-fumetto">
                        <div class="contenitore-img">
                            <img class="img-fumetto" src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                        </div>
                        <h3 class="title">{{$fumetto['title']}}</h3>
                    </div> 
                @endforeach
            </div>
            <button class="load-button">LOAD MORE</button>
        </div>
    
    </main>
    @include('partials.footer')
</body>

</html>
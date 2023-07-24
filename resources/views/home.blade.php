<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="jumbotron">
        <img src="{{Vite::asset('/resources/img/jumbotron.jpg')}}" class="img-jumbotron">
        </div>
        <div class="full-container bg-dark">
            
            <div class="container">
                <div class="row">
                    <div>
                        <h5 class="my-3">CURRENT SERIES</h5>
                    </div>
                    @foreach($comics as $comic)
                    <div class="col-12 col-lg-2 my-5 ">
                        <img src=" {{$comic['thumb']}}" class="thumb">
                        <h6 class="my-3">{{$comic['series']}}</h6>
                        
                    </div>
                    @endforeach
                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary button-load-more">LOAD MORE</button>

                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-between my-5 bg-primary">
                <span><img src="{{Vite::asset('/resources/img/buy-comics-digital-comics.png')}}">DIGITAL COMICS</span>
                <span><img src="{{Vite::asset('/resources/img/buy-comics-merchandise.png')}}">DC MERCHANDISE</span>
                <span><img src="{{Vite::asset('/resources/img/buy-comics-subscriptions.png')}}">SUBSCRIPTION</span>
                <span><img src="{{Vite::asset('/resources/img/buy-comics-shop-locator.png')}}">COMIC SHOP LOCATOR</span>
    
                <span><img src="{{Vite::asset('/resources/img/buy-dc-power-visa.svg')}}" height=80>DC POWER VISA</span>
    
            </div>
            @include('partials.footer')
        </div>
       
    </main>

</body>

</html>
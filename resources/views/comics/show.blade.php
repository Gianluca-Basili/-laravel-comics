@extends ('layouts.app')

@section('content')
    <div class="jumbotron">
        <img src="{{Vite::asset('/resources/img/jumbotron.jpg')}}" class="img-jumbotron">
    </div>
   <div class="container">
    <div class="row my-5">
        
        <div class="col-12 col-lg-6">
            <img src="https://www.coverbrowser.com/image/action-comics/1-1.jpg">
        </div>
        <div class="col-12 ">
            <h2 class="mt-4">{{$comic['title']}}</h2>
            <h4>{{$comic['price']}}</h4>
        </div>
        <div class="col-12 ">
           {{$comic['description']}}
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <p>
                Artists: 
                @foreach($comic['artists'] as $artist)
                    {{$artist}}
                @endforeach 
                </p>
            </div>

            <div class="col-12 col-lg-6">
                
            </div>
        </div>
    </div>
@endsection
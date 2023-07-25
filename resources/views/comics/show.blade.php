@extends ('layouts.app')

@section('content')
    <div class="jumbotron">
        <img src="{{Vite::asset('/resources/img/jumbotron.jpg')}}" class="img-jumbotron">
    </div>
    <div class="container">
        <div class="row my-5">
            
            <div class="col-12 col-lg-6">
                <img src="{{$comic['thumb']}}">
            </div>
            
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6  justify-content-between">
                    <h2>{{$comic['title']}}</h2>
                        
                        <h4 class="price text-white">U.S Price {{$comic['price']}}</h4>
                        <p>{{$comic['description']}}</p>
                    </div>
                    
                    <div class="col-6">
                        <h6 class="text-secondary">ADVERTISEMENT</h6>
                        <img src="{{Vite::asset('/resources/img/adv.jpg')}}">
                    </div>
                    
                </div>
                
            </div>
            <div class="container-full">

                <table class="table table-hover table-active mt-5">
                    <thead>
                        <tr>
                            <th scope="col">TALENT</th>
                            <th scope="col"></th>
                            <th scope="col">SPECS</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Art by
                                <td>@foreach($comic['artists'] as $artist)
                                @if(!$loop->last)
                               <a href="#" class="text-decoration-none"> {{$artist}},</a>
                                @else
                                <a href="#" class="text-decoration-none"> {{$artist}}</a>
                                @endif
                                @endforeach 
                                </td>
                                <td>
                                    Series:
                                   
                                </td>
                                <td>
                                    <a href="#" class="text-decoration-none">{{$comic['series']}}</a>
                                </td>
                                
                                
                            
                            </th>
    
                        
                        </tr>
                        
                        <tr>
                            <th scope="row">writer by
                            <td> @foreach($comic['writers'] as $writer)
                            @if(!$loop->last)
                            <a href="#" class="text-decoration-none">{{$writer}}</a>
                            @else
                            <a href="#" class="text-decoration-none">{{$writer}}</a>
                            @endif
                            @endforeach </td>
                            </th>
                            <td>
                                U.S. Price:
                            </td>
    
                            <td>
                            {{$comic['price']}}
                            </td>
    
                            
    
                            
                            
                        </tr>
                        <td>
                            
                        </td>
                        <td>
                           
                        </td>
                        <td>
                           On Sale Date:
                        </td>
                        <td>
                        {{$comic['sale_date']}}
                        </td>
                     
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        
</div>
@include('partials.footer')
@endsection
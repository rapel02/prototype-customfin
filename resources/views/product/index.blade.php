@extends('layout.template')

@section('content')
<br><br><br>
<div class = "container">

    @if(count($products) > 0)
    <form method = "get" class="row">
        <input placeholder="Search for" name="search" type="text" class="col s8">
        <button class="btn col s2 push-s1">Search</button>
    </form>
    <br><br>
    <div class="row">
        @foreach($products as $product)
            <div class="col s4">
                <div class="col s10 push-s1">
                    <div class="card large">
                        <div class="card-image" style="max-height:250px; overflow: hidden;">
                            <img src= "{{ asset('images/'.$product->image_path)}}" style="max-height:initial;">
                        </div>
                        <div class="card-content">
                            <h5>{{$product->name}}</h5>
                            <h6>Rp. {{$product->price}}</h6>
                            <p> {{$product->description}}</p>
                        </div>
                        <div class="card-action center">
                            <a href="/product/{{$product->slug}}" class = "btn light-blue darken-4">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @else
        Sorry, no item added
    @endif
</div>
@endsection

@extends('layout.template')

@section('content')
<br><br><br>
<div class = "container">
    <h3 class = "grey-text text-darken-1">Description Product</h3>
    <div class = "row">
        <div class="col s8">
            <div class="card horizontal">
                <div class="card-image">
                    <img class="materialboxed" width="450" src="{{ asset('images/'.$product->image_path)}}">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h5>{{$product->name}}</h5>
                        <h6>Rp. {{$product->price}}</h6>
                        <p> {{$product->description}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s4">
            <div class="col s10 push-s1">
                <div class="card-panel">
                    <h6 class = "center">Order</h6>
                    <form action="/product/{{$product->slug}}/payment" method="GET">
					    @csrf
						<div>
						  	<label class="label">Address</label>
						    	<input class="input" type="text" placeholder="Address" name="address">
						</div>
						<div>
						  	<label class="label">Quantity</label>
						    <input class="input" type="text" placeholder="Quantity" name="qty">
						</div>
						<button type="submit" class="btn center">
		                    <strong>Order</strong>
		                </button>
				    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection

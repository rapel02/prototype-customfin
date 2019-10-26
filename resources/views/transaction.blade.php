@extends('layout.template')

@section('content')
<br><br><br>
<div class = "container">
    <h3>My History Transactions</h3>
    <br><br>
    @if(count($transactions) > 0)
        @foreach($transactions as $transaction)
            <div class="collection">
                <div class="collection-item">
                    <div class="row">
                        <div class="col s2 push-s1">
                            <div class="card-image" style="max-height:100px; overflow: hidden;">
                                <img class="materialboxed"  src= "{{ asset('images/'.$transaction->product->image_path)}}" style="max-height:initial;">
                            </div>
                        </div>
                        <div class="col s8 push-s2">
                        <div class = "row">
                            <div class="col s6">
                            <h4 style="font-weight: bold;">{{$transaction->product->name}}</h4>
                            <div><small>Ordered at: {{$transaction->created_at}}</small></div>
                            </div>
                            <div class = "col s4 push-s2 right-align">
                                <br>
                                @if($transaction->status == 1)
                                    <span class="btn white-text brown">Waiting for Payment</span>
                                @elseif($transaction->status == 2)
                                    <span class="btn white-text deep-orange">Waiting Confirmation</span>
                                @elseif($transaction->status == 3)
                                    <span class="btn white-text blue">In Shipping</span>
                                @elseif($transaction->status == 4)
                                    <span class="btn white-text green">Order Done</span>
                                @elseif($transaction->status == 0)
                                    <span class="btn white-text red">Order Cancelled</span>
                                @endif
                            </div>
                        </div>
                        <h6>Quantity: {{$transaction->qty}}</h6>
                        <h6>Total Price: Rp.{{$transaction->qty * $transaction->product->price}}</h6>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        @endforeach
    @else
        <h5 class = "grey-text text-darken-1">No Transaction History</h5>
    @endif
</div>
@endsection

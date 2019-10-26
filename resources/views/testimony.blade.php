@extends('layout.template')

@section('content')
<br><br><br>
<div class = "container">
    <h4 class = "grey-text text-darken-3 center">From Our Customer</h4>
    <br><br>
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
            <div class="col s2">
                <img src={{asset('images/steven.jpeg')}} alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s8 pull-s1 ">
                <span class="black-text">
                <h4 class="grey-text text-darken-3"> Steven Geraldy </h4>
                <h6 class="grey-text text-darken-1"> A good father</h6>
                <p align="justify">
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus illum eaque iure nulla. Ipsam at incidunt velit, magni doloribus est excepturi facilis officia odit voluptas consequatur maxime quod quam laudantium.
                </p>
                </span>
            </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
            <div class="col s8 ">
                <span class="black-text">
                <h4 class="grey-text text-darken-3"> Steven Geraldy</h4>
                <h6 class="grey-text text-darken-1"> A good friend</h6>
                <p align="justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus nam, quod quidem obcaecati alias sequi incidunt ea earum quo aut architecto ut optio, eligendi consectetur. Sapiente et molestiae repudiandae consectetur.
                </p>
                </span>
            </div>
            <div class="col s2 pull-s1">
                <img src={{asset('images/steven.jpeg')}} alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
            <div class="col s2">
                <img src={{asset('images/steven.jpeg')}} alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s8 pull-s1">
                <span class="black-text">
                <h4 class="grey-text text-darken-3"> Steven Geraldy</h4>
                <h6 class="grey-text text-darken-1"> A good person</h6>
                <p align="justify">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero in repellendus delectus dignissimos optio odit, maxime mollitia quod magni, quos corrupti culpa, sed pariatur ex ipsam numquam. Obcaecati, explicabo laboriosam?
                </p>
                </span>
            </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
@endsection

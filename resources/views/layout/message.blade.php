@if(count($errors) > 0)
	@foreach($errors->all() as $error)
        <div class = "container">
            <div class="collection">
                <div class="collection-item"> {{session('error')}}</div>
            </div>
        </div>
	@endforeach
@endif

@if(session('success'))
    <div class = "container">
        <div class="collection">
            <div class="collection-item blue lighten-2 white-text"> {{session('success')}}</div>
        </div>
    </div>
@endif

@if(session('error'))
    <div class = "container">
        <div class="collection">
            <div class="collection-item red lighten-2 white-text"> {{session('error')}}</div>
        </div>
    </div>
@endif

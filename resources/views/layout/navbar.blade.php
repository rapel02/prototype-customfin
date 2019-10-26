<div class = "navbar-fixed">
    <nav class = "light-blue">
        <div class="nav-wrapper">
            <a href="/" class="brand-logo">&nbsp&nbsp Customfin</a>
            <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">Menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/product">Product</a></li>
                <li><a href="/design">Design Your Own</a></li>
                <li><a href="/testimony">Testimony</a></li>
                <li><a href="#">About Us</a></li>
                @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <a class='dropdown-trigger btn ' data-target='dropdown-user'>{{ Auth::user()->name }}</a>
                @endguest
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile">
    <li><a href="#">Product</a></li>
    <li><a href="#">Design Your Own</a></li>
    <li><a href="/testimony">Testimony</a></li>
    <li><a href="#">About Us</a></li>
    @guest
    <li><a href="{{route('login')}}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
    @else
    <li style="text-transform: uppercase; font-weight: bolder;">{{ Auth::user()->name }}</li>
    <li><a href="#">My Transaction</a></li>
    <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a></li>
    @endguest
</ul>

<!-- Dropdown Structure -->
<ul id='dropdown-user' class='dropdown-content'>
    <li><a href="/transaction">My Transaction</a></li>
    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">Logout</a></li>
</ul>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>

<script>
    $(document).ready(function() { //For dropdown
        $(".dropdown-trigger").dropdown();
    });
    $(document).ready(function(){ //For sidenav
        $('.sidenav').sidenav();
    });
</script>

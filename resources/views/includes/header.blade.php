
<nav class="navbar navbar-light navbar-expand-md navbar-dark navbar-custom justify-content-center">
    <img src="{{asset('Logo.png')}}" width="40" height="40" class="d-inline-block align-top" alt="">
    <a href="{{route('home')}}" class="navbar-brand d-flex w-50 mr-auto">ES FOREX Trading</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
        <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
        @guest

        @else
            <li class="nav-item ">
                <a class="nav-link " href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Learning Materials</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link" href="#">Order History</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link" href="#">Funds Management</a>
            </li>
            <li class="nav-item">
                <a class=" nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
            </form>
        @endguest
        </ul>
    </div>
</nav>
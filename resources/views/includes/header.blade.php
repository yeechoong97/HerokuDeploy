<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container right-align">
        <a href="{{route('index')}}" name="home"><img src="{{asset('Logo.png')}}" class="navbar-brand logo navbar-logo" alt=""></a>     
            <a class="navbar-brand logo" href="{{route('index')}}">ES FOREX Trading</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                    @guest
                    @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('forum-index','All Posts')}}">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('learning-intro')}}">Learning Materials</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{route('order-summary')}}">Trading Summary</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{route('fund-index')}}">Fund Management</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{route('profile-index')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class=" nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    </form>
                    <div class="calculator-icon-box notify" id="calculator-intro">
                        <div class="rectangle"><a href="#"><span class="fas fa-calculator chat" data-toggle="modal" data-target="#calculator-lightbox"></span></a></div>
                    </div>
                    <div class="chat-icon-box fixed-position notify" id="chat-intro">
                        <div class="circle" ><a href="#"><span class="fas fa-comments chat" onclick="toggleChat()"></span></a></div>
                    </div>
                    @endguest
                </ul>
            </div>
    </div>
</nav>
@include('subpage.calculator')





<!DOCTYPE html>
<html lang="en" >
<head>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta charset="UTF-8">
	<title>ES FOREX Trading System</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">


	<!-- CSS -->
    <link href="{{ asset('css/forum.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chart.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/orders.css') }}" rel="stylesheet">
    <link href="{{ asset('css/funds.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/indicator-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.bootcdn.net/ajax/libs/intro.js/3.2.1/introjs-rtl.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/intro.js/3.2.1/introjs-rtl.min.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/intro.js/3.2.1/introjs.css" rel="stylesheet">
    <link href="https://cdn.bootcdn.net/ajax/libs/intro.js/3.2.1/introjs.min.css" rel="stylesheet">
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-stock.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.9.0/js/anychart-annotations.min.js"></script>
    <script src="https://shielded-tor-33805.herokuapp.com/socket.io/socket.io.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/intro.js/3.2.1/intro.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/intro.js/3.2.1/intro.min.js"></script>

    <script type="text/javascript" src="{{ URL::asset('js/intro.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::asset('js/calculator.js') }}"></script>  
    <script type="text/javascript" src="{{ URL::asset('js/common.js') }}"></script>   
  
    <script type="text/javascript" src="{{ URL::asset('js/home.js') }}"></script>     
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
   


  <!-- Bootstrap Studio -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    
</head>

<body class="body-background">
<div class="">
   <header class="">
       @include('includes.header')
   </header>
           @yield('content')
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>

</html>




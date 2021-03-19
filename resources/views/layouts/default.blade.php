
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta name="csrf-token" content="{{csrf_token()}}">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ES Forex Trading System">
	<title>ES FOREX Trading System</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">

	<!-- CSS -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/indicator-lightbox.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chat.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" integrity="sha384-+aW5itA66F54/p2ZNEBKEfi872KLCkw8NIleRJhAooq8x6sZNv+HR8l8I0nJtTNM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.1/introjs-rtl.css" integrity="sha512-3eskNfJHA0L8y9EWaHqgxCJ+A3geYz7sWgr9YZ9Tp7oFtquhPbeM+TawucTX8Ze8/Z67rwTEbUe1EzoOE3SnyA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.1/introjs-rtl.min.css" integrity="sha512-CBhAm6vyK8E1WXomkztwQZ4Lq9mHE1PjWWXOICo5S5/deArabmCDoytC4+on0xxMdGhWJHBRTQdozFwZb9saYw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.1/introjs.css" integrity="sha512-i+WzzATeaDcwcfi5CfLn63qBxrKqiQvDLC+IChU1zVlaPguPgJlddOR07nU28XOoIOno9WPmJ+3ccUInpmHxBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.1/introjs.min.css" integrity="sha512-631ugrjzlQYCOP9P8BOLEMFspr5ooQwY3rgt8SMUa+QqtVMbY/tniEUOcABHDGjK50VExB4CNc61g5oopGqCEw==" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha384-KcyRSlC9FQog/lJsT+QA8AUIFBgnwKM7bxm7/YaX+NTr4D00npYawrX0h+oXI3a2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha384-JPbtLYL10d/Z1crlc6GGGGM3PavCzzoUJ1UxH0bXHOfguWHQ6XAWrIzW+MBGGXe5" crossorigin="anonymous"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha384-xBuQ/xzmlsLoJpyjoggmTEz8OWUFM0/RC5BsqQBDX2v5cMvDHcMakNTNrHIW2I5f" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/pikaday.min.js" integrity="sha384-rx0BV63HhgGIr8YUlDXei/T7jwJ1aYuvH84xT11XN/SHH1jnCs7YohLWx+0Hut5v" crossorigin="anonymous"></script>
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
    <script type="text/javascript" src="{{ URL::asset('js/intro.js') }}"></script> 
    <script type="text/javascript" src="{{ URL::asset('js/calculator.js') }}"></script>  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.all.min.js" integrity="sha384-cBSLl8QUzUYEENH3ekFxzQ+mNnUW0Rv2b5PUUV6TtsjlwX6ywxH3Im6qtXhbagVc" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha384-ujbKXb9V3HdK7jcWL6kHL1c+2Lj4MR4Gkjl7UtwpSHg/ClpViddK9TI7yU53frPN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.1/intro.min.js" integrity="sha512-iOr/b/615LMvxO8c+OWeMYfM5+KL/1gvjRtR8XIParS70gXVARiaRJWZN435d24F+RTPs9RVI1usPtLIfgtzGw==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/3.2.1/intro.js" integrity="sha512-3FU3wmuqkdVSlkbilARthlThrcm55nEaOO1QPUq+4n/lM8dfbEEspyk4RWs5ETf0Q7CiEVc3dtts7q4NLY2ulg==" crossorigin="anonymous"></script>
</html>




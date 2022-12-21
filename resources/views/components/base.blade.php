<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/all.css')}}"  type="text/css">
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
    <title>CheapTalk</title>
</head>
<body class="">
    @livewireScripts

    @role('user')
    <div class="navbar-component">
        @include('components._navbar')
    </div>
    @endrole
    
    
    
    
    <div class="content-component">
        @yield('content')
    </div>
    
</body>
</html>

<style>
    .navbar-component{
        margin-bottom: 70px;
    }
    .navbar-component{
        height: 100%;
    }
    
    /* universal styles */
    .card {
        position: static;
        
    }

    .alert {
        position: static;
    }

    /* end */
</style>

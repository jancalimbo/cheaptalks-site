<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Twikker | Share Your Thoughts</title><br>
</head>
<body>
    @livewireScripts
    @include('_navbar')
    
    @include('message')
    
    <div class="container">
        @yield('content')
    </div>

</body>
</html>

<style>
    body{
        /* background-color: #F1FFE7; */
        background-color: #628fc3bf;
    }
</style>

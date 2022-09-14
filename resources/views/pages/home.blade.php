@extends('base')

@section('content')

<br>
<h1>Welcome to Twikker!</h1>
<h5>
  Share your feelings to the world.
</h5>

<style>
  body{
    /* background-color: rgb(129, 26, 129); */
    background-image: url(pink-5.jpg);
    object-fit: contain;

    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100vh;
    /* animation: animate 16s infinite; */
  }

  /* @keyframes animate {
    0%, 100%{
      background-image: url(twikker-navbar.jpg);
    }
    25%{
      background-image: url(pink-1.jpg);
    }
    50%{
      background-image: url(pink-2.jpg);
    }
    75%{
      background-image: url(pink-3.jpg);
    }
    /* 0%{
      background-image: url(pink-4.jpg);
    }
    0%{
      background-image: url(pink-5.jpg);
    }
    0%{
      background-image: url(pink-6.jpg);
    } */
  } */
</style>
@endsection

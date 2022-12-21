@extends('components.base')

@section('content')

 

<div class="admin-page d-flex justify-content-between">
  <div class="sidebar">
    @include('components.sidebar')
  </div>

  <div class="view">
    <div class="container p-2">
      <div class="view-pages-here p-5">
        @yield('admin-content')

        @if(session('message'))
          <div class=" mt-3 alert alert-secondary text-center">
            {{ session('message') }}
          </div>
        @endif

        <h2>This is the CheapTalks Admin View!</h2>
      </div>
    </div>
  </div>
</div>

<style scoped>
  .admin-page{
    background: black;
  }
  .admin-page .sidebar{
    height: 100vh;
  }
  .admin-page .view .container {
    height: 100vh;
    width: 85vw;
    margin-left: 15vw;
    background: #ff9505;
    border-radius: 10px;
  }
  .admin-page .view .container  .view-pages-here{
    background: white;
    height: 100%;
    border-radius: 10px;
  }
</style>


@endsection
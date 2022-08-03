@if(Session::has('Error'))
    <div class="alert alert-danger">
        {{ Session::pull('Error') }}
    </div>
@endif

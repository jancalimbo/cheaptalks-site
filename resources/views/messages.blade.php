@if(session()->flash('Error'))

<div class="alert alert-danger">
    {!! session()->get('Error') !!}
</div>

@endif

@if(session()->flash('Info'))

<div class="alert alert-info">
    {!! session()->get('Info') !!}
</div>

@endif

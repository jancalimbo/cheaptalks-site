 @extends('base')

@section('content')

<div class="p-5">
  <div class="d-grid gap-2 d-md-flex">
    <h1>Your Activity</h1>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Timestamp</th>
        <th>Log Entry</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($logs as $log)
          <tr>
            <td>{{ $log->created_at }}</td>
            <td>{{ $log->log_entry }}</td>
          </tr>
        @endforeach
    </tbody>
  </table>
</div>

<style>
  table, th, td{
    border: 2px solid #1A1B41;
    
  }
</style>
@endsection
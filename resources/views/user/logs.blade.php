 @extends('components.base')

@section('content')

<div class="p-5">
  <div class="d-grid gap-2 d-md-flex">
    <h1>Your Activity</h1>
  </div>
  <hr>
  <div class="container container-box-logs">
    <table class="table table-bordered table-striped table-logs">
      <thead class="re">
        <tr>
          <th>Timestamp</th>
          <th>Log Entry</th>
        </tr>
      </thead>
  
      <tbody class="">
          @foreach ($logs as $log)
            <tr>
              <td>{{ $log->created_at }}</td>
              <td>{{ $log->log_entry }}</td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>
  
</div>

<style>
  .table-logs{
    border: 2px solid #1A1B41;
  }

  .container-box-logs{
    border-radius: 10px;
  }
</style>
@endsection
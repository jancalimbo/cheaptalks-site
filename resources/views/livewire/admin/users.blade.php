<div>
    <h1>CheapTalks Users</h1>
    <hr>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Username</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user )
                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->fname }} {{ $user->lname }}
                    </td>
                    <td>
                        <span>@</span>{{ $user->username }}
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{url('authors', ['id'=>$user->id])}}">
                            View
                        </a>
                        @if ($user->status == 'authorized')
                            <a class="btn btn-info" href="{{url('/admin/disable', ['id'=>$user->id])}}">
                                Disable
                            </a>    
                            @else
                            <a class="btn btn-info" href="{{url('/admin/enable', ['id'=>$user->id])}}">
                                Enable
                            </a>    
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

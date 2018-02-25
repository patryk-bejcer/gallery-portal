@extends('layouts.admin')

@section('title', '| Permissions')

@section('content')

    <div class="col-lg-7 col-lg-offset-1">
        <h1><i class="fa fa-key"></i>Uprawnienia

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Użytkownicy</a>
            <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Role</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">

                <thead>
                <tr>
                    <th>Uprawnienia</th>
                    <th>Operacje</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>
                            <a href="{{ URL::to('admin/permissions/'.$permission->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <a href="{{ URL::to('admin/permissions/create') }}" class="btn btn-success">Add Permission</a>

    </div>

@endsection
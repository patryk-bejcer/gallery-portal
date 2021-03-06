@extends('layouts.admin')

@section('title', '| Roles')

@section('content')

    <div class="col-lg-9 col-lg-offset-1">
        <h1><i class="fa fa-key"></i> Role

            <a href="{{ route('users.index') }}" class="btn btn-default pull-right">Użytkownicy</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Uprawnienia</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Role</th>
                    <th>Uprawnienia</th>
                    <th>Operacje</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($roles as $role)
                    <tr>

                        <td>{{ $role->name }}</td>

                        <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                        <td>
                            <a href="{{ URL::to('admin/roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>

        <a href="{{ URL::to('admin/roles/create') }}" class="btn btn-success">Add Role</a>

    </div>

@endsection
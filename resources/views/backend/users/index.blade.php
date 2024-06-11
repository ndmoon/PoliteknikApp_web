@extends('backend.layouts.main')
{{-- @section('navMhs', 'active') --}}
@section('title', 'Data Users')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 mb-3 border-bottom">
        <h1>User</h1>
    </div>

    @if (session()->has('pesan'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('pesan') }}
        </div>
    @endif

    <a href="/user-backend/create" class="btn btn-primary">
        <span data-feather="plus-circle"></span>
        Create User
    </a>

    <table class="table table-bordered table-sm my-4">
        <tr>
            <th class="text-center" width="50">No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Create At</th>
            <th width="165">Aksi</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }} </td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="/user-backend/{{ $user->id }}/edit" class="btn btn-warning btn-sm">
                        <span data-feather="edit"></span>Edit
                    </a>

                    <form action="/user-backend/{{ $user->id }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                            <span data-feather="trash-2"></span>Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $users->links() }}
@endsection

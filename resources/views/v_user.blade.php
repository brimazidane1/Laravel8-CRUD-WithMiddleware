@extends('layout.v_template')
@section('title','User')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">User</h1>
        @if (session('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-message">
                {{ session('message') }}
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">User List  <a href="/user/add" class="btn btn-sm btn-secondary">Add</a></h5>
                    </div>
                    <div class="card-body">
                        {{-- {{ dd($user) }} --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                </tr>     
                            </thead>
                            <tbody>
                                <?php $no= 1; ?>
                                @foreach ($userDB as $u)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{  $u->name }}</td>
                                        <td>{{  $u->username }}</td>
                                        <td><img src="{{ url('img/'. $u->foto) }}" width="50px"></td>
                                        <td>
                                            <a href="/user/detail/{{ $u->userId }}" class="btn btn-sm btn-primary">Detail</a>
                                            <a href="/user/edit/{{ $u->userId }}" class="btn btn-sm btn-success">Edit</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $u->userId }}">
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@foreach ($userDB as $u)
<!-- Modal -->
<div class="modal fade" id="deleteModal{{ $u->userId }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure to delete {{ $u->name }}?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <a href="/user/delete/{{ $u->userId }}" class="btn btn-danger">Delete</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
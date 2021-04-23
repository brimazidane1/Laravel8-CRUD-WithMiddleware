@extends('layout.v_template')
@section('title','User')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Add User</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Fill this form!</h5>
                    </div>
                    <div class="card-body">
                        <form action="/user/insert" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Name</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                                        <div class="text-danger">
                                            @error('name')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Username</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}">
                                        <div class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="password" name="password" class="form-control form-control @error('password') is-invalid @enderror" placeholder="Password">
                                        <div class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Photo</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" placeholder="Photo">
                                        <div class="text-danger">
                                            @error('photo')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@extends('layout.v_template')
@section('title','Detail User')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Detail User</h1>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0"></h5>
                    </div>
                    <div class="card-body">
                        {{-- {{ dd($user) }} --}}
                        <table class="table table-bordered">
                            <tr>
                                <td>ID</td>
                                <td>:</td>
                                <td>{{ $detail->userId }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>{{ $detail->username }}</td> 
                            </tr>   
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>{{ $detail->password }}</td> 
                            </tr>          
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
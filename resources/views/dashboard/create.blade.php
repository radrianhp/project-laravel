@extends('layouts.admin')


@section('wrapper')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Data Users</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Input Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="/dashboard/posts" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control 
                                    @error('name')
                                        is-invalid
                                    @enderror" id="name" name="name" placeholder="Enter Username"
                                        value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control 
                                    @error('email')
                                    is-invalid
                                    @enderror" id="email" name="email" placeholder="Enter email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control 
                                    @error('password')
                                    is-invalid
                                    @enderror" id="password" name="password" placeholder="Password" required>
                                    @error('password')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control @error('address')
                                    is-invalid
                                    @enderror" id="address" name="address" placeholder="Enter Address"
                                        value="{{ old('address') }}" required>
                                    @error('address')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="number" class="form-control @error('phone')
                                    is-invalid
                                    @enderror" id="phone" name="phone" placeholder="Enter Phone"
                                        value="{{ old('phone') }}" required>
                                    @error('phone')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.card -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
@endsection
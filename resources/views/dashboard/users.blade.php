@extends('layouts.dashboard')

@section('title', 'Users List')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Users List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <!-- Add content to this card if needed -->
                    </div>
                    <!-- /.card -->

                    <div class="card card-primary card-outline">
                        <div class="card-body">
                            <h5 class="card-title">Posts</h5>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">image</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">role</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>
                                        <td>
                                            <img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="#"
                                                class="img-fluid" height="50%" width="50%">
                                        </td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <div class="d-flex justify-content-end">
                                                <form
                                                    action="{{route('dashboard.users.destroy',['id'=>$user->id])}}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </form>
                                                <button class="editButton btn btn-sm"><i class="fas fa-edit"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div><!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                
                    <!-- Your edit content goes here -->
                    <div class="col-lg-6">
                        <div id="editContent" style="display: none;">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h5 class="m-0">add ability</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled"
                                        disabled>
                                    <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox
                                        input</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled"
                                        checked disabled>
                                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked
                                        switch checkbox input</label>
                                </div>
                                <button class="btn btn-primary mt-3">Apply config</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // When the "Edit" button is clicked
        $(".editButton").click(function() {
            // Toggle the visibility of the content with the "editContent" id
            $("#editContent").toggle();
        });
    });
    </script>
    
@endsection

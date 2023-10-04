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
                <div class="col-lg-7">
                    <div class="card">
                        <!-- Add content to this card if needed -->
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
                                            @foreach ($user->roles as $role)
                                            <td>{{ $role->name}}</td>
                                            @endforeach
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
                                                    <button class="editButton btn btn-sm" data-user-id="{{ $user->id }}">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="d-flex justify-content-center mt-4">
                                    {{ $users->links('vendor.pagination.bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                    
                    <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                
                    <!-- Your edit content goes here -->
                    
                    <div class="col-lg-5">
                        <div id="editContent" style="display: none;">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">Edit ability</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('dashboard.users.addAbility', ['id' => 'user_id']) }}" method="post" id="abilityForm">
                                        @csrf
                                        <!-- Add a hidden input field to store the user's ID -->
                                        <input type="hidden" name="user_id" id="user_id">
                                        @foreach ($roles as $role)
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="radio" name="ability" value="{{ $role->id }}" id="flexSwitchCheckDefault">
                                                <label class="form-check-label" for="flexSwitchCheckDefault">
                                                    {{ $role->name }}
                                                </label>
                                            </div>
                                        @endforeach
                                        <button class="btn btn-primary mt-3">Apply config</button>
                                    </form>
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
            // Retrieve the user ID from the data attribute
            var userId = $(this).data("user-id");

            // Set the user ID in the hidden input field
            $("#user_id").val(userId);

            // Update the form's action attribute with the user ID
            var formAction = "{{ route('dashboard.users.addAbility', ['id' => 'user_id']) }}";
            formAction = formAction.replace('user_id', userId);
            $("#abilityForm").attr("action", formAction);

            // Now, you can use the userId variable as needed
            console.log("Clicked on user with ID: " + userId);

            // Toggle the visibility of the content with the "editContent" id
            $("#editContent").toggle();
        });
    });
</script>







    
@endsection

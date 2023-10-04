
@extends('layouts.dashboard')

@section('title', 'edit Categories')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Edit Category</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Edit Category</li>
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
              <div class="col-lg-5">
                  <!-- blog List -->
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title p-2">Add Category</h5>
                      <form action="{{route('dashboard.category.edit',['id'=>$category->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" value="{{$category->name}}" placeholder="blog titel">
                        </div>
                        <div class="form-group">
                          <input type="text" name="description" class="form-control" value="{{$category->description}}" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <select name="type" class="form-control" disabled>
                                <option value="1" {{ $category->type == "post" ? 'selected' : '' }}>Posts</option>
                                <option value="2" {{ $category->type == "blog" ? 'selected' : '' }}>Blogs</option>
                            </select>
                            
                        </div>
                        <div class="form-group">
                          <label for="image">Drop image</label>
                          <input type="file" name="image" id="image" class="form-control">
                      </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
                    </div>
                  </div>

                  <!-- blog Form -->
                  <!-- /.card -->
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h5 class="m-0">View Category</h5>
                    </div>
                    <div class="card-body">
                        {{--  --}}
                  </div>
                  </div>
              </div>
              <!-- /.col-md-6 -->
              <div class="col-lg-7">
                <!-- Other content -->
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Categories</th>
                                    <th>Post</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($categories as $category)
                              <tr>
                                <td>{{$category->id}}</td>
                                <td><img src="{{ asset('assets\img\Categories/' . $category->image) }}" alt="Category Image" width="50" height="50"></td>
                                <td>{{$category->name}}</td>
                                  <td>{{$category->posts->count()}}</td>
                                  <td>
                                    <div class="d-flex ml-auto">
                                        <form action="{{route('dashboard.category.show' , ['id' =>$category->id])}}" method="GET">
                                            @csrf
                                            <button type="submit" class="btn btn">
                                                <i class="fa-solid fa-eye"></i>
                                            </button>
                                        </form>

                                      <form action="{{route('dashboard.category.edit',['id' => $category->id])}}" method="post">
                                          @csrf
                                          @method('put')
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-pen-to-square"></i>
                                          </button>
                                      </form>
                                      
                                      <form action="{{route('dashboard.category.destroy',['id'=>$category->id])}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn">
                                          <i class="fa-sharp fa-solid fa-trash"></i>                                        </button>
                                      </form>
                                  </div>
                                </td>
                              </tr>
                              @endforeach
                          </tbody>
                        </table>
                        <div class="d-flex justify-content-center mt-4">
                          {{ $categories->links('vendor.pagination.bootstrap-4') }}
                      </div>
                      
                    </div>
                </div>
                <!-- ... -->    
                       
            </div>
              
          
              <!-- /.col-md-6 -->
          </div>
          
          <!-- /.row -->
      </div><!-- /.container-fluid -->
      
  </div>
  
  <!-- /.content -->
</div>

  @endsection
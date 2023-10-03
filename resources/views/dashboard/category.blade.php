
@extends('layouts.dashboard')

@section('title', 'Categories')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">Categories</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Categories</li>
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
                      <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <input type="text" name="blog_title" class="form-control" placeholder="blog titel">
                        </div>
                        <div class="form-group">
                          <input type="text" name="blog_des" class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                        <input type="file" name="image">
                      </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                      </form>
                    </div>
                  </div>

                  <!-- blog Form -->
                  <!-- /.card -->
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                      <h5 class="m-0">new Category</h5>
                    </div>
                    <div class="card-body">
                      <img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="#" class="img-fluid w-80 h-80" >
                      <h2>how to play football i a gaza strip</h2>
                      <p>how to play football i a gaza striphow to play football i a gaza striphow to play football i a gaza strip</p>
                      <h6>
                        <span class="text-muted">.by ريرو</span>
                    </h6>
                      <a href="#" class="btn btn bg-green">EDIT</a>
                      <a href="#" class="btn btn bg-red">DELETE</a>
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
                              <tr>
                                <td>1</td>
                                <td><img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="Blog Image" width="50" height="50"></td>
                                  <td>Sport</td>
                                  <td>66</td>
                                  <td>
                                    <div class="d-flex ml-auto">
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-eye"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-pen-to-square"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn">
                                          <i class="fa-sharp fa-solid fa-trash"></i>                                        </button>
                                      </form>
                                  </div>
                                </td>
                                  
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="Blog Image" width="50" height="50"></td>
                                  <td>Sport</td>
                                  <td>70</td>
                                  <td>
                                    <div class="d-flex ml-auto">
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-eye"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-pen-to-square"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn">
                                          <i class="fa-sharp fa-solid fa-trash"></i>                                        </button>
                                      </form>
                                  </div>
                                </td>
                                  
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="Blog Image" width="50" height="50"></td>
                                  <td>Sport</td>
                                  <td>90</td>
                                  <td>
                                    <div class="d-flex ml-auto">
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-eye"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-pen-to-square"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn">
                                          <i class="fa-sharp fa-solid fa-trash"></i>                                        </button>
                                      </form>
                                  </div>
                                </td>
                                  
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="Blog Image" width="50" height="50"></td>
                                  <td>Sport</td>
                                  <td>100</td>
                                  <td>
                                    <div class="d-flex ml-auto">
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-eye"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                          @csrf
                                          <button type="submit" class="btn btn">
                                              <i class="fa-solid fa-pen-to-square"></i>
                                          </button>
                                      </form>
                                      <form action="#" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn">
                                          <i class="fa-sharp fa-solid fa-trash"></i>                                        </button>
                                      </form>
                                  </div>
                                </td>
                              </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
                <!-- ... -->    
                <div class="card card-outline">
                  <div class="card-header">
                    <h5 class="m-0">view</h5>
                  </div>
                  <div class="card-body">
                    <img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="#" class="img-fluid w-80 h-80" >
                    <h2>how to play football i a gaza strip</h2>
                    <p>how to play football i a gaza striphow to play football i a gaza striphow to play football i a gaza strip</p>
                    <h6>
                      <span class="text-muted">.by ريرو</span>
                  </h6>
                    <a href="#" class="btn btn bg-green">EDIT</a>
                    <a href="#" class="btn btn bg-red">DELETE</a>
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

  @endsection

@extends('layouts.dashboard')

@section('title', 'Posts')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
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
              
            </div>

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Posts</h5>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">title</th>
                      <th scope="col">user</th>
                      <th scope="col">blog</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      
                      <th scope="row">1</th>              
                        <td>
                          <a href="#" class="text-dark">
                            how to play football
                          </a>
                        </td>
                      <td>Hatem Abu Selmyya</td>
                      <td>Sport</td>
                      <td>
                        <form action="#" method="GET">
                          @csrf
                          <button type="submit" class="btn btn"><i class="fa-solid fa-eye"></i></button>
                      </form>                    </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                        <a href="#" class="text-dark">
                          how to play football i a gaza strip
                        </a>
                      </td>
                      <td>Ali</td>
                      <td>Sport</td>
                      <td>
                        <form action="#" method="GET">
                          @csrf
                          <button type="submit" class="btn btn"><i class="fa-solid fa-eye"></i></button>
                      </form>                   
                    </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>                 
                      <td>
                        <a href="#" class="text-dark">
                          good
                        </a>
                      </td>
                      <td>Hatem</td>
                      <td>Sport</td>
                      <td>
                        <form action="#" method="GET">
                          @csrf
                          <button type="submit" class="btn btn"><i class="fa-solid fa-eye"></i></button>
                      </form>                    </td>
                    </tr>
                  </tbody>
                </table>
                
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6 ">
            
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">View</h5>
              </div>
              <div class="card-body">
                <img src="{{ asset('assets\img\profile\mohammed.jpg') }}" alt="#" class="img-fluid" height="50px" width="50%" >
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
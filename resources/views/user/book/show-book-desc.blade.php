@extends('user.layout.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Book Description</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('user/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Book Description</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

                        </div>
                        <div class="card-body d-flex">
                            <div class="row">
                                <div class="col-sm-12 col-md-4 col-lg-4 mb-3 d-flex justify-content-center">
                                    <img src="{{$book->cover_image}}" class=" h-100" alt="..." style="width: 100%;max-width: 425px; max-height: 400px; border-radius: 10px;" >
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-8 d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-12" style="font-size: x-large;">
                                            <p class="w-90"><b>{{$book->title}}</b></p>
                                        </div>
                                        <div class="col-12 ">
                                            <p class="w-90">{{$book->description}}</p>
                                        </div>
                                        <hr style="width: 100%;">
                                        <div class="col-6">
                                            <div class="col-12">
                                                <p>Author : {{$book->author}}</p>
                                            </div>
                                            <div class="col-12">
                                                <p>Price : {{'$'.$book->price}}</p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="col-12">
                                                <p>Publication Date : {{\Carbon\Carbon::parse($book->publication_date)->format('d M Y')}}</p>
                                            </div>
                                            <div class="col-12">
                                                <p>Price : {{'$'.$book->price}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer"></div>
                        <!-- /.card-footer-->
                    </div>
                </div>
                <!-- /.row -->
                </div>
            </div><!--/. container-fluid -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

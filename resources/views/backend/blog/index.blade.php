@extends('layouts.backend.main')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dasbhboard
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body ">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <td>Action</td>
                            <td>Title</td>
                            <td>Author</td>
                            <td>Category</td>
                            <td>Date</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                            <tr>
                                <td>
                                    <a href="{{route('blogedit', $post->id)}}" class="btn btn-xs btn-default">
                                    <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('blogdelete', $post->id)}}" class="btn btn-xs btn-danger">
                                    <i class="fa fa-times"></i>
                                    </a>
                                </td>
                                <td>{{$post->title}}
                                </td>
                                <td>{{$post->author->name}}</td>
                                <td>{{$post->category}}</td>
                                <td>{{$post->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="pull-left">
                    <ul class="pagination no-margin">
                        <li><a href="#">&laquo</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo</a></li>
                    </ul>
                </div>
                <div class="pull-right">
                    <small>Total 5 Data</small>
                </div>
              </div>
            </div>
            <!-- /.box -->
          </div>
        </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

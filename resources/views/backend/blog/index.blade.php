@extends('layouts.backend.main')

@section('title','MyBlog | Blog Index')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blog
                <small> Display all blog posts</small>
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
                                        <td width="80">Action</td>
                                        <td width="60">Title</td>
                                        <td width="120">Author</td>
                                        <td width="120">Category</td>
                                        <td width="150">Date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            <a href="{{ route('backend.blog.edit', $post->id) }}" class="btn btn-xs btn-default">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ route('backend.blog.destroy', $post->id) }}" class="btn btn-xs btn-danger">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->author->name }}</td>
                                        <td>{{ $post->category->title }}</td>
                                        <td>
                                            <abbr title="{{ $post->dateFormatted(true) }}"> {{ $post->dateFormatted() }} </abbr>
                                            {!!  $post->publicationLabel() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="box-footer clearfix">
                            <div class="pull-left">
                                {{ $posts->render() }}
                            </div>
                            <div class="pull-right">
                                <?php $postCount = $post->count() ?>
                                <small>{{ $postCount }} {{ str_plural('Item', $postCount) }}</small>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection

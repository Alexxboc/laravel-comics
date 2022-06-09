@extends('layouts.app')

@section('comics')

<div class="comics_section">
    <!-- /.current_series_btn -->
    <div class="container">
        <div class="current_series_btn">
            <a href="#">current series</a>
        </div>
        <div class="row">
            @foreach($comics as $comic)
            <div class="col-6">
                <div class="card">
                    <div class="img_container">
                        <img src="{{$comic['thumb']}}" alt="">
                    </div>
                    <!-- /.img_container -->
                    <div class="title">
                        <span>{{$comic['series']}}</span>
                    </div>
                    <!-- /.title -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-6 -->
            @endforeach
        </div>
        <!-- /.row -->
        <div class="load_btn">
            <a href="#">Load More</a>
        </div>
        <!-- /.load_btn -->
    </div>
    <!-- /.container -->
</div>
<!-- /.hero_image -->

@endsection
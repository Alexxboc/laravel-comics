@extends('layouts.app')


@section('comics')

<div class="comics_section">
    <!-- /.current_series_btn -->
    <div class="container">
        <div class="current_series_btn">
            <a href="#">current series</a>
        </div>
        <div class="row">
            @foreach($comics as $index => $comic)
            <div class="col-6">
                <a href="{{route('comics.show', $index)}}">
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
                </a>
                <!-- /. single_comic_link -->

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

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="nav_img">
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="alt" ">
                    </div>
                    <!-- /.nav_img -->
                    <div class=" nav_title">
                        <h3>Digital Comics</h3>
                    </div>
                    <!-- /.nav_title -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-5 -->
            <div class="col-5">
                <div class="card">
                    <div class="nav_img">
                        <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="alt" ">
                    </div>
                    <!-- /.nav_img -->
                    <div class=" nav_title">
                        <h3>Subscription</h3>
                    </div>
                    <!-- /.nav_title -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-5 -->
            <div class="col-5">
                <div class="card">
                    <div class="nav_img">
                        <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="alt" ">
                    </div>
                    <!-- /.nav_img -->
                    <div class=" nav_title">
                        <h3>Comic Shop Locator</h3>
                    </div>
                    <!-- /.nav_title -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-5 -->
            <div class="col-5">
                <div class="card">
                    <div class="nav_img">
                        <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="alt" ">
                    </div>
                    <!-- /.nav_img -->
                    <div class=" nav_title">
                        <h3>DC power visa</h3>
                    </div>
                    <!-- /.nav_title -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-5 -->
            <div class="col-5">
                <div class="card">
                    <div class="nav_img">
                        <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="alt" ">
                    </div>
                    <!-- /.nav_img -->
                    <div class=" nav_title">
                        <h3>Digital Comics</h3>
                    </div>
                    <!-- /.nav_title -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-5 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.banner -->

@endsection
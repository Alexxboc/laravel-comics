@extends('layouts.app')

@section('comics')
<div class="divider">
    <div class="container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <!-- /.container -->

</div>
<!-- /.divider -->

<section class="comic_details">
    <div class="container">
        <div class="row">
            <div class="col-2 left">
                <h2 class="comic_title">{{$comic['title']}}</h2>
                <!-- /.comic_title -->
                <div class="navigator d_flex">
                    <div class="row_left d_flex">
                        <div class="price">
                            <span>U.S. Price</span>
                            <span>{{$comic['price']}}</span>
                        </div>
                        <!-- /.price -->
                        <div class="availability">
                            <span>available</span>
                        </div>
                        <!-- /.availability -->
                    </div>
                    <!-- /.row_left -->
                    <div class="row_right">
                        <div class="check_avail">
                            <span>Check Availability</span>
                        </div>
                        <!-- /.check_avail -->
                    </div>
                    <!-- /.row_right -->
                </div>
                <!-- /.navigator -->
                <p>{{$comic['description']}}</p>
            </div>
            <!-- /.col-2 left -->
            <div class="col-2 right">
                <div class="adv">
                    <span>Advertisement</span>
                    <div class="img">
                        <img src="{{asset('img/adv.jpg')}}" alt="">
                    </div>
                </div>
                <!-- /.adv -->
            </div>
            <!-- /.col-2 right -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.comic_details -->

<section class="artists">
    <div class="container">
        <div class="row">
            <div class="col-2 left">
                <div class="column_title">
                    <h3>Talent</h3>
                </div>
                <!-- /.title -->
                <div class="artists_list">
                    <span>Art by:</span>

                    @foreach($comic['artists'] as $artist)
                    <span class="color_blue">{{$artist}},</span>
                    @endforeach


                </div>
                <!-- /.art -->
                <div class="writers_list">
                    <span>Written by:</span>

                    @foreach($comic['writers'] as $writer)
                    <span class="color_blue">{{$writer}},</span>
                    @endforeach

                </div>
                <!-- /.writers -->
            </div>
            <!-- /.col-2 -->

            <div class="col-2 right">
                <div class="column_title">
                    <h3>Specs</h3>
                </div>
                <!-- /.title -->
                <div class="series_name">
                    <span>Series:</span>
                    <span class="color_blue">{{$comic['series']}}</span>
                </div>
                <!-- /.series_name -->
                <div class="price">
                    <span>U.S. Price:</span>
                    <span>{{$comic['price']}}</span>
                </div>
                <!-- /.price -->
                <div class="sale_date">
                    <span>U.S. Price:</span>
                    <span>{{$comic['sale_date']}}</span>
                </div>
                <!-- /.sale_date -->
            </div>
            <!-- /.col-2 -->

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.artists -->

@endsection
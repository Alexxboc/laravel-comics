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

@endsection
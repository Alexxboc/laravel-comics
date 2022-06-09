@extends('layouts.app')

@section('comics')

<section class="comics">
    <div class="container">
        <div class="row row-cols-6">
            @forelse($comics as $comic)
            <div class="col">
                <div class="comic">
                    <img src="{{$comic['thumb']}}" alt="" class="img-fluid">
                    <h6>{{$comic['title']}}</h6>
                </div>
                <!-- /.comic -->
            </div>
            <!-- /.col -->
            @endforelse
        </div>
        <!-- /.row row-cols-6 -->
    </div>
    <!-- /.container -->
</section>
<!-- /.comics -->

@endsection
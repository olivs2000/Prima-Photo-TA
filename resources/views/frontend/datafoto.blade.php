@extends('layout.frontend')

@section('title', 'datafoto')

@section('content')

    <div class="container products">

        <div class="row">
        @foreach($datafoto as $f)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="{{asset('assets/img/' . $f->id . '.jpg' )}}" alt="">
                    <div class="caption">
                        <h4>{{$f->nama}}</h4>
                        <p><strong>No kamera: </strong> {{$f->nokamera}}</p>
                        <p class="btn-holder">
                        <a href="{{url('add-to-cart/'.$f->id)}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                    </div>
                </div>
            </div>
        @endforeach
        </div><!-- End row -->

    </div>

@endsection
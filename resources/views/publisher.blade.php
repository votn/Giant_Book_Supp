@extends('template')
@section('title', 'PUBLISHER')

@section('content')
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Publisher Data</h3>
    </div>

    <div class="container pb-3" style="background-color: cornsilk">
        <div class="row p-md-2 juicy-peach-gradient">
            @foreach ($postP as $PP)
            <div class="col-md-3 pt-3">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="{{ $PP->publisher_image }}" style="height: 200px" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $PP->publisher_name }}</h4>
                        <br>
                        <h6 style="color: gray">{{ $PP->publisher_address }}</h5>
                        <a href="{{-- /detailbook/{{ $PP->id }} --}}" class="btn btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod">More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

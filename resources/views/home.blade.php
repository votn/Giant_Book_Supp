@extends('template')
@section('title', 'HOME')

@section('content')
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Book List</h3>
    </div>

    <div class="container" style="background-color: cornsilk">
        <div class="row p-md-2 juicy-peach-gradient">
            @foreach ($postB as $PB)
            <div class="col-md-3 pt-3">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="{{ $PB->book_image }}" style="height: 440px" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $PB->book_title }}</h4>
                        <h5 style="color: gray">by</h5>
                        <h4>{{ $PB->book_author }}</h4>
                        <a href="/detailbook/{{ $PB->id }}" class="btn btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

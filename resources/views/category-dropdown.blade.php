@extends('template')
@section('title', 'BY CATEGORY')

@section('content')
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Book List</h3>
    </div>

    <div class="container" style="background-color: cornsilk">
        <div class="row p-md-2 juicy-peach-gradient">
            @foreach ($newPostC as $NPC)
            <div class="col-md-3 pt-3">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="{{ $NPC->book->book_image }}" style="height: 440px" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $NPC->book->book_title }}</h4>
                        <h5 style="color: gray">by</h5>
                        <h4>{{ $NPC->book->book_author }}</h4>
                        <a href="/detailbook/{{ $NPC->book->id }}" class="btn btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

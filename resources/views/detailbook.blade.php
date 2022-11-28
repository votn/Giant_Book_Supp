@extends('template')
@section('title', 'DETAIL BOOK')

@section('content')
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Book Details</h3>
    </div>

    <div class="container" style="background-color: cornsilk">
        <div>
            <div class="card" style="width:100%">
                <img class="card-img-top" src="{{ $detailbook->book_image }}" alt="">
                <div class="card-body" style="background-color: cornsilk">
                    <h4 class="card-title">Title: {{ $detailbook->book_title }}</h4>
                    <h4 class="card-title">Author: {{ $detailbook->book_author }}</h4>
                    <h4 class="card-title">Publisher: {{ $detailbook->publisher->publisher_name }}</h4>
                    <h4 class="card-title">Year: {{ $detailbook->book_year }}</h4>
                    <br>
                    <h4>Synopsis:</h4>
                    <p style="font-size: 20px">
                        {{ $detailbook->book_synopsis }}
                    </p>
                </div>
            </div>
            </div>
        </div>

    </div>

@endsection

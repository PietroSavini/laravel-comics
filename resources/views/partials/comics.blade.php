@extends('layout.app')

@section('content')
    <div class="jumbotron"></div>
    <section>
        <main>
            <div class="wrapper">
                <span class="current-series">CURRENT SERIES</span>
                <div class="ms_row">
                    @php
                        $col = require '../config/new-comics.php'
                    @endphp
                    @foreach ($col as $card)  
                    <div class="col_ms">
                        <a href="#">
                            <div class="card_ms">
                            <div class="card-img">
                                <img src="{{ $card['thumb'] }}" alt="">
                            </div>
                            <div class="card-content">
                                <p>{{$card['series']}}</p>
                                <span>{{$card['price']}}</span>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
                <span class="btn_ms">LOAD MORE</span>
            </div>
        </main>
    </section>
@endsection
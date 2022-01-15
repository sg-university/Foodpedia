@extends('layouts.menu')
@section('page-content')

    <style>
        img {
            width: 100px;
            height: 100px;
        }

        .z {
            background-color: rgb(248, 191, 85);
            border-radius: 20px;
        }

        .anchor {
            all: unset;
            text-decoration: none;
        }

        .anchor:hover {
            all: unset;
            text-decoration: none;
            cursor: pointer;
        }

    </style>

    <div class="row align-items-center justify-content-center mt-5 ">
        <div style="width: 35%;" class="text-center ">
            <h1 class="mb-5">Recipe Recommendation By Rating</h1>
        </div>
    </div>

    <div class="container mt-5">
        @foreach ($foods as $food)
            <a href="/recommendation/detail/{{ $food->id }}" class="anchor">
                <div class="row align-items-center p-3 mb-5 z">
                    <div class="col-3">
                        <img src="{{ $food->image }}" alt="">
                    </div>
                    <div class="col-3">
                        <h5>{{ $food->name }}</h5>
                        <br>
                        <h5>Rating: {{ $food->rating }}</h5>
                    </div>
                    <div class="col-3">
                        <h5>Calories {{ $food->calories }}</h5>
                    </div>
                    <div class="col-3">
                        <h5>Estimated Times: {{ $food->duration }} Mins</h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection

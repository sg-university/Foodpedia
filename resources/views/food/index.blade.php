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
            <h1 class="mb-5">All Foods</h1>
        </div>
    </div>

    <div class="container">
        <div class="col-4 d-flex justify-content-center">
            <div class="md-form active-pink-2 mb-3">
                <form action="/food" method="get" class="d-flex">
                    @csrf
                    <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
                    <button class="mx-2 btn btn-success" type="submit">Search</button>
                </form>

                @if (Auth::user()->role == 'Admin')
                    <a href="/createFood" class="btn btn-primary">Add New Food</a>
                @endif
            </div>
        </div>
    </div>

    <div class="container mt-5">
        @foreach ($foods as $food)
            <a href="/food/detail/{{ $food->id }}" class="anchor">
                <div class="row align-items-center p-3 mb-5 z">
                    <div class="col">
                        <img src="{{ $food->image }}" alt="">
                    </div>
                    <div class="col">
                        <h5>{{ $food->name }}</h5>
                        <br>
                        <h5>Rating: {{ $food->rating }}</h5>
                    </div>
                    <div class="col">
                        <h5>Calories {{ $food->calories }}</h5>
                    </div>
                    <div class="col">
                        <h5>Estimated Times: {{ $food->duration }} Mins</h5>
                    </div>
                    @if (Auth::user()->role == 'Admin')
                        <div class="col">
                            <form action="/deleteFood/{{ $food->id }}" method="post">
                                @csrf
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    @endif
                </div>
            </a>
        @endforeach
    </div>

@endsection

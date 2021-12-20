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
        <h1 class="mb-5">Recipe Recommendation</h1>
    </div>
</div>

<div class="container mt-5">

    <a href="/recommendation/detail" class="anchor">
        <div class="row align-items-center p-3 mb-5 z">
            <div class="col-3">
                <img src="/image/welcome_photo.jpg" alt="">
            </div>
            <div class="col-3">
                <h5>Honey Chicken</h5>
                <br>
                <h5>Rating: 4.5</h5>
            </div>
            <div class="col-3">
                <h5>Calories 123</h5>
            </div>
            <div class="col-3">
                <h5>Estimated Times: 30 Mins</h5>
            </div>
        </div>
    </a>

    <a href="" class="anchor">
        <div class="row align-items-center  p-3 mb-5 z">
            <div class="col-3">
                <img src="/image/welcome_photo.jpg" alt="">
            </div>
            <div class="col-3">
                <h5>Honey Chicken</h5>
                <br>
                <h5>Rating: 4.5</h5>
            </div>
            <div class="col-3">
                <h5>Calories 123</h5>
            </div>
            <div class="col-3">
                <h5>Estimated Times: 30 Mins</h5>
            </div>
        </div>
    </a>

    <a href="" class="anchor">
        <div class="row align-items-center  p-3 mb-5 z">
            <div class="col-3">
                <img src="/image/welcome_photo.jpg" alt="">
            </div>
            <div class="col-3">
                <h5>Honey Chicken</h5>
                <br>
                <h5>Rating: 4.5</h5>
            </div>
            <div class="col-3">
                <h5>Calories 123</h5>
            </div>
            <div class="col-3">
                <h5>Estimated Times: 30 Mins</h5>
            </div>
        </div>
    </a>
</div>

@endsection

@extends('layouts.menu')
@section('page-content')


    <div class="row align-items-center justify-content-center mt-5 ">
        <div style="width: 35%;" class="text-center ">
            <h1 class="mb-5">Food Detail</h1>
        </div>
    </div>

    <div class="container d-flex justify-content-center my-5 border p-5" style="background-color : 	rgb(248, 191, 85);">
        <div class="row my-2 mx-2 main">
            <div class="col-md-6 mycol mb-4">
                <img src="/image/welcome_photo.jpg" width="300px" height="300px">
            </div>
            <div class="col-md-6 xcol">
                <h3>{{ $food->name }}</h3>
                <br>

                <h5>Description</h5>
                <p>{{ $food->description }}
                </p>

                <h5 class="mt-4">Ingredient:</h5>
                @foreach ($food->ingredients as $ingredient)
                    <p>
                        {{ $ingredient->ingredient_name }}
                    </p>
                @endforeach


                <h5>How to Make</h5>
                <p>
                    {{ $food->procedure }}
                </p>

                <div class="col-md-8 col-12 xcol">
                    <div class="form-group row mb-3">
                        <div class="col-md-3 col-form-label"></div>
                        <div class="col-md-8">
                            <a class="btn btn-warning btn-primary mt-4 mb-5" style="background-color : 	rgb(255, 167, 2);"
                                href="/find" type="submit">Back</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

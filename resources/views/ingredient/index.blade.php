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
            <h1 class="mb-5">All Ingredients</h1>
        </div>
    </div>

    <div class="container">
        <div class="col-4 d-flex justify-content-center">
            <div class="md-form active-pink-2 mb-3">
                @if (Auth::user()->role == 'Admin')
                    <a href="/createIngredient" class="btn btn-primary">Add New Ingredient</a>
                @endif
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Ingredient Name</th>
                    @if (Auth::user()->role == 'Admin')
                        <th scope="col">Function</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredients as $ingredient)
                    <tr>
                        <td>{{ $ingredient->ingredient_name }}</td>
                        @if (Auth::user()->role == 'Admin')
                            <td>
                                <form action="/deleteIngredient/{{ $ingredient->id }}" method="post">
                                    @csrf
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@endsection

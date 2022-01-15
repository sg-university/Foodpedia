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


    <div class="row align-items-center justify-content-center mt-5">
        <div style="width: 35%;" class="text-center rounded">
            <h1 class="mb-5">What's in your pantry?</h1>

        </div>
    </div>


    <form action="/find" method="get">
        @csrf
        <div class="row align-items-center justify-content-center mt-5">
            <div style="width: 35%;" class="text-center rounded">
                <div class="field_wrapper">
                    <div>
                        <a href="javascript:void(0);" class="mx-2 add_button btn btn-success" title="Add field">Add</a>
                        <input required type="text" name="field_name[]" value="" />
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-5">
            <button class="btn btn-primary" type="submit">Find Now!</button>
        </div>
    </form>


    <div class="container mt-5">

        @foreach ($foods as $food)

            <a href="/find/detail/{{ $food->id }}" class="anchor">
                <div class="row align-items-center p-3 mb-5 z">
                    <div class="col-3">
                        <img src="{{ $food->image }}" alt="">
                    </div>
                    <div class="col-3">
                        <h5>{{ $food->name }}</h5>
                        <br>
                        <h5>Rating : {{ $food->rating }}</h5>
                    </div>
                    <div class="col-3">
                        <h5>Calories : {{ $food->calories }}</h5>
                    </div>
                    <div class="col-3">
                        <h5>Estimated Times: {{ $food->duration }} Mins</h5>
                    </div>
                </div>
            </a>

        @endforeach




        <script type="text/javascript">
            $(document).ready(function() {
                var maxField = 20;
                var addButton = $('.add_button');
                var wrapper = $('.field_wrapper');
                var fieldHTML =
                    '<div class="mt-2"><input required type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="mx-2 remove_button btn btn-danger">Delete</a></div>';
                var x = 1;

                $(addButton).click(function() {
                    if (x < maxField) {
                        x++;
                        $(wrapper).append(fieldHTML);
                    }
                });

                $(wrapper).on('click', '.remove_button', function(e) {
                    e.preventDefault();
                    $(this).parent('div').remove();
                    x--;
                });
            });
        </script>

    @endsection

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


<form action="/find/result" method="post">
    <div class="row align-items-center justify-content-center mt-5">
        <div style="width: 35%;" class="text-center rounded">
            <div class="field_wrapper">
                <div>
                    <input type="text" name="field_name[]" value="" />
                    <a href="javascript:void(0);" class="add_button" title="Add field">Add</a>

                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center mt-5">
        <button type="submit">asdasdadsads</button>
    </div>
</form>


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


<script type="text/javascript">
    $(document).ready(function () {
        var maxField = 20;
        var addButton = $('.add_button');
        var wrapper = $('.field_wrapper');
        var fieldHTML =
            '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button">Delete</a></div>';
        var x = 1;

        $(addButton).click(function () {
            if (x < maxField) {
                x++;
                $(wrapper).append(fieldHTML);
            }
        });

        $(wrapper).on('click', '.remove_button', function (e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        });
    });

</script>

@endsection

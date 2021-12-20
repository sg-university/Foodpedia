@extends('layouts.menu')
@section('page-content')

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
        <button>asdasdadsads</button>
    </div>
</form>


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

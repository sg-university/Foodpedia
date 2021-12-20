@extends('layouts.menu')
@section('page-content')

<div class="row align-items-center justify-content-center mt-5">
    <div style="width: 35%;" class="text-center rounded">
        <h1 class="mb-5">Recipe Finder</h1>

        <a class="btn btn-warning shadow p-3 mb-5 rounded-pill" href="find/index" style="width: 50%">Find by Ingredient</a>
        <br>
        <a class="btn btn-warning shadow p-3 mb-5 rounded-pill" href="recommendation/index" style="width: 50%">Find by Recommendation</a>
    </div>
</div>
@endsection

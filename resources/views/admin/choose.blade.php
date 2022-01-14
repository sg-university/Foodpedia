@extends('layouts.menu')
@section('page-content')

<div class="row align-items-center justify-content-center mt-5">
    <div style="width: 35%;" class="text-center rounded">
        <h1 class="mb-5">Admin's Menu</h1>

        <a class="btn btn-warning shadow p-3 mb-5 rounded-pill" href="/food" style="width: 50%">Food Menu</a>
        <br>
        <a class="btn btn-warning shadow p-3 mb-5 rounded-pill" href="/ingredient" style="width: 50%">Ingredient Menu</a>
    </div>
</div>
@endsection

@extends('layouts.menu')
@section('page-content')
    <section class="gradient-custom">
        <div class=" py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 ">

                                <h2 class="fw-bold mb-2 text-uppercase">Create Ingredient</h2>

                                <form action="/createIngredient" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-outline form-white mb-4 mt-5">
                                        <input type="text" id="typeEmailX" name="ingredient_name"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="typeEmailX">Name</label>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Add</button>

                                </form>

                            </div>

                            <div>
                                <a href="/ingredient" class="text-white-50 fw-bold">Back</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            @endsection

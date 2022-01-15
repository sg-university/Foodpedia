@extends('layouts.menu')
@section('page-content')
<section class="vh-100 gradient-custom">
    <div class=" py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 ">
  
                <h2 class="fw-bold mb-2 text-uppercase">Create Food</h2>
                
                <form action="/createFood" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-outline form-white mb-4 mt-5">
                  <input type="text" id="typeEmailX" name="name" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Name</label>
                </div>

                <div class="form-outline form-white mb-4 mt-5">
                  <div class="field_wrapper">
                    <a href="javascript:void(0);" class="add_button btn btn-success" title="Add field">Add</a>

                    <select class="form-select form-control form-control-lg" aria-label="Default select example" name="field_name[]">
                      <option selected>Choose Ingredient</option>
                      @foreach ($ingredients as $ingredient)
                        <option value="{{ $ingredient->id}}">{{ $ingredient->ingredient_name}}</option>
                      @endforeach
                    </select>
                    <br>

                  </div>
                </div>

                <label class="form-label" for="typeEmailX">Ingredient</label>


                <div class="form-outline form-white mb-4">
                    <input type="text"  name="calories" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Calories</label>
                </div>
  
                <div class="form-outline form-white mb-4">
                    <input type="text"  name="rating" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Rating</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <input type="text"  name="duration" class="form-control form-control-lg" />
                    <label class="form-label" for="name">Duration</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="file"  name="image" class="form-control form-control-lg" />
                  <label class="form-label" for="name">Image</label>
              </div>

                <div class="form-outline form-white mb-4">
                    <textarea  class="form-control form-control-lg" name="description" id="" cols="30" rows="10"></textarea>
                    <label class="form-label" for="name">Description</label>
                </div>

                <div class="form-outline form-white mb-4">
                    <textarea  class="form-control form-control-lg" name="procedure" id="" cols="30" rows="10"></textarea>
                    <label class="form-label" for="name">Procedure</label>
                </div>
  
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Add</button>
  
                </form>

              </div>
  
              <div>
                <a href="/food" class="text-white-50 fw-bold">Back</a></p>
              </div>
  
            </div>
          </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
      var maxField = 20;
      var addButton = $('.add_button');
      var wrapper = $('.field_wrapper');
      var fieldHTML =
          '<div class="mt-3"><select class="form-select form-control form-control-lg" aria-label="Default select example" name="field_name[]">  <option selected>Choose Ingredient</option>@foreach ($ingredients as $ingredient)<option value="{{ $ingredient->id}}">{{ $ingredient->ingredient_name}}</option>@endforeach</select></div>';
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
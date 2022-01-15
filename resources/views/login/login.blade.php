<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Login</title>
</head>

<style>
    .gradient-custom {
        background: linear-gradient(to right, rgb(250, 123, 4), rgb(233, 177, 73))
    }

</style>

<body>
    <section class="gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

                                @if (session()->has('success'))
                                    {{ session('success') }}
                                @endif

                                <form action="/login" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-outline form-white mb-4 mt-5">
                                        <label class="form-label" for="typeEmailX">Email</label>
                                        <input type="email" id="typeEmailX" name="email"
                                            class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" name="password"
                                            class="form-control form-control-lg" />
                                    </div>


                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>

                            </div>

                            <div>
                                <p class="mb-0">Don't have an account? <a href="/register"
                                        class="text-white-50 fw-bold">Register</a></p>
                            </div>

                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                                crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-primary">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-white">
                        <div class="card-body p-5 text-center">
                            <h1 class="bi-hexagon-fill" style="color: blue"></h1>
                            <h2 class="fw-bold mb-2 text-uppercase text-dark">Employee Data Master</h2>
                            <br>
                            <br>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <hr style="color: black">
                                <div class="form-outline form-white mb-4">
                                    <input placeholder="Enter Your Email" id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-outline form-white mb-4">
                                    <input placeholder="Enter Your Password" id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <hr style="color: black">
                                <button type="submit" class="btn bg-primary btn-outline-dark btn-lg px-5 text-white">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    Log In
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>

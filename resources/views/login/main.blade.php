<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Pages || Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login/list.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    <div class="row">

        <div class="col-md-12 align-items-center d-flex justify-content-center">
            <div class="box">

                <div class="box_header">
                    <div class="box__header pt-2 d-flex justify-content-between">
                        <h4 class="ps-2 fw-bold pt-2 text-white">Welcome Admin!</h4>
                        <img src="{{ asset('assets/image/logo.png') }}" alt="Logo Login Page">
                    </div>

                </div>
                <div class="box_body">
                    @if (session('error'))
                        <div class="text-white alert alert-dismissible fade show rounded-0"
                            style="background-color: rgba(203, 19, 22, 0.7)" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('postlogin') }}" method="post">
                        @csrf
                        <div class="row d-flex justify-content-center">
                            <div class="col-md-11">
                                <div class="form-group pt-3">
                                    <label for="username" class="form-label text-light">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror"
                                        name="username" id="username" placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="form-group pt-3">
                                    <label for="password" class="form-label text-light">Password</label>
                                    <div class="box_input d-flex ">
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password">
                                        <button type="button" id="togglePassword" class="ic_password"><i
                                                class="bi bi-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center pt-5">
                            <button type="submit" class="btn btn-primary w-50">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/login/list.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
</body>

</html>

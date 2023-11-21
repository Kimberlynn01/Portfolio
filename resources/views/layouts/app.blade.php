<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} || Portfolio Danudiraja</title>
    <link rel="stylesheet" href="{{ asset('assets/css/layout/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.css" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-md-12 d-flex">
            <div class="sidebar">
                <div class="side_title ">
                    <h4 class="text-white title">Dashboard Portfolio</h4>
                </div>
                <div class="side_content">
                    <ul>
                        <li class="active">
                            <a href="{{ route('dashboard.index') }}"><i class="bi bi-house"></i> Dashboard</a>
                        </li>
                        <li class="pt-2">
                            <a href="{{ route('dashboard.index') }}"><i class="bi bi-journals"></i> Content</a>
                        </li>
                    </ul>
                </div>
                <div class="side_footer">
                    <a class="text-white" style="text-decoration: none" onclick="logout()">Logout <i
                            class="bi bi-box-arrow-right" style="color: rgba(255, 0, 0, 0.759)"></i></a>
                </div>
            </div>
            <div class="contents m-5">
                @yield('contents')
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/app/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.8/datatables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"
        integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @stack('scripts')
</body>

</html>

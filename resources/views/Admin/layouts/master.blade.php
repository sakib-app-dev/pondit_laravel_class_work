<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard Index</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/style.css') }}" />
    {{-- <link rel="stylesheet" href="assets/admin/css/style.css" /> --}}
</head>

<body>
@include('admin.layouts.inc.side-nav')
@include('admin.layouts.inc.top-nav')


{{-- dashoard --}}
    <!-- Main Wrapper -->
<div class=" my-container active-cont">
    <!-- Top Nav -->

    <!--End Top Nav -->

    <br>
    <br>


<div class="col-md-10">

    <div class="main-content">

@yield('content')
        

    </div>
</div>
</div>




        <!-- bootstrap js -->
        <script>
            var menu_btn = document.querySelector("#menu-btn");
            var sidebar = document.querySelector("#sidebar");
            var container = document.querySelector(".my-container");
            menu_btn.addEventListener("click", () => {
                sidebar.classList.toggle("active-nav");
                container.classList.toggle("active-cont");
            });
    
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
            crossorigin="anonymous"></script>
    </body>
    
    </html>
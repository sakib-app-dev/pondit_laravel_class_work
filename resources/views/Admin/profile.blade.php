<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard User Profile</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
    <!-- BOX ICONS CSS-->
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css" rel="stylesheet" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('/assets/admin/css/style.css') }}"" />
</head>

<body>
    <!-- Side-Nav -->
    <div class="zindex-modal-backdrop side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-info" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="index.html" class="nav-link h1 text-light my-2">
                Dashboard </br>
            </a>
            <a href="profile.html"><li href="" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Profile</span>
            </li></a>
            <a href="productlist.html"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product List</span>
            </li></a>

            <a href="addproduct.html"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product Add</span>
            </li></a>
            <a href="category.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Categpry</span>
            </li></a>
           <a href="categoryadd.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category Add</span>
            </li></a> 
           <a href="notification.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Notification</span>
            </li></a> 
            <a href="invoice.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Invoice</span>
            </li></a>
            <a href="userdetels.html"><li  class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">User Detels</span>
            </li></a>
        </ul>

        <span href="" class="nav-link h4 w-100 ">
            <a href=""><i class="bx bxl-instagram-alt text-danger"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 mx-5 text-danger"></i></a>
            <a href=""><i class="bx bxl-facebook text-danger mb-4"></i></a>
            <a href="login.html"><button type="submit" class="btn btn-secondary w-100 my-2">Log Out</button></a>
        </span>
       
    </div>
    <nav class="navbar top-navbar navbar-light bg-info m-0 px-5 sticky-top" style="height:80px ">
        <div class="input-group">
            <a href="index.html" class="nav-link h1 text-light ">
                Dashboard </br>
            </a>
            <input style="margin-left: 5rem; margin-right: 1rem;" type="search" class="form-control mt-2"
                placeholder="Search Product">
            <div class="input-group-">
                <button class="btn btn-secondary mt-2" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Wrapper -->
    <div class=" my-container active-cont">
        <!-- Top Nav -->

        <!--End Top Nav -->

        <br>
        <br>
        <div class="col-md-10">

            <div class="main-content">


                <div class="col-md-12 d-flex ">


                    <div class="col-md-5">
                        <div class="card p-3">
                            <div class=" w-100 ">
                                <img src="https://th.bing.com/th/id/R.8b167af653c2399dd93b952a48740620?rik=%2fIwzk0n3LnH7dA&pid=ImgRaw&r=0"
                                    class="w-100" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="card py-4">
                            <div class="card-body text-center">
                                <h3 class="py-5">Eon Musk</h3>
                                <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum,
                                    recusandae?</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center">
                    <a href="updateprofil.html"><Button type="submit" class="btn btn-success  ">Update Profile</Button></a>
                </div>
            </div>

        </div>
    </div>


    </div>
    </div>
    </div>
    </div>
    <!--Main Navigation-->

    <!--Main layout-->


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

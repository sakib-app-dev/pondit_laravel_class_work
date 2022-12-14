<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashoard Product Show</title>
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
            <input style="margin-left: 5rem; margin-right: 1rem;" type="search" class="form-control mt-2" placeholder="Search Product">
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
        <div class="col-md-12">

            <div class="main-content">

                <div class="col-lg-12 d-flex sticky-top my-5">
                    <div class="col-lg-3 mt-2  p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Sneakers</a>
                    </div>
                    <div class="col-lg-3 mt-2 p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Shirt &
                            T-Shirt</a>
                    </div>
                    <div class="col-lg-3 mt-2 p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Cosmitics
                            &amp; Fashion</a>
                    </div>
                    <div class="col-lg-3 mt-2 p-2">
                        <a href="#" class="btn btn-tag btn-rounded bg-success text-light" data-mdb-close="true" style="">
                            <i class="fas fa-layer-group me-2 hover-overlay hover-zoom hover-shadow ripple"></i> Electricital
                            &amp; Mationary</a>
                    </div>
                </div>
                <h2 class="text-light bg-info p-2 text-center">Shart & T-Shart</h2>

                <div class="col-md-12 d-flex">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.URk0KKK2K-q8dIW2G0PLogAAAA?w=177&h=180&c=7&r=0&o=5&pid=1.7"
                                    alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???200</h3>
                                <div class="bg-success text-light btn">EDIT Now</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th?q=Shart+T-Shirt&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=BD&setlang=en&adlt=moderate&t=1&mw=247"
                                    alt="" height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???180</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.k8-yrM_Vx1J8lFzOolXNFAHaIY?w=145&h=180&c=7&r=0&o=5&pid=1.7"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???100</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.za1FIlYBF_9cvvNDMha8rQHaHa?w=189&h=187&c=7&r=0&o=5&pid=1.7"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???80</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.URk0KKK2K-q8dIW2G0PLogAAAA?w=177&h=180&c=7&r=0&o=5&pid=1.7"
                                    alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???200</h3>
                                <div class="bg-success text-light btn">EDIT Now</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th?q=Shart+T-Shirt&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=BD&setlang=en&adlt=moderate&t=1&mw=247"
                                    alt="" height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???180</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.k8-yrM_Vx1J8lFzOolXNFAHaIY?w=145&h=180&c=7&r=0&o=5&pid=1.7"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???100</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.za1FIlYBF_9cvvNDMha8rQHaHa?w=189&h=187&c=7&r=0&o=5&pid=1.7"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???80</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.URk0KKK2K-q8dIW2G0PLogAAAA?w=177&h=180&c=7&r=0&o=5&pid=1.7"
                                    alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???200</h3>
                                <div class="bg-success text-light btn">EDIT Now</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th?q=Shart+T-Shirt&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=BD&setlang=en&adlt=moderate&t=1&mw=247"
                                    alt="" height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???180</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.k8-yrM_Vx1J8lFzOolXNFAHaIY?w=145&h=180&c=7&r=0&o=5&pid=1.7"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???100</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://th.bing.com/th/id/OIP.za1FIlYBF_9cvvNDMha8rQHaHa?w=189&h=187&c=7&r=0&o=5&pid=1.7"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???80</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-light bg-info p-2 text-center">Sneakers</h2>

                <div class="col-md-12 d-flex">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/e24a363be033f9ce2817360ddd8c160e.jpg" alt=""
                                    height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???300</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/d26d4c8570e0742ff16481cb400b5987.jpg" alt=""
                                    height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???700</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/03b84d80d38a1221afe67d7609a2ba80.jpg" height="180px"
                                    alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???800</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/5f1f236dab6282e01bd5f33ab0a71e49.jpg_200x200q80-product.jpg_.webp"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???250</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/e24a363be033f9ce2817360ddd8c160e.jpg" alt=""
                                    height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???300</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/d26d4c8570e0742ff16481cb400b5987.jpg" alt=""
                                    height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???700</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/03b84d80d38a1221afe67d7609a2ba80.jpg" height="180px"
                                    alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???800</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/5f1f236dab6282e01bd5f33ab0a71e49.jpg_200x200q80-product.jpg_.webp"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???250</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 d-flex">
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/e24a363be033f9ce2817360ddd8c160e.jpg" alt=""
                                    height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???300</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/d26d4c8570e0742ff16481cb400b5987.jpg" alt=""
                                    height="180px">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???700</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/03b84d80d38a1221afe67d7609a2ba80.jpg" height="180px"
                                    alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???800</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <img class="fs-card-img"
                                    src="https://static-01.daraz.com.bd/p/5f1f236dab6282e01bd5f33ab0a71e49.jpg_200x200q80-product.jpg_.webp"
                                    height="180px" alt="">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                                <h3 class="text-danger">???250</h3>
                                <div class="bg-success text-light btn">EDIT NOW</div>
        
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-body text-center">
                <BUtton type="submit" class="btn btn-success p-3 "><a class="h5" href="addproduct.html">Add New Product</a></BUtton>
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


    <!-- Side-Nav -->
    <div class="zindex-modal-backdrop side-navbar active-nav d-flex justify-content-between flex-wrap flex-column bg-info" id="sidebar">
        <ul class="nav flex-column text-white w-100">
            <a href="{{ route('admin') }}" class="nav-link h1 text-light my-2">
                Dashboard <br>
            </a>
            <a href="{{ ROUTE('profile') }}"><li href="" class="nav-link">
                <i class="bx bx-user-check"></i>
                <span class="mx-2">Profile</span>
            </li></a>
             
            <a href="{{ route('addCategory') }}"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Add Category</span>
            </li></a>
            <a href="{{ route('listCategory') }}"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category List</span>
            </li></a>
            <a href="{{ route('addProduct') }}"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Add Product</span>
            </li></a>
            <a href="{{ route('listProduct') }}"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product List</span>
            </li></a>

            <!-- <a href="addproduct.html"><li href="" class="nav-link">
                <i class="bx bxs-dashboard"></i>
                <span class="mx-2">Product Add</span>
            </li></a> -->
            
           <!-- <a href="categoryadd.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Category Add</span>
            </li></a>  -->
           <a href="{{ route('notification') }}"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Notification</span>
            </li></a> 
            <!-- <a href="invoice.html"><li href="" class="nav-link">
                <i class="bx bx-conversation"></i>
                <span class="mx-2">Invoice</span>
            </li></a> -->
           
        </ul>

        <span href="" class="nav-link h4 w-100 ">
            <!-- <a href=""><i class="bx bxl-instagram-alt text-danger"></i></a>
            <a href=""><i class="bx bxl-twitter px-2 mx-5 text-danger"></i></a>
            <a href=""><i class="bx bxl-facebook text-danger mb-4"></i></a> -->
            <a href="login.html"><button type="submit" class="btn btn-secondary w-100 my-2">Log Out</button></a>
        </span>
       
    </div>
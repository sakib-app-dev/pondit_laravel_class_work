<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view ('admin.index');
    }
    public function profile(){
        return view ('admin.profile');
    }
    public function notification(){
        return view ('admin.notification');
    }


    // product
    public function addProduct(){
        return view ('admin.product-add');
    }
    public function productList(){
        return view ('admin.product-list');
    }
    public function productShow(){
        return view ('admin.product-show');
    }
    public function productEdit(){
        return view ('admin.product-edit');
    }


    // category
    public function addCategory(){
        return view ('admin.category-add');
    }
    public function categoryList(){
        return view ('admin.category-list');
    }
    public function categoryShow(){
        return view ('admin.category-show');
    }
    public function categoryEdit(){
        return view ('admin.category-edit');
    }

}

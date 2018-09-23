<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Products;

class ProductsController extends Controller
{
    public function getDanhSach()
    {
    	
    	return view('admin.products.danhsach');
    }

    public function getThem()
    {
    	
    }

    public function getSua()
    {
    	
    }
}

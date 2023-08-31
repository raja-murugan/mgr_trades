<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Session;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('page.frontend.index');
    }

    public function about()
    {
        return view('page.frontend.about');
    }

    public function product()
    {
        $brand = Session::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.product', compact('brand'));
    }

    public function productdetails($id)
    {
        $category = Category::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();
        $product = Product::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();

        return view('page.frontend.product_details', compact('category', 'product'));
    }

    public function contact()
    {
        return view('page.frontend.contact');
    }
}

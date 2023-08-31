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
        $brand = Session::where('soft_delete', '!=', 1)->get()->random(3);

        return view('page.frontend.index', compact('brand'));
    }

    public function about()
    {
        return view('page.frontend.about');
    }

    public function product()
    {
        $product = Product::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.product', compact('product'));
    }

    public function productdetails($id)
    {
        $brandname = Session::where('id', '=', $id)->get();
        $category = Category::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();
        $product = Product::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();

        return view('page.frontend.product_details', compact('category', 'product', 'brandname'));
    }

    public function contact()
    {
        return view('page.frontend.contact');
    }

    public function brand()
    {
        $brand = Session::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.brand', compact('brand'));
    }
}

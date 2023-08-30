<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $category = Category::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.product', compact('category'));
    }

    public function productdetails()
    {
        $brand = Session::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.product_details', compact('brand'));
    }

    public function contact()
    {
        return view('page.frontend.contact');
    }
}

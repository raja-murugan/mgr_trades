<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Session;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        $brand = Session::where('soft_delete', '!=', 1)->get();
        $category = Category::where('soft_delete', '!=', 1)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();

        $Session = Session::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.index', compact('brand', 'category', 'Session', 'subcategory'));
    }

    public function about()
    {
        $category = Category::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.about', compact('category'));
    }

    public function product()
    {
        $category = Category::where('soft_delete', '!=', 1)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();
        $varient = Product::where('soft_delete', '!=', 1)->get();

        

        return view('page.frontend.product', compact('subcategory', 'varient', 'category'));
    }

    public function productdetails($id)
    {
        $category = Category::where('soft_delete', '!=', 1)->get();
        $brandname = Session::where('id', '=', $id)->get();
        $categorys = Category::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();
        $product = Product::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.product_details', compact('categorys', 'product', 'brandname', 'category', 'subcategory'));
    }

    public function contact()
    {
        $category = Category::where('soft_delete', '!=', 1)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.contact', compact('category', 'subcategory'));
    }

    public function brand()
    {
        $brand = Session::where('soft_delete', '!=', 1)->get();
        $category = Category::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.brand', compact('brand', 'category'));
    }
}

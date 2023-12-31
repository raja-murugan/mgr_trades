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
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.about', compact('category', 'subcategory'));
    }

    public function product()
    {
        $category = Category::where('soft_delete', '!=', 1)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();
        $varient = Product::where('soft_delete', '!=', 1)->where('show_on', '!=', 0)->get();

        return view('page.frontend.product', compact('subcategory', 'varient', 'category'));
    }

    public function productdetails($id)
    {
        $brandname = Session::where('id', '=', $id)->get();
        $categorys = Category::where('soft_delete', '!=', 1)->where('id', '=', $id)->get('name');
        // $product = Product::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();

        $category = Category::where('soft_delete', '!=', 1)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->where('category_id', '=', $id)->get();
        $varient = Product::where('soft_delete', '!=', 1)->where('show_on', '!=', 0)->get();

        // dd($categorys);

        return view('page.frontend.product_details', compact('brandname', 'category', 'subcategory', 'varient', 'categorys'));
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
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.brand', compact('brand', 'category', 'subcategory'));
    }
}

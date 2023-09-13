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

        return view('page.frontend.index', compact('brand', 'category'));
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
        foreach ($subcategory as $key => $subcategorys) {
        $varient = Product::where('subcategory_id', '=', $subcategorys->id)->where('soft_delete', '!=', 1)->get();
        }

        return view('page.frontend.product', compact('subcategory', 'varient', 'category'));
    }

    public function productdetails($id)
    {
        $category = Category::where('soft_delete', '!=', 1)->get();
        $brandname = Session::where('id', '=', $id)->get();
        $categorys = Category::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();
        $product = Product::where('soft_delete', '!=', 1)->where('session_id', '=', $id)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.product_details', compact('categorys', 'product', 'brandname', 'category'));
    }

    public function contact()
    {
        $category = Category::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.contact', compact('category'));
    }

    public function brand()
    {
        $brand = Session::where('soft_delete', '!=', 1)->get();
        $category = Category::where('soft_delete', '!=', 1)->get();

        return view('page.frontend.brand', compact('brand', 'category'));
    }
}

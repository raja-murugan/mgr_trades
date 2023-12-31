<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Session;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use PDF;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::where('soft_delete', '!=', 1)->get();
        $session = Session::where('soft_delete', '!=', 1)->get();
        $category = Category::where('soft_delete', '!=', 1)->get();
        $subcategory = Subcategory::where('soft_delete', '!=', 1)->get();
        return view('page.backend.product.index', compact('data', 'session', 'category', 'subcategory'));
    }


    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Product();
        $random_no =  rand(100,999);

        $data->unique_key = $randomkey;
        $data->name = $request->get('name');
        $data->note = $request->get('note');
        $data->price = $request->get('price');
        $data->counter_price = $request->get('counter_price');
        $data->customer_price = $request->get('customer_price');
        // $data->category_id = $request->get('category_id');
        $data->show_on = $request->get('show_on');
        $data->subcategory_id = $request->get('subcategory_id');

        if ($request->productimage != "") {
            $productimage = $request->productimage;
            $filename_one = $random_no . '.' . $productimage->getClientOriginalExtension();
            $request->productimage->move('assets/product', $filename_one);
            $data->image = $filename_one;
        }

        $data->save();


        return redirect()->route('product.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $ProductData = Product::where('unique_key', '=', $unique_key)->first();

        $random_no =  rand(100,999);

        $ProductData->name = $request->get('name');
        $ProductData->note = $request->get('note');
        $ProductData->price = $request->get('price');
        $ProductData->counter_price = $request->get('counter_price');
        $ProductData->customer_price = $request->get('customer_price');
        // $ProductData->category_id = $request->get('category_id');
        $ProductData->subcategory_id = $request->get('subcategory_id');
        $ProductData->show_on = $request->get('show_on');


        if ($request->productimage != "") {
            $productimage = $request->productimage;
            $filename_one = $random_no . '.' . $productimage->getClientOriginalExtension();
            $request->productimage->move('assets/product', $filename_one);
            $ProductData->image = $filename_one;
        } else {
            $Insertedproof_image_one = $ProductData->image;
            $ProductData->image = $Insertedproof_image_one;
        }

        $ProductData->update();

        return redirect()->route('product.index')->with('info', 'Updated !');
    }



    public function delete($unique_key)
    {
        $data = Product::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('product.index')->with('warning', 'Deleted !');
    }


    public function getcategories()
    {
        $productsession_id = request()->get('productsession_id');

        $GetCategory = Category::select('*')
                ->where('session_id', '=', $productsession_id)
                ->get();

        foreach ($GetCategory as $key => $GetCategories) {
            $output[] = array(
                'id' => $GetCategories->id,
                'name' => $GetCategories->name
            );
        }
        if (isset($output) & !empty($output)) {
            echo json_encode($output);
        }else{
            echo json_encode(
                array('status' => 'false')
            );
        }
    }


    public function checkduplicate(Request $request)
    {
        if(request()->get('query'))
        {
            $query = request()->get('query');
            $productsession_id = request()->get('productsession_id');
            $productcategory_id = request()->get('productcategory_id');

            $ProductData = Product::where('name', '=', $query)->where('session_id', '=', $productsession_id)->where('category_id', '=', $productcategory_id)->first();

            $userData['data'] = $ProductData;
            echo json_encode($userData);
        }
    }

}

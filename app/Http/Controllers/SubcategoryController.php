<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    public function index()
    {
        $data = Subcategory::where('soft_delete', '!=', 1)->get();
        $category = Category::where('soft_delete', '!=', 1)->get();
        return view('page.backend.subcategory.index', compact('data', 'category'));
    }

    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Subcategory();

        $data->unique_key = $randomkey;
        $data->name = $request->get('name');
        $data->category_id = $request->get('category_id');

        if ($request->productimage != "") {
            $productimage = $request->productimage;
            $filename_one = $randomkey . '_' . '.' . $productimage->getClientOriginalExtension();
            $request->productimage->move('assets/subcategory', $filename_one);
            $data->image = $filename_one;
        }

        $data->save();


        return redirect()->route('subcategory.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $CategoryData = Subcategory::where('unique_key', '=', $unique_key)->first();

        $CategoryData->name = $request->get('name');
        $CategoryData->category_id = $request->get('category_id');

        if ($request->productimage != "") {
            $productimage = $request->productimage;
            $filename_one = $unique_key . '_' . '.' . $productimage->getClientOriginalExtension();
            $request->productimage->move('assets/subcategory', $filename_one);
            $CategoryData->image = $filename_one;
        } else {
            $Insertedproof_image_one = $CategoryData->image;
            $CategoryData->image = $Insertedproof_image_one;
        }

        $CategoryData->update();

        return redirect()->route('subcategory.index')->with('info', 'Updated !');
    }



    public function delete($unique_key)
    {
        $data = Subcategory::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('subcategory.index')->with('warning', 'Deleted !');
    }
}

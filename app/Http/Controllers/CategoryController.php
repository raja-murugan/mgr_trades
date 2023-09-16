<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use PDF;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::where('soft_delete', '!=', 1)->get();
        $session = Session::where('soft_delete', '!=', 1)->get();
        return view('page.backend.category.index', compact('data', 'session'));
    }

    public function store(Request $request)
    {
        $randomkey = Str::random(5);

        $data = new Category();

        $data->unique_key = $randomkey;
        $data->name = $request->get('name');
        $data->note = $request->get('note');
        $data->session_id = $request->get('session_id');

        if ($request->productimage != "") {
            $productimage = $request->productimage;
            $filename_one = $data->name . '_' . $randomkey . '_' . '.' . $productimage->getClientOriginalExtension();
            $request->productimage->move('assets/category', $filename_one);
            $data->image = $filename_one;
        }

        $data->save();


        return redirect()->route('category.index')->with('message', 'Added !');
    }


    public function edit(Request $request, $unique_key)
    {
        $CategoryData = Category::where('unique_key', '=', $unique_key)->first();

        $CategoryData->name = $request->get('name');
        $CategoryData->note = $request->get('note');
        $CategoryData->session_id = $request->get('session_id');

        if ($request->productimage != "") {
            $productimage = $request->productimage;
            $filename_one = $CategoryData->name . '_' . $unique_key . '_' . '.' . $productimage->getClientOriginalExtension();
            $request->productimage->move('assets/category', $filename_one);
            $CategoryData->image = $filename_one;
        } else {
            $Insertedproof_image_one = $CategoryData->image;
            $CategoryData->image = $Insertedproof_image_one;
        }

        $CategoryData->update();

        return redirect()->route('category.index')->with('info', 'Updated !');
    }



    public function delete($unique_key)
    {
        $data = Category::where('unique_key', '=', $unique_key)->first();

        $data->soft_delete = 1;

        $data->update();

        return redirect()->route('category.index')->with('warning', 'Deleted !');
    }
}

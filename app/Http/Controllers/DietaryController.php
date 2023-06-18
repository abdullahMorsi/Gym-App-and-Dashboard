<?php

namespace App\Http\Controllers;

use App\Models\Dietary;
use Illuminate\Http\Request;

class DietaryController extends Controller
{

    public function indexFront()
    {
        $wheyprotein = Dietary::where('category', 'WHEY PROTEIN')->get();
        $creatine = Dietary::where('category', 'CREATINE')->get();
        $glutamine = Dietary::where('category', 'GLUTAMINE')->get();
        return view('dietary', ["wheyprotein"=>$wheyprotein, "creatine"=>$creatine, "glutamine"=>$glutamine]);
    }

    public function index()
    {
        $dietary = Dietary::all();
        return view('admin.dietary-index', ["dietary"=>$dietary]);
    }

    public function create()
    {
        $categories = Dietary::distinct()->pluck('category');

        return view('admin.dietary-create', ["categories"=>$categories]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'category'=>'required'
        ]);

        $thumbnail = $request->thumbnail;
        $newPhotoPath = time().$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('/images'), $newPhotoPath);

        $attributes['thumbnail'] = '/images/'.$newPhotoPath;

        Dietary::create($attributes);
        return redirect('/admin/dietary')->with('success', 'Item Added Successfully');
    }


    public function edit(Dietary $dietary)
    {
        $categories = Dietary::distinct()->pluck('category');
        return view("admin.dietary-edit", ["dietary"=>$dietary, "categories"=>$categories]);
    }


    public function update(Request $request, Dietary $dietary)
    {
        $attributes = request()->all();

        if ($request->has('thumbnail')){
            $thumbnail = $request->thumbnail;
            $newPhotoPath = time().$thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('/images'), $newPhotoPath);
            $attributes['thumbnail'] = '/images'.$newPhotoPath;
        }
        $dietary->update($attributes);
        return redirect('/admin/dietary');
    }

    public function destroy(Dietary $dietary)
    {
        $dietary->forceDelete();
        return redirect("/admin/dietary");
    }
}

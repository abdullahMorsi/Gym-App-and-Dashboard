<?php

namespace App\Http\Controllers;

use App\Models\nutrition;
use Illuminate\Http\Request;

class NutritionController extends Controller
{
    public function indexFront()
    {
        $nutritions = Nutrition::all();
        return view('nutrition', ["nutrition"=>$nutritions]);
    }

    public function index()
    {
        $nutritions = Nutrition::all();
        return view('admin.nutrition-index', ["nutritions"=>$nutritions]);
    }
    public function create()
    {
        return view("admin.nutrition-create");
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'description'=>'required',
            'thumbnail'=>'required'
        ]);

        $thumbnail = $request->thumbnail;
        $newPhotoPath = time().$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('/uploads/nutrition'), $newPhotoPath);

        $attributes['thumbnail'] = '/uploads/nutrition/'.$newPhotoPath;

        Nutrition::create($attributes);
        return redirect('/admin/nutrition')->with('success', 'Item Added Successfully');
    }
    public function edit(nutrition $nutrition)
    {
        return view("admin.nutrition-edit", ["nutrition"=>$nutrition]);
    }
    public function update(Request $request, nutrition $nutrition)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        if ($request->has('thumbnail')){
            $thumbnail = $request->thumbnail;
            $newPhotoPath = time().$thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('uploads/nutrition'), $newPhotoPath);
            $attributes['thumbnail'] = 'uploads/nutrition/'.$newPhotoPath;
        }
        $nutrition->update($attributes);
        return redirect('/admin/nutrition');
    }
    public function destroy(nutrition $nutrition)
    {
        $nutrition->forceDelete();
        return redirect("/admin/nutrition");

    }
}

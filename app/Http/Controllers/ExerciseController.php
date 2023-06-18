<?php

namespace App\Http\Controllers;

use App\Models\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    //Admin Dashboard
    public function index()
    {
        $exercises = Exercise::all();
        return view('admin.exercise-index', ["exercises"=>$exercises]);
    }
    public function create()
    {
        $categories = Exercise::distinct()->pluck('category');

        return view('admin.exercise-create', ["categories"=>$categories]);
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required'
        ]);

        $thumbnail = $request->thumbnail;
        $newPhotoPath = time().$thumbnail->getClientOriginalName();
        $thumbnail->move(public_path('/images'), $newPhotoPath);

        $attributes['thumbnail'] = '/images/'.$newPhotoPath;

        Exercise::create($attributes);
        return redirect('/admin/exercise')->with('success', 'Item Added Successfully');
    }


    public function edit(Exercise $exercise)
    {
        $categories = Exercise::distinct()->pluck('category');
        return view("admin.exercise-edit", ["exercise"=>$exercise, "categories"=>$categories]);
    }


    public function update(Request $request, Exercise $exercise)
    {
        $attributes = request()->all();

        if ($request->has('thumbnail')){
            $thumbnail = $request->thumbnail;
            $newPhotoPath = time().$thumbnail->getClientOriginalName();
            $thumbnail->move(public_path('/images'), $newPhotoPath);
            $attributes['thumbnail'] = '/images'.$newPhotoPath;
        }
        $exercise->update($attributes);
        return redirect('/admin/exercise');
    }

    public function destroy(Exercise $exercise)
    {
        $exercise->forceDelete();
        return redirect("/admin/exercise");
    }
    //Front Website
    public function leg()
    {
        $exercise = Exercise::where('category', 'leg')->get();
        return view('leg', ["exercise"=>$exercise]);
    }
    public function chest()
    {
        $exercise = Exercise::where('category', 'chest')->get();
        return view('chest', ["exercise"=>$exercise]);
    }
    public function hand()
    {
        $exercise = Exercise::where('category', 'hand')->get();
        return view('hand', ["exercise"=>$exercise]);
    }
    public function back()
    {
        $exercise = Exercise::where('category', 'back')->get();
        return view('back', ["exercise"=>$exercise]);
    }
    public function stomach()
    {
        $exercise = Exercise::where('category', 'stomach')->get();
        return view('stomach', ["exercise"=>$exercise]);    }
    public function shoulder()
    {
        $exercise = Exercise::where('category', 'shoulder')->get();
        return view('shoulder', ["exercise"=>$exercise]);
    }


}

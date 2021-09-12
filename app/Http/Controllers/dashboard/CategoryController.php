<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.categories.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                ->with('warning', $validator->messages()->all()[0]);
        } else {
            foreach ($request->category as $category) {
                Category::create([
                    'slug' => Str::slug($category),
                    'name' => $category,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Data has been created');
    }
}

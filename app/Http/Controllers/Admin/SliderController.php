<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.pages.slider.index');
    }

    public function create()
    {
        return view('admin.pages.slider.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $slider = Slider::create($input);
        if ($request->hasFile('image')) {
            return $slider->createImages([$request->file('image')], 'images');
        }
        return response()->json([
            'message' => 'Create slider successful'
        ]);
    }

    public function edit(Slider $slider)
    {
        return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(Slider $slider, Request $request)
    {
        $input = $request->except('image');
        if ($request->hasFile('image')) {
            return $slider->createImages([$request->file('image')], 'images');
        }
        $slider = $slider->update($input);
        return response()->json([
            'message' => 'Update slider successful'
        ]);
    }

    public function paginate(Request $request)
    {
        $sliders = Slider::query();
        $type = $request->type;
        if ($type) $sliders = $sliders->where('type', $type);
        return DataTables::of($sliders)
            ->addColumn('action', function ($slider) {
                return view('admin.pages.slider.components.action', compact('slider'));
            })
            ->editColumn('image', function ($slider) {
                return view('admin.pages.slider.components.image', compact('slider'));
            })->make(true);
    }
}

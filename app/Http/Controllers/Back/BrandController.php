<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::paginate(10);

        return view('back.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();

        return view('back.brands.create', [
            'brands' => $brands
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'title' => ['required', 'string', 'max:255'],
                'logo_url' => ['required'],
            ]
        );

        if ($request->logo_url) {
            $imageName = time() . '_' . $request->logo_url->getClientOriginalName();
            $imagePath = $request->logo_url->storeAs('logosMarques', $imageName, 'public');

            $request->logo_url = 'storage/' . $imagePath;
        }

        Brand::create(
            [
                'title' => $request->title,
                'logo_url' => $request->logo_url,
                'slug' => Str::slug($request->title),
            ]
        );

        return redirect()->route('admin.brands.index')->with('status', 'Marque cree');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        return view('back.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('back.brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate(
            $request,
            [
                'title' => ['required', 'string', 'max:255'],
                'logo_url' => ['required'],
            ]
        );

        if ($request->logo_url) {
            $imageName = time() . '_' . $request->logo_url->getClientOriginalName();
            $imagePath = $request->logo_url->storeAs('logosMarques', $imageName, 'public');

            $request->logo_url = 'storage/' . $imagePath;
        }


        $brand->update(
            [
                'title' => $request->title,
                'logo_url' => $request->logo_url,
                'slug' => Str::slug($request->title),
            ]
        );

        return redirect()->route('admin.brands.index')->with('status', 'Marque modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back()->with('status', 'Marque ' . $brand->title . 'supprimée');
    }
}

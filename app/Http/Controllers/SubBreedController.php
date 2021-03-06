<?php

namespace App\Http\Controllers;

use App\Models\SubBreed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SubBreedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubBreed  $subBreed
     * @return \Illuminate\Http\Response
     */
    public function show(SubBreed $subBreed)
    {
        $images = [];
        $images_uri = "https://dog.ceo/api/breed/" . $subBreed->breed->name . "/" . $subBreed->category->name . "/images/random/6";
        $request = Http::get($images_uri);
        if ($request->ok()) {
            $images = $request['message'];
        }
        return view('subbreeds/subbreed_detail', ["subBreed" => $subBreed, "images" => $images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubBreed  $subBreed
     * @return \Illuminate\Http\Response
     */
    public function edit(SubBreed $subBreed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubBreed  $subBreed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubBreed $subBreed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubBreed  $subBreed
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubBreed $subBreed)
    {
        //
    }
}

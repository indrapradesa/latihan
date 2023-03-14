<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // mengecek user login apa belum, check menghasilkan true ketika sudah login, maka di depan di tambah not/!
        // if(!auth()->check() || auth()->user()->username !== 'rahimah.margana'){
        //     abort(403);
        // }

        // guest bernilai true jika belum login
        // if(auth()->guest() || auth()->user()->username !== 'rahimah.margana'){
        //     abort(403);
        // }

        // if(auth()->user()->username !== 'rahimah.margana') {
        //     abort(403);
        // }

        $this->authorize('is_admin');

        return view('dashboard.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $Category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $Category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $Category)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\pembuat;
use Illuminate\Http\Request;

class PembuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pembuat', ['type_menu' => 'daftar_pembuat']);
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
    public function show(pembuat $pembuat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pembuat $pembuat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, pembuat $pembuat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pembuat $pembuat)
    {
        //
    }
}

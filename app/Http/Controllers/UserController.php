<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return " This is Index method of Resource Controller ";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return " This is Create method of Resource Controller ";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return " This is Store method of Resource Controller ";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

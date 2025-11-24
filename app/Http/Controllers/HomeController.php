<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() : \Illuminate\Contracts\View\View
    {
        $count = 1000;
        $items = collect(range(1, $count))->map(function ($number) {
            return "Item {$number}";
        });

        return view('test-index', [
            'items' => $items
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
    public function show(test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(test $test)
    {
        //
    }
}

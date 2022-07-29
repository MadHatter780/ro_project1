<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        return view('barang.index');
    } //

    public function store(Request $request)
    {
        dd($request);
        return back();
    } //

    public function edit($id)
    {
        return back();
    } //

    public function delete($id)
    {
        return back();
    } //
}

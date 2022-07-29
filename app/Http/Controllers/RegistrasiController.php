<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrasiController extends Controller
{
    public function saveFile($file)
    {
        $ext = $file->getClientOriginalExtension();
        $namaFile = rand() . time() . "." . $ext;
        $path = $file->move('user/', $namaFile);
        $path = str_replace("\\", "/", $path);

        return $path;
    }

    public function index()
    {
        return view('register.register');
    } //

    public function store(Request $request)
    {
        $data = $request->all();
        $data['role'] = '3';
        if ($request->hasFile('image')) {
            $data['image'] = $this->saveFile($request->file('image'));
        }
        $data['password'] =  Hash::make($request->password);
        $user = new User;
        $user->fill($data)->save();
        return redirect()->route('login.index');
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
    } //
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bagian;
use Illuminate\Support\Facades\Validator;

class BagianController extends Controller
{
    public function index()
    {
        // ambil semua form dari model
        $bagians = Bagian::latest()->get();

        // return view dari data
        return view('bagians', compact('bagians'));
    }



    public function store(Request $request)
    {
        //define validation rules
        $validator = Validator::make($request->all(), [
            'nama'     => 'required',
            'bagian'   => 'required',
        ]);

        //check if validation fails
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        //create post
        $bagian = Bagian::create([
            'nama'     => $request->nama,
            'bagian'   => $request->bagian
        ]);

        //return response
        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Disimpan!',
            'data'    => $bagian
        ]);
    }
}

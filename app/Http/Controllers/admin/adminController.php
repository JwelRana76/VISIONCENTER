<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function check(Request $request)
    {
        $name = $request->input('name');
        $password = Hash::make($request->input('password'));
        // $creds = $request->only(input('name'),input('password'));
        $login = Admin::where('name',$name)->orWhere('password',$password)->first();
        if ($login) {
            return response()->json([
                'status' =>400,
                'success' =>'Authentication success',
            ]);
        }else{
            return response()->json([
                'status' =>400,
                'errors' =>'Authentication Failed',
            ]);
        }
    }
}

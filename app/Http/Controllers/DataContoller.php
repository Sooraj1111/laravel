<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;


use function GuzzleHttp\Promise\all;

class DataContoller extends Controller
{
    public function index(Request $request){
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->make(true);
        }
        return view('data_table.users');
    }
}

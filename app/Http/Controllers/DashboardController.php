<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.list', [
            'title' => 'Dashboard'
        ]);
    }

    public function data()
    {
        $data = Content::select('id', 'nama' , 'gambar')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}

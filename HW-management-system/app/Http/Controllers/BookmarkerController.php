<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmarker;

class BookmarkerController extends Controller
{
    public function index(Request $request)
    {
        $bookmarkers = Bookmarker::all();
        return view('bookmarker.index', ['bookmarkers' => $bookmarkers]);
    }
}


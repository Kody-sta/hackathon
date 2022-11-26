<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bookmarker;

class BookmarkerController extends Controller
{
    // ブックマーク一覧にデータベースの値を表示できるようにする処理
    public function index(Request $request)
    {
        // bookmarksのデータベースを取得
        $bookmarkers = Bookmarker::all();

        // viewに返す
        return view('bookmarker.index', ['bookmarkers' => $bookmarkers]);
    }
}

<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Requests\BooksRequest;
use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;

class ApiBooksController extends Controller
{
    public function all(Request $request)
    {
        $data = Books::latest()->get();
        if($data)
            return ResponseFormatter::success($data, 'Data buku berhasil diambil');
        else
            return ResponseFormatter::error(null, 'Data buku tidak ada', 404);
    }
}
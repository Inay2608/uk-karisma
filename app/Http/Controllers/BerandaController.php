<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Produk;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::all();
        return view('dashboard/beranda', compact('data'));
    }

    public function detail(string $id){
        $data = Post::find($id);
        $produk = Produk::where('kategori_id', $data->kategori_id)->paginate(3);
        
        return view('dashboard/detail', compact('data', 'produk'));
    }
}

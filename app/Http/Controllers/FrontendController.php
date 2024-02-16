<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Iklan;
use App\Models\Kategori;
use App\Models\Slide;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index() {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();

        return view('front.home', [
            'kategori' => $kategori,
            'artikel' => $artikel,
            'slide' => $slide,
        ]);
    }

    public function detail($slug) {
        $kategori = Kategori::all();
        $artikel = Artikel::where('slug', $slug)->first();
        $iklanA = Iklan::where('id', '1')->first();
        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit('5')->get();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'kategori' => $kategori,
            'iklanA' => $iklanA,
            'postinganTerbaru' => $postinganTerbaru,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $playlist = Playlist::all();

        return view('back.playlist.index', compact('playlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('back.playlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'judul_playlist' => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_playlist);
        $data['user_id'] = Auth::id();
        $data['gambar_playlist'] = $request->file('gambar_playlist')->store('playlist');

        Playlist::create($data);

        // $artikel = Kategori::create([
        //     'nama_kategori' => $request->nama_kategori,
        //     'slug' => Str::slug($request->nama_kategori)
        // ]);

        return redirect()->route('playlist.index')->with(['success'=> 'Data berhasil disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $playlist = Playlist::find($id);

        return view('back.playlist.edit', compact('playlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if (empty($request->file('gambar_playlist'))) {
            $artikel = Playlist::find($id);
            $artikel->update([
                'judul_playlist' => $request->judul_playlist,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->judul_playlist),
                'is_active' => $request->is_active,
                'user_id' => Auth::id(),
            ]);
        return redirect()->route('playlist.index')->with(['success'=> 'Data berhasil disimpan']);

        } else {
            $artikel = Playlist::find($id);
            Storage::delete($artikel->gambar_playlist);
            $artikel->update([
                'judul_playlist' => $request->judul_playlist,
                'deskripsi' => $request->deskripsi,
                'slug' => Str::slug($request->judul_playlist),
                'is_active' => $request->is_active,
                'user_id' => Auth::id(),
                'gambar_playlist' => $request->file('gambar_playlist')->store('playlist'),

            ]);
        return redirect()->route('playlist.index')->with(['success'=> 'Data berhasil disimpan']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $playlist = Playlist::find($id);

        Storage::delete($playlist->gambar_playlist);

        $playlist->delete();

        return redirect()->route('playlist.index')->with(['success'=> 'Data berhasil dihapus']);
    }
}

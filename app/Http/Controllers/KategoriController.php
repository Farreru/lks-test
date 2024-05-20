<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Kategori::paginate(5);
        $title = 'Kategori';
        $version = self::VERSION;
        return view('Dashboard.kategori.index', compact('data', 'title', 'version'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = Kategori::create($request->all());
        return redirect()->route('kategori.index');
    }

    public function add()
    {
        //
        $title = 'Tambah Kategori';
        $version = self::VERSION;
        return view('Dashboard.kategori.add', compact('title', 'version'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori, $id)
    {
        //
        $data = Kategori::find($id);
        return view('kategori.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori, $id)
    {
        //
        $data = Kategori::find($id);
        $title = 'Edit Kategori';
        $version = self::VERSION;
        return view('Dashboard.kategori.edit', compact('data', 'title', 'version'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori, $id)
    {
        //
        $data = Kategori::find($id);
        $data->update($request->all());
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategori $kategori, $id)
    {
        //
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('kategori.index');
    }
}

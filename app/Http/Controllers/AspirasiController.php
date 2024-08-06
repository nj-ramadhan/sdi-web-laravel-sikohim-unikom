<?php

namespace App\Http\Controllers;

//import model mahasiswa
use App\Models\Aspirasi; 
use App\Models\Mahasiswa; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class AspirasiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all aspirasi
        $aspirasi = Aspirasi::latest()->paginate(10);

        //render view with aspirasi
        return view('aspirasi.index', compact('aspirasi'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('aspirasi.create');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function autocomplete(Request $request): RedirectResponse
    {
        $data = Mahasiswa::select("id")
            ->where('id', 'LIKE', '%'. $request->get('query'). '%')
            ->get();    
        return response()->json($data);
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'mahasiswa_nim' => 'required|min:8',
            'judul'         => 'required|min:10',
            'isi'           => 'required|min:25',
        ]);


        //create aspirasi
        Aspirasi::create([
            'mahasiswa_nim' => $request->mahasiswa_nim,
            'judul'         => $request->judul,
            'isi'           => $request->isi,
        ]);

        //redirect to index
        return redirect()->route('aspirasi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get aspirasi by ID
        $aspirasi = Aspirasi::findOrFail($id);

        //render view with aspirasi
        return view('aspirasi.show', compact('aspirasi'));
    }
    
    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get aspirasi by ID
        $aspirasi = Aspirasi::findOrFail($id);

        //render view with aspirasi
        return view('aspirasi.edit', compact('aspirasi'));
    }
        
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'mahasiswa_nim' => 'required|min:8',
            'judul'         => 'required|min:10',
            'isi'           => 'required|min:25',
        ]);

        //get aspirasi by ID
        $aspirasi = Aspirasi::findOrFail($id);

        //update aspirasi without image
        $aspirasi->update([
            'mahasiswa_nim' => $request->mahasiswa_nim,
            'judul'         => $request->judul,
            'isi'           => $request->isi,
        ]);

        //redirect to index
        return redirect()->route('aspirasi.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    
    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get aspirasi by ID
        $aspirasi = Aspirasi::findOrFail($id);

        //delete image
        Storage::delete('public/aspirasi/'. $aspirasi->image);

        //delete aspirasi
        $aspirasi->delete();

        //redirect to index
        return redirect()->route('aspirasi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

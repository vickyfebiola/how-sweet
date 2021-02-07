<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use DataTables;

class DataController extends Controller
{
    public function data(Request $request) {
        if ($request->ajax()) {
            $data = Content::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('content.edit',['id' => $row->id]).'" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="'.route('content.destroy',['id' => $row->id]).'" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('content');
    }

    public function create(){
        return view('content_create');
    }

    public function store(Request $request){
        $request->validate([
            'judul' => 'required|min:3|max:255',
            'gambar' => 'required|file|image|max:1000',
            'deskripsi' => 'required|max:255',
        ]);
        $data = new Content();
        $data->judul = $request->judul;
        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'content-'.time().".".$extFile;
            $path = $request->gambar->move('assets/user/img/content/',$namaFile);
            $data->gambar = $path;
        }
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect(route('content.data'))->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id){        
        $data['content'] = Content::find($id);
        return view ('content_edit', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul' => 'required|min:3|max:255',
            'gambar' => 'file|image|max:1000',
            'deskripsi' => 'required|max:255',
        ]);
        $data = Content::find($id);
        $data->judul = $request->judul;
        if($request->hasFile('gambar')) {
            $extFile = $request->gambar->getClientOriginalExtension();
            $namaFile = 'content-'.time().".".$extFile;
            // Content::delete($data->gambar);
            $path = $request->gambar->move('assets/user/img/content/',$namaFile);
            $data->gambar = $path;
        }
        $data->deskripsi = $request->deskripsi;
        $data->save();

        return redirect(route('content.data'))->with('pesan','Data Berhasil Diupdate');
    }

    public function destroy($id) {
        $data = Content::find($id);
        // Content::delete($data->gambar);
        $data->delete();
        
        return redirect(route('content.data'))->with('pesan','Data Berhasil dihapus!');
    }
}
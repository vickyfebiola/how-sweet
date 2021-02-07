<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use DataTables;

class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }

    public function login(){
        return view('login');
    }

    public function process(Request $request){
        $validateData = $request->validate([
            'username' => 'required',
            'passwd' => 'required',
        ]);

        $result = Admin::where('username', '=', $validateData['username'])->first();
        
        if($result){
            if (($request->passwd == $result->passwd)){
                session(['username' => $request->username]);
                return redirect(route('admin.index'));
            }
            else {
                return back()->withInput()->with('pesan',"Login Gagal");
            }
        }
        else {
            return back()->withInput()->with('pesan',"Login Gagal");
        }
    }

    public function logout(){
        session()->forget('username');
        return redirect('login')->with('pesan','Logout berhasil');
    }

    public function data(Request $request) {
        if ($request->ajax()) {
            $data = Admin::all();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '
                        <div class="text-center">
                            <div class="btn-group">
                                <a href="'.route('admin.edit',['id' => $row->id]).'" class="edit btn btn-success btn-sm">Edit</a>
                                <a href="'.route('admin.destroy',['id' => $row->id]).'" class="btn btn-danger btn-sm">Hapus</a>
                            </div>
                        </div>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        // tampil
        return view('admin_data');
    }

    public function create(){
        return view('admin_create');
    }

    public function store(Request $request){
        $request->validate([
            'fullname' => 'required|min:3|max:255',
            'username' => 'required|max:255',
            'passwd' => 'required|max:255',
        ]);
        $admin = new Admin();
        $admin->fullname = $request->fullname;
        $admin->username = $request->username;
        $admin->passwd = $request->passwd;
        $admin->save();

        return redirect(route('admin.data'))->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id){        
        $data['admin'] = Admin::find($id);
        return view ('admin_edit', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'fullname' => 'required|min:3|max:255',
            'username' => 'required|max:255',
            'passwd' => 'required|max:255',
        ]);
        $admin = Admin::find($id);
        $admin->fullname = $request->fullname;
        $admin->username = $request->username;
        $admin->passwd = $request->passwd;
        $admin->save();

        return redirect(route('admin.data'))->with('pesan','Data Berhasil Diupdate');
    }

    public function destroy($id) {
        $admin = Admin::find($id);
        $admin->delete();
        
        return redirect(route('admin.data'))->with('pesan','Data Berhasil dihapus!');
    }
    
}


<?php

namespace App\Http\Controllers;

use App\Models\zoom;

use Illuminate\Http\Request;

class zoomController extends Controller
{
    public function index()
    {
        $zoom = zoom::all(); // menampilkan data tampa data yang di soft delete
        //$zoom = zoom::withTrashed()->get(); // menampilkan data yang sudah di soft delete
        return view('zoom.zoomList', ['data_zoom' => $zoom]);
    }

    public function create()
    {
        return view('zoom.zoomCreate');
    }

    public function insert(Request $request)
    {
        $zoom = new zoom();
        $zoom->nama_akun = $request->nama_akun;
        $zoom->kapasitas = $request->kapasitas;
        $zoom->status_aktif = $request->status_aktif;

        $zoom->save();

        return redirect('/tampilZoom');
    }

    public function edit($id)
    {
        $zoom = zoom::where('id', $id)->first();

        $data = [
            'edit' => $zoom
        ];

        return view('zoom.zoomEdit', $data);
    }

    public function update(Request $request, $id)
    {
        $zoom = zoom::find($id);
        $zoom->nama_akun = $request->nama_akun;
        $zoom->kapasitas = $request->kapasitas;
        $zoom->status_aktif = $request->status_aktif;

        $zoom->save();

        return redirect('/tampilZoom');
    }

    public function delete($id)
    {
        $zoom = zoom::find($id);
        if ($zoom != null) {
            $zoom->delete();
            // $zoom->forcedelete(); // data tetap terhapus walaupun menggunakan soft delete
            return redirect('/tampilZoom');
        }
    }
}

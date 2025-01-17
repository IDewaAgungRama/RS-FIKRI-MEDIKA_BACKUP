<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();
        return view('ManajemenKamar', ['kamars' => $kamars]); 
    }

        public function kamar()
    {
        return view('ManajemenKamarCreate');
    }

    public function createkamar(Request $request)
    {
        $kamar = new Kamar; 
        $kamar->tipekamar = $request->tipekamar;
        $kamar->harga = $request->harga;
        $kamar->jumlahkamar = $request->jumlahkamar;
        $kamar->gedungkamar = $request->gedungkamar;
        $kamar->lantaikamar = $request->lantaikamar;
        $kamar->infokamar = $request->infokamar;
        $kamar->save();
        return redirect(url('/kamar')); 
    }

    public function editkamar(Request $request)
    {
        $kamar = Kamar::find($request->idkamar);
        return view('ManajemenKamarEdit', [
            'kamar' => $kamar
        ]);
    }

    public function updatekamar(Request $request)
    {
            $kamar = Kamar::find($request->idkamar);
            $kamar->tipekamar = $request->tipekamar;
            $kamar->harga = $request->harga;
            $kamar->jumlahkamar = $request->jumlahkamar;
            $kamar->gedungkamar = $request->gedungkamar;
            $kamar->lantaikamar = $request->lantaikamar;
            $kamar->infokamar = $request->infokamar;
            $kamar->save();
            return redirect(url('/kamar'));
    }

    public function destroykamar(Request $request)
    {
        $kamar = Kamar::find($request->idkamar);
        $kamar->delete();
        return redirect(url('/kamar'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\InformasiKetua;
use App\Models\InformasiSingkat;
use App\Models\Pengurus;
use App\Models\Setting;
use App\Models\TataKebaktian;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Halaman Home
     */
    public function home()
    {
        $settings = Setting::getRecord();
        $informasiSingkat = InformasiSingkat::getRecord();
        $informasiKetua = InformasiKetua::getRecord();
        $pengurus = Pengurus::orderBy('nama', 'asc')->limit(6)->get();
        
        return view('frontend.home', compact('settings', 'informasiSingkat', 'informasiKetua', 'pengurus'));
    }

    /**
     * Halaman Tata Kebaktian
     */
    public function tataKebaktian()
    {
        $settings = Setting::getRecord();
        $tataKebaktian = TataKebaktian::orderBy('model', 'asc')->get();
        
        return view('frontend.tata-kebaktian', compact('settings', 'tataKebaktian'));
    }

    /**
     * Detail Tata Kebaktian
     */
    public function tataKebaktianDetail($id)
    {
        $settings = Setting::getRecord();
        $liturgi = TataKebaktian::findOrFail($id);
        
        return view('frontend.tata-kebaktian-detail', compact('settings', 'liturgi'));
    }

    /**
     * Halaman Informasi Ketua
     */
    public function informasiKetua()
    {
        $settings = Setting::getRecord();
        $informasiKetua = InformasiKetua::getRecord();
        
        return view('frontend.informasi-ketua', compact('settings', 'informasiKetua'));
    }

    /**
     * Halaman Pengurus Ranting
     */
    public function pengurusRanting()
    {
        $settings = Setting::getRecord();
        $pengurus = Pengurus::orderBy('nama', 'asc')->get();
        
        return view('frontend.pengurus-ranting', compact('settings', 'pengurus'));
    }

    /**
     * Halaman Tentang Angkatan Muda
     */
    public function tentangAngkatanMuda()
    {
        $settings = Setting::getRecord();
        $informasiSingkat = InformasiSingkat::getRecord();
        
        return view('frontend.tentang', compact('settings', 'informasiSingkat'));
    }
}
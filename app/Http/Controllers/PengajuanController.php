<?php

namespace App\Http\Controllers;
use App\Models\pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengajuanController extends Controller
{
    public function download(pengajuan $pengajuan)
    {
        $pengajuan = pengajuan::all();
        $file1 = $pengajuan->file1;
        $file2 = $pengajuan->file2;
        $file3 = $pengajuan->file3;
        $file4 = $pengajuan->file4;


        if($file1 == "") {
            $file1 = null;
        } else {
            $file1 = $pengajuan->file1;
        }

        if($file2 == "") {
            $file2 = null;
        } else {
            $file2 = $pengajuan->file2;
        }

        if($file3 == "") {
            $file3 = null;
        } else {
            $file3 = $pengajuan->file3;
        }

        if($file4 == "") {
            $file4 = null;
        } else {
            $file4 = $pengajuan->file4;
        }

        return Storage::download('/public/pengajuan/'.$file1);
        return Storage::download('/public/pengajuan/'.$file2);
        return Storage::download('/public/pengajuan/'.$file3);
        return Storage::download('/public/pengajuan/'.$file4);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HasilSeleksi extends BaseController
{
    public function index()
    {
        $hasilSeleksi = $this->daftarUlang->getHasilSeleksi();

        $data = [
            'title'         => 'Hasil Seleksi Tahap 2 | PPDB SMA Negeri 1 Rawamerta',
            'hasilSeleksi'         => $hasilSeleksi,
        ];

        return view('front/hasil-seleksi', $data);
    }

    public function cekHasilSeleksi()
    {
        if ($this->request->isAjax()) {
            $noRegis = $this->request->getVar('inputSeleksi');
            $dataPeserta = $this->daftarUlang->cekDataSeleksi($noRegis);
            if ($dataPeserta != null) {
                $sesi = [
                    'no_daftar' => $noRegis,
                ];

                session()->set($sesi);

                $msg = [
                    'sukses'    => 'Selamat! Anda Lulus.',
                    'data'      => $dataPeserta
                ];
                echo json_encode($msg);
            } else {
                $msg = [
                    'error' => 'Data Tidak ditemukan'
                ];

                echo json_encode($msg);
            }
        }
    }

    public function belumDibuka()
    {

        $data = [
            'title' => 'Halaman Hasil Seleksi Belum dibuka | PPDB SMA Negeri 1 Rawamerta'
        ];

        return view('front/belum-dibuka', $data);
    }
}

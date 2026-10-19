<?php

namespace App\Http\Controllers;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwal = [
            [
                'judul' => 'Pengajian Rutin Malam Jumat',
                'kategori' => 'Pengajian',
                'tanggal' => 'Kamis, 22 Oktober 2026',
                'waktu' => '19.00 - 20.30 WIB',
                'mulai' => '2026-10-22T19:00:00+07:00',
                'selesai' => '2026-10-22T20:30:00+07:00',
                'pemateri' => 'Nama pemateri 1',
                'lokasi' => 'Masjid',
                'deskripsi' => 'Pengajian rutin untuk menambah wawasan keislaman.'
            ],
            [
                'judul' => 'Sholawat Bersama',
                'kategori' => 'Sholawat',
                'tanggal' => 'Sabtu, 24 Oktober 2026',
                'waktu' => '19.30 - 21.00 WIB',
                'mulai' => '2026-10-24T19:30:00+07:00',
                'selesai' => '2026-10-24T21:00:00+07:00',
                'pemateri' => 'Grup sholawat',
                'lokasi' => 'Masjid',
                'deskripsi' => 'Kegiatan sholawat bersama jamaah.'
            ],
            [
                'judul' => 'Kajian Subuh',
                'kategori' => 'Kajian',
                'tanggal' => 'Minggu, 25 Oktober 2026',
                'waktu' => '04.30 - 06.00 WIB',
                'mulai' => '2026-10-25T04:30:00+07:00',
                'selesai' => '2026-10-25T06:00:00+07:00',
                'pemateri' => 'Nama pemateri 2',
                'lokasi' => 'Masjid',
                'deskripsi' => 'Kajian mengenai peningkatan kualitas ibadah.'
            ],
            [
                'judul' => 'Kajian Keluarga Islami',
                'kategori' => 'Kajian',
                'tanggal' => 'Jumat, 30 Oktober 2026',
                'waktu' => '19.30 - 21.00 WIB',
                'mulai' => '2026-10-30T19:30:00+07:00',
                'selesai' => '2026-10-30T21:00:00+07:00',
                'pemateri' => 'Nama pemateri 3',
                'lokasi' => 'Masjid',
                'deskripsi' => 'Kajian tentang membangun keluarga yang harmonis.'
            ]
        ];

        return view('jadwal.index', compact('jadwal'));
    }
}
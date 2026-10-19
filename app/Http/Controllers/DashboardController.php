<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $tanggal = now('Asia/Jakarta')
            ->locale('id')
            ->translatedFormat('l, d F Y');

        $profilMasjid = [
            'nama' => 'Masjid Ibnu Sina',
            'alamat' => 'Jl. Veteran No. 8C, Penanggungan, Klojen, Kota Malang, Jawa Timur 65113',
            'maps' => 'https://maps.app.goo.gl/uH2EdTAPKnqWfqMr7',
            'maps_embed' => 'https://maps.google.com/maps?q=Masjid%20Ibnu%20Sina%2C%20Jl.%20Veteran%20No.8C%2C%20Penanggungan%2C%20Malang&output=embed',
        ];

        return view('dashboard', compact(
            'tanggal',
            'profilMasjid'
        ));
    }

    public function jadwalSholat(Request $request)
    {
        $data = $request->validate([
            'latitude' => ['required', 'numeric', 'between:-90,90'],
            'longitude' => ['required', 'numeric', 'between:-180,180'],
            'date' => ['required', 'date_format:d-m-Y'],
        ]);

        try {
            $response = Http::acceptJson()
                ->timeout(15)
                ->get(
                    'https://api.aladhan.com/v1/timings/' . $data['date'],
                    [
                        'latitude' => $data['latitude'],
                        'longitude' => $data['longitude'],
                        'method' => 20,
                        'school' => 0,
                        'iso8601' => 'true',
                    ]
                );

            if (
                !$response->successful() ||
                (int) $response->json('code') !== 200
            ) {
                return response()->json([
                    'message' => 'API jadwal salat sedang tidak tersedia.'
                ], 502);
            }

            $apiData = $response->json('data');
            $times = $apiData['timings'] ?? [];

            return response()->json([
                'timings' => [
                    'Subuh' => $times['Fajr'] ?? null,
                    'Zuhur' => $times['Dhuhr'] ?? null,
                    'Asar' => $times['Asr'] ?? null,
                    'Maghrib' => $times['Maghrib'] ?? null,
                    'Isya' => $times['Isha'] ?? null,
                ],

                'timezone' => $apiData['meta']['timezone'] ?? null,
                'tanggal' => $apiData['date']['readable'] ?? $data['date'],
            ]);

        } catch (\Throwable $e) {
            report($e);

            return response()->json([
                'message' => 'Jadwal salat gagal dimuat. Periksa koneksi internet dan coba kembali.'
            ], 502);
        }
    }
}

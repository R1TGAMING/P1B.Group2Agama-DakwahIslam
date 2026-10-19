<?php

namespace App\Models;

class Blog
{
    public static function all(): array
    {
        return [
            [
                'slug' => 'dakwah-1',
                'title' => 'Pentingnya Menjaga Salat dalam Kehidupan',
                'date' => 'Isi tanggal dakwah',
                'time' => 'Isi waktu dakwah',
                'speaker' => 'Pemateri 1',
                'youtube_id' => 'My3b6OZ1adE',
                'excerpt' => 'Simak materi dakwah dan pesan yang disampaikan oleh pemateri pertama.',
                'summary' => [
                    'Tuliskan inti materi yang disampaikan oleh Pemateri 1.',
                    'Tambahkan pesan penting yang dapat diterapkan dalam kehidupan sehari-hari.',
                    'Tuliskan kesimpulan dari materi dakwah.'
                ]
            ],

            [
                'slug' => 'dakwah-2',
                'title' => 'Dakwah Islam Bersama Pemateri 2',
                'date' => 'Isi tanggal dakwah',
                'time' => 'Isi waktu dakwah',
                'speaker' => 'Pemateri 2',
                'youtube_id' => 'dfe3pEBaGbY',
                'excerpt' => 'Temukan wawasan keislaman melalui materi dakwah dari pemateri kedua.',
                'summary' => [
                    'Tuliskan inti materi yang disampaikan oleh Pemateri 2.',
                    'Tambahkan pesan penting dari materi dakwah.',
                    'Tuliskan kesimpulan yang dapat dipelajari jamaah.'
                ]
            ],

            [
                'slug' => 'dakwah-3',
                'title' => 'Dakwah Islam Bersama Pemateri 3',
                'date' => 'Isi tanggal dakwah',
                'time' => 'Isi waktu dakwah',
                'speaker' => 'Pemateri 3',
                'youtube_id' => '0HiNAOKAF9Y',
                'excerpt' => 'Simak video dakwah ketiga dan pelajari pesan keislaman yang disampaikan.',
                'summary' => [
                    'Tuliskan inti materi yang disampaikan oleh Pemateri 3.',
                    'Tambahkan hal penting yang dapat dipetik dari materi.',
                    'Tuliskan kesimpulan dari dakwah.'
                ]
            ],

            [
                'slug' => 'dakwah-4',
                'title' => 'Dakwah Islam Bersama Pemateri 4',
                'date' => 'Isi tanggal dakwah',
                'time' => 'Isi waktu dakwah',
                'speaker' => 'Pemateri 4',
                'youtube_id' => 'PSIychdfFVs',
                'excerpt' => 'Simak materi dakwah keempat untuk menambah wawasan dan pemahaman keislaman.',
                'summary' => [
                    'Tuliskan inti materi yang disampaikan oleh Pemateri 4.',
                    'Tambahkan pesan yang relevan dengan kehidupan sehari-hari.',
                    'Tuliskan kesimpulan dari materi dakwah.'
                ]
            ]
        ];
    }

    public static function findBySlug(string $slug): ?array
    {
        foreach (self::all() as $blog) {
            if ($blog['slug'] === $slug) {
                return $blog;
            }
        }

        return null;
    }
}
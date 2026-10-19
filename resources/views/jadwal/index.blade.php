@extends('layouts.app')

@section('title', 'Jadwal Kegiatan Keagamaan')

@section('content')

<section class="schedule-hero">
    <p class="schedule-label">INFORMASI KEGIATAN MASJID</p>

    <h1>Jadwal Kegiatan Keagamaan</h1>

    <p>
        Jangan lewatkan kajian, pengajian, sholawat,
        dan kegiatan keagamaan lainnya.
    </p>
</section>

<section class="schedule-container">

    <div class="schedule-announcement">
        <span class="announcement-icon">📢</span>

        <div>
            <h2>Pengumuman Kegiatan</h2>
            <p>
                Catat jadwalnya dan aktifkan pengingat agar
                tidak ketinggalan kegiatan masjid.
            </p>
        </div>
    </div>

    <div class="schedule-grid">

        @forelse ($jadwal as $item)

            <article class="schedule-card">

                <div class="schedule-card-header">
                    <span class="schedule-category">
                        {{ $item['kategori'] }}
                    </span>

                    <span class="schedule-status">
                        Akan Datang
                    </span>
                </div>

                <h2>{{ $item['judul'] }}</h2>

                <p class="schedule-description">
                    {{ $item['deskripsi'] }}
                </p>

                <div class="schedule-info">

                    <div class="schedule-info-item">
                        <span class="info-icon">📅</span>

                        <div>
                            <small>Tanggal</small>
                            <p>{{ $item['tanggal'] }}</p>
                        </div>
                    </div>

                    <div class="schedule-info-item">
                        <span class="info-icon">🕒</span>

                        <div>
                            <small>Waktu</small>
                            <p>{{ $item['waktu'] }}</p>
                        </div>
                    </div>

                    <div class="schedule-info-item">
                        <span class="info-icon">🎙️</span>

                        <div>
                            <small>Pemateri / Pengisi Acara</small>
                            <p>{{ $item['pemateri'] }}</p>
                        </div>
                    </div>

                    <div class="schedule-info-item">
                        <span class="info-icon">📍</span>

                        <div>
                            <small>Lokasi</small>
                            <p>{{ $item['lokasi'] }}</p>
                        </div>
                    </div>

                </div>

                <div class="countdown-box">

                    <p>Waktu menuju kegiatan</p>

                    <div
                        class="event-countdown"
                        data-start="{{ $item['mulai'] }}"
                        data-end="{{ $item['selesai'] }}"
                    >
                        Menghitung waktu...
                    </div>

                </div>

                <button
                    type="button"
                    class="calendar-button"
                    data-title="{{ $item['judul'] }}"
                    data-start="{{ $item['mulai'] }}"
                    data-end="{{ $item['selesai'] }}"
                    data-details="{{ $item['deskripsi'] }}"
                    data-speaker="{{ $item['pemateri'] }}"
                    data-location="{{ $item['lokasi'] }}"
                >
                    🔔 Tambah ke Kalender
                </button>

            </article>

        @empty

            <p class="schedule-empty">
                Belum ada jadwal kegiatan yang tersedia.
            </p>

        @endforelse

    </div>

    <p class="calendar-note">
        Klik tombol Tambah ke Kalender untuk menyimpan kegiatan
        dan mengatur notifikasi pengingat melalui Google Calendar.
    </p>

</section>

<script>
    // Menghitung waktu menuju setiap kegiatan
    document.querySelectorAll('.event-countdown').forEach(function (element) {

        function updateCountdown() {
            const mulai = new Date(element.dataset.start).getTime();
            const selesai = new Date(element.dataset.end).getTime();
            const sekarang = Date.now();

            if (sekarang >= selesai) {
                element.textContent = 'Kegiatan telah selesai';
                return;
            }

            if (sekarang >= mulai) {
                element.textContent = 'Kegiatan sedang berlangsung!';
                return;
            }

            const selisih = mulai - sekarang;

            const hari = Math.floor(
                selisih / (1000 * 60 * 60 * 24)
            );

            const jam = Math.floor(
                (selisih / (1000 * 60 * 60)) % 24
            );

            const menit = Math.floor(
                (selisih / (1000 * 60)) % 60
            );

            const detik = Math.floor(
                (selisih / 1000) % 60
            );

            element.textContent =
                hari + ' hari ' +
                jam + ' jam ' +
                menit + ' menit ' +
                detik + ' detik';
        }

        updateCountdown();

        setInterval(updateCountdown, 1000);
    });


    // Membuka Google Calendar untuk membuat pengingat
    document.querySelectorAll('.calendar-button').forEach(function (button) {

        button.addEventListener('click', function () {

            const mulai = new Date(button.dataset.start);
            const selesai = new Date(button.dataset.end);

            function formatTanggal(tanggal) {
                return tanggal.toISOString()
                    .replace(/[-:]/g, '')
                    .replace(/\.\d{3}Z$/, 'Z');
            }

            const calendar = new URL(
                'https://calendar.google.com/calendar/render'
            );

            calendar.searchParams.set('action', 'TEMPLATE');

            calendar.searchParams.set(
                'text',
                button.dataset.title
            );

            calendar.searchParams.set(
                'dates',
                formatTanggal(mulai) + '/' + formatTanggal(selesai)
            );

            calendar.searchParams.set(
                'details',
                button.dataset.details +
                '\nPemateri: ' + button.dataset.speaker
            );

            calendar.searchParams.set(
                'location',
                button.dataset.location
            );

            window.open(
                calendar.toString(),
                '_blank',
                'noopener,noreferrer'
            );
        });

    });
</script>

@endsection
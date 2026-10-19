
@extends('layouts.app')

@section('title', 'Tentang Kami | e-Masjid.id')

@section('content')

<!-- HERO -->
<section class="about-hero">
    <div class="about-hero-content">

        <span class="about-label">TENTANG KAMI</span>

        <h1>
            Masjid Bukan Hanya Tempat Ibadah,
            Tapi Tempat Kita Bertumbuh
        </h1>

        <p>
            Menghubungkan jamaah, memudahkan akses informasi,
            dan mengajak generasi muda lebih dekat dengan masjid
            melalui teknologi digital.
        </p>

        <a href="#relawan" class="about-hero-button">
            Jadi Bagian dari Kami →
        </a>

    </div>
</section>


<!-- TENTANG WEBSITE -->
<section class="about-intro">

    <div class="about-intro-text">

        <span class="about-section-label">SIAPA KAMI?</span>

        <h2>Menghidupkan Masjid di Era Digital</h2>

        <p>
            Website ini dikembangkan sebagai sarana informasi
            kegiatan keagamaan yang mudah diakses oleh jamaah.
            Melalui pemanfaatan teknologi, informasi jadwal salat,
            pengajian, sholawat, dan materi dakwah dapat dijangkau
            dengan lebih praktis.
        </p>

        <p>
            Kami ingin menjadikan teknologi bukan sekadar alat
            untuk mendapatkan informasi, tetapi juga sebagai
            jembatan yang menghubungkan masyarakat dengan kegiatan
            masjid, khususnya generasi muda.
        </p>

    </div>

    <div class="about-values">

        <div class="about-value-card">
            <span>📱</span>
            <h3>Informasi Mudah Diakses</h3>
            <p>
                Informasi masjid dapat dilihat melalui perangkat
                yang terhubung dengan internet.
            </p>
        </div>

        <div class="about-value-card">
            <span>🤝</span>
            <h3>Membangun Kebersamaan</h3>
            <p>
                Mendorong jamaah untuk saling mengenal dan
                berpartisipasi dalam kegiatan masjid.
            </p>
        </div>

        <div class="about-value-card">
            <span>🌱</span>
            <h3>Ruang bagi Generasi Muda</h3>
            <p>
                Membuka kesempatan bagi remaja untuk belajar,
                berkontribusi, dan mengembangkan diri.
            </p>
        </div>

    </div>

</section>


<!-- GALERI KEGIATAN -->
<section class="about-gallery">

    <div class="about-heading">
        <span class="about-section-label">GALERI KEGIATAN</span>

        <h2>Masjid, Ruang untuk Berbagi Kebaikan</h2>

        <p>
            Dari ibadah bersama hingga kegiatan sosial,
            setiap langkah kecil dapat membawa manfaat.
        </p>
    </div>


    <div class="about-gallery-grid">

        <article class="about-gallery-card">

            <img
                src="https://images.unsplash.com/photo-1781193230774-c56477bba752?auto=format&fit=crop&w=1200&q=80"
                alt="Jamaah melaksanakan ibadah bersama"
                loading="lazy"
            >

            <div class="about-gallery-overlay">
                <span>Ibadah Bersama</span>
                <h3>Mempererat Ukhuwah Islamiyah</h3>
            </div>

        </article>


        <article class="about-gallery-card">

            <img
                src="https://images.unsplash.com/photo-1760072986110-01cd779ddec4?auto=format&fit=crop&w=1200&q=80"
                alt="Kebersamaan masyarakat di lingkungan masjid"
                loading="lazy"
            >

            <div class="about-gallery-overlay">
                <span>Kebersamaan Jamaah</span>
                <h3>Membangun Lingkungan yang Peduli</h3>
            </div>

        </article>


        <article class="about-gallery-card">

            <img
                src="https://images.unsplash.com/photo-1743450675048-03e0c6b13720?auto=format&fit=crop&w=1200&q=80"
                alt="Suasana salat berjamaah di masjid"
                loading="lazy"
            >

            <div class="about-gallery-overlay">
                <span>Kegiatan Keagamaan</span>
                <h3>Melangkah Bersama dalam Kebaikan</h3>
            </div>

        </article>

    </div>

    <p class="about-gallery-note">
        Foto di atas merupakan ilustrasi. Ganti dengan dokumentasi
        asli kegiatan masjid agar galeri sesuai dengan kegiatan
        yang benar-benar dilaksanakan.
    </p>

</section>


<!-- AJAKAN RELAWAN REMAJA MASJID -->
<section class="about-volunteer" id="relawan">

    <div class="about-volunteer-content">

        <span class="about-label">RUANG UNTUK GENERASI MUDA</span>

        <h2>
            Yuk, Jadi Bagian dari Perubahan!
        </h2>

        <p>
            Punya ide kreatif, suka membuat konten, tertarik dengan
            teknologi, atau ingin ikut kegiatan sosial? Masjid juga
            membutuhkan energi dan gagasan dari generasi muda.
        </p>

        <p>
            Kamu tidak harus punya pengalaman terlebih dahulu.
            Mulai dari kemauan belajar, semangat bekerja sama,
            dan niat untuk memberi manfaat bagi sesama.
        </p>

        <div class="about-volunteer-benefits">

            <span>✓ Belajar hal baru</span>
            <span>✓ Menambah relasi positif</span>
            <span>✓ Berkontribusi untuk masyarakat</span>

        </div>

        <a href="#kontak" class="about-volunteer-button">
            Tertarik Jadi Relawan? →
        </a>

    </div>

</section>


<!-- KONTAK MASJID -->
<section class="about-contact" id="kontak">

    <div class="about-heading">

        <span class="about-section-label">HUBUNGI KAMI</span>

        <h2>Mari Terhubung dengan Masjid</h2>

        <p>
            Ingin mengetahui kegiatan masjid, menyampaikan pertanyaan,
            atau bergabung menjadi relawan? Silakan hubungi pengurus.
        </p>

    </div>


    <div class="about-contact-grid">

        <div class="about-contact-card">

            <span class="about-contact-icon">🕌</span>

            <h3>Informasi Masjid</h3>

            <p>
                Nama Masjid: <strong>Isi nama resmi masjid</strong>
            </p>

            <p>
                Alamat: <strong>Isi alamat lengkap masjid</strong>
            </p>

        </div>


        <div class="about-contact-card">

            <span class="about-contact-icon">📞</span>

            <h3>Kontak Pengurus</h3>

            <p>
                WhatsApp: <strong>Isi nomor resmi pengurus</strong>
            </p>

            <p>
                Email: <strong>Isi email resmi jika tersedia</strong>
            </p>

        </div>

    </div>


    <div class="about-contact-actions">

        <a
            href="https://maps.app.goo.gl/uH2EdTAPKnqWfqMr7"
            target="_blank"
            rel="noopener noreferrer"
            class="about-map-button"
        >
            📍 Lihat Lokasi Masjid
        </a>

        <a
            href="{{ route('jadwal.index') }}"
            class="about-schedule-button"
        >
            Lihat Jadwal Kegiatan →
        </a>

    </div>

    <p class="about-contact-note">
        Sebelum website dipublikasikan, lengkapi nama masjid,
        alamat, serta kontak resmi pengurus.
    </p>

</section>


<!-- FOOTER -->
<footer class="about-footer">

    <a href="{{ route('dashboard') }}" class="about-footer-brand">
        e-Masjid.id
    </a>

    <p>
        Memakmurkan masjid, menghubungkan umat,
        dan bertumbuh bersama teknologi.
    </p>

    <div class="about-footer-links">

        <a href="{{ route('dashboard') }}">Dashboard</a>

        <a href="{{ route('jadwal.index') }}">
            Jadwal Kegiatan
        </a>

        <a href="{{ route('blog.index') }}">
            Dakwah Islam
        </a>

    </div>

    <p class="about-copyright">
        © {{ date('Y') }} e-Masjid.id
    </p>

</footer>

@endsection

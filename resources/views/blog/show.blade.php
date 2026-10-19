@extends('layouts.app')

@section('title', $blog['title'])

@section('content')

<section class="article-container">

    <div class="breadcrumbs">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <span>›</span>
        <a href="{{ route('blog.index') }}">Dakwah Islam</a>
    </div>

    <article class="article-detail">

        <h1>{{ $blog['title'] }}</h1>

        <div class="dakwah-info">

            <p>
                <strong>Tanggal:</strong>
                {{ $blog['date'] }}
            </p>

            <p>
                <strong>Waktu:</strong>
                {{ $blog['time'] }}
            </p>

            <p>
                <strong>Pemateri:</strong>
                {{ $blog['speaker'] }}
            </p>

        </div>

        <section class="youtube-section">

            <h2>Video Dakwah</h2>

            <p>
                Simak video dakwah berikut untuk mempelajari
                materi yang disampaikan oleh pemateri.
            </p>

            <div class="youtube-player">
                <iframe
                    src="https://www.youtube.com/embed/{{ $blog['youtube_id'] }}"
                    title="{{ $blog['title'] }}"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>

            <a
                href="https://www.youtube.com/watch?v={{ $blog['youtube_id'] }}"
                target="_blank"
                rel="noopener noreferrer"
                class="youtube-button"
            >
                ▶ Tonton Video di YouTube
            </a>

        </section>

        <section class="summary-section">

            <h2>Rangkuman Dakwah</h2>

            @foreach ($blog['summary'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach

        </section>

        <a href="{{ route('blog.index') }}" class="back-link">
            ← Kembali ke Daftar Dakwah
        </a>

    </article>

</section>

@endsection
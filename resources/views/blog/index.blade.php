@extends('layouts.app')

@section('title', 'Dakwah Islam')

@section('content')

<section class="blog-hero">
    <h1>Dakwah Islam</h1>

    <p>
        Temukan video dakwah dan rangkuman materi
        untuk menambah wawasan keislaman.
    </p>

    <form action="{{ route('blog.index') }}"
          method="GET"
          class="search-form">

        <input
            type="text"
            name="q"
            placeholder="Cari judul dakwah atau pemateri..."
            value="{{ $q }}"
        >

        <button type="submit">Cari</button>
    </form>
</section>

<section class="blog-listing">

    <div class="blog-grid">

        @forelse ($blogs as $blog)

            <article class="blog-card">

                <!-- THUMBNAIL YOUTUBE: HANYA GAMBAR -->
                <div class="card-image">

                    <img
                        src="https://img.youtube.com/vi/{{ $blog['youtube_id'] }}/hqdefault.jpg"
                        alt="Thumbnail {{ $blog['title'] }}"
                        loading="lazy"
                    >

                </div>

                <!-- INFORMASI DAKWAH -->
                <div class="card-content">

                    <p class="card-meta">
                        {{ $blog['date'] }}
                        · {{ $blog['time'] }}
                    </p>

                    <h2>
                        <a href="{{ route('blog.show', ['slug' => $blog['slug']]) }}">
                            {{ $blog['title'] }}
                        </a>
                    </h2>

                    <p class="speaker">
                        Pemateri: {{ $blog['speaker'] }}
                    </p>

                    <p class="card-excerpt">
                        {{ $blog['excerpt'] }}
                    </p>

                    <a
                        href="{{ route('blog.show', ['slug' => $blog['slug']]) }}"
                        class="read-more"
                    >
                        Baca rangkuman dakwah →
                    </a>

                </div>

            </article>

        @empty

            <p class="empty-message">
                Dakwah yang kamu cari belum tersedia.
            </p>

        @endforelse

    </div>

</section>

@endsection
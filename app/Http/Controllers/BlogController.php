<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blogs = Blog::all();

        $q = trim($request->query('q', ''));

        if ($q !== '') {
            $kataKunci = mb_strtolower($q);

            $blogs = array_filter($blogs, function ($blog) use ($kataKunci) {
                return str_contains(
                    mb_strtolower($blog['title']),
                    $kataKunci
                ) || str_contains(
                    mb_strtolower($blog['excerpt']),
                    $kataKunci
                ) || str_contains(
                    mb_strtolower($blog['speaker']),
                    $kataKunci
                );
            });
        }

        $blogs = array_values($blogs);

        return view('blog.index', compact('blogs', 'q'));
    }

    public function show(string $slug)
    {
        $blog = Blog::findBySlug($slug);

        abort_if($blog === null, 404);

        return view('blog.show', compact('blog'));
    }
}
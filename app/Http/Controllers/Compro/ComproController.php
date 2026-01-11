<?php

namespace App\Http\Controllers\Compro;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Facility;
use App\Models\Galery;
use App\Models\News;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function home()
    {
        $news = News::with('category')->select(['category_id', 'slug', 'judul', 'summary', 'thumbnail', 'created_at'])->latest()->take(3)->get();

        return view('compro.pages.home', compact('news'));
    }

    public function aboutUs()
    {
        $teachers = Teacher::orderByRaw("CASE WHEN jabatan = 'Kepala Sekolah' THEN 0 ELSE 1 END")
            ->take(4)
            ->get();
        $facilities = Facility::all();

        return view('compro.pages.profile', compact('teachers', 'facilities'));
    }

    public function teacher()
    {
        $kepalaSekolah = Teacher::where('jabatan', 'Kepala Sekolah')->first();
        $kurikulum   = Teacher::where('jabatan_spesifik', 'Kurikulum')->first();
        $kepalaTU      = Teacher::where('jabatan_spesifik', 'Kepala Tata Usaha')->first();
        $teachers = Teacher::orderBy('nama', 'asc')->get();
        $categories = Teacher::select('jabatan')
            ->distinct()
            ->whereNotNull('jabatan')
            ->orderBy('jabatan', 'asc')
            ->pluck('jabatan');

        return view('compro.pages.employee', compact('kepalaSekolah', 'kurikulum', 'kepalaTU', 'teachers', 'categories'));
    }

    public function news(Request $request)
    {
        $headline = News::with(['category', 'user'])->latest()->first();
        $query = News::with(['category', 'user']);

        if ($headline) {
            $query->where('id', '!=', $headline->id);
        }

        if ($request->has('q')) {
            $query->where('judul', 'like', '%' . $request->q . '%');
        }

        if ($request->has('category')) {
            $query->whereHas('category', function ($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        $news_list = $query->latest()->paginate(6);

        $categories = Category::withCount('news')->get();
        $popular_news = News::with('category')->latest()->take(5)->get();
        $allTags = News::whereNotNull('tags')->get()->pluck('tags')->flatten()->unique()->take(15);


        return view('compro.pages.news', compact(
            'headline',
            'news_list',
            'categories',
            'popular_news',
            'allTags'
        ));
    }

    public function readNews($slug)
    {
        $news = News::with(['category', 'user'])
            ->where('slug', $slug)
            ->firstOrFail(); 

        $related_news = News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id)
            ->latest()
            ->take(3)
            ->get();

        $categories = Category::withCount('news')->get();
        $popular_news = News::with('category')->latest()->take(5)->get(); 

        return view('compro.pages.detail_news', compact(
            'news',
            'related_news',
            'categories',
            'popular_news'
        ));
    }

    public function gallery()
    {
        $categories = Galery::select('kategori')->distinct()->pluck('kategori');
        $galleries = Galery::latest()->take(6)->get();

        return view('compro.pages.gallery', compact('categories', 'galleries'));
    }

    public function loadMore(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = 6;
        $category = $request->input('category', 'semua');

        $query = Galery::query();

        if ($category !== 'semua') {
            $query->where('kategori', $category);
        }

        $galleries = $query->latest()->skip($skip)->take($take)->get();

        return response()->json($galleries);
    }

    public function infoPPDB()
    {
        return view('compro.pages.ppdb_info');
    }
}

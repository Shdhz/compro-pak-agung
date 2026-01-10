<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        // Eager load 'category' dan 'user' agar query lebih efisien
        $query = News::with(['category', 'user']);

        if ($request->has('search') && $request->search != '') {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }

        $news = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.news.index', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'summary' => 'required|string|max:255', // Ringkasan pendek
            'content' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|string', // Input berupa string dipisah koma
        ]);

        $data = $request->all();
        
        // 1. Generate Slug otomatis dari Judul
        $data['slug'] = Str::slug($request->judul);
        
        // 2. Set User ID (Penulis)
        $data['user_id'] = Auth::id() || 1;

        // 3. Handle Upload Thumbnail
        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('news', 'public');
        }

        // 4. Handle Tags (String "a, b" -> Array ["a", "b"])
        if ($request->filled('tags')) {
            $tagsArray = array_map('trim', explode(',', $request->tags));
            $data['tags'] = $tagsArray; // Model akan meng-cast ini ke JSON otomatis
        } else {
            $data['tags'] = [];
        }

        News::create($data);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil diterbitkan');
    }

    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.pages.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'summary' => 'required|string|max:255',
            'content' => 'nullable|string',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'tags' => 'nullable|string',
        ]);

        $data = $request->except(['thumbnail', 'tags']);

        // Update Slug jika judul berubah (Opsional, tapi bagus untuk SEO)
        if ($request->judul != $news->judul) {
            $data['slug'] = Str::slug($request->judul);
        }

        // Handle Thumbnail
        if ($request->hasFile('thumbnail')) {
            if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
                Storage::disk('public')->delete($news->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('news', 'public');
        }

        // Handle Tags
        if ($request->filled('tags')) {
            $tagsArray = array_map('trim', explode(',', $request->tags));
            $data['tags'] = $tagsArray;
        } else {
            $data['tags'] = [];
        }

        $news->update($data);

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy(News $news)
    {
        if ($news->thumbnail && Storage::disk('public')->exists($news->thumbnail)) {
            Storage::disk('public')->delete($news->thumbnail);
        }

        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Berita berhasil dihapus');
    }
}

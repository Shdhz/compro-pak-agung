<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $query = Category::query();

        // Fitur Pencarian
        if ($request->has('search') && $request->search != '') {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }

        $category = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.category.index', compact('category'));
    }

    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:categories,nama',
        ]);

        Category::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('admin.category.index')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(Category $category)
    {
        return view('admin.pages.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nama' => 'required|string|max:255|unique:categories,nama,' . $category->id,
        ]);

        $category->update([
            'nama' => $request->nama
        ]);

        return redirect()->route('admin.category.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(Category $category)
    {
        if($category->news()->count() > 0) {
            return back()->with('error', 'Kategori tidak bisa dihapus karena masih digunakan oleh berita.');
        }

        $category->delete();

        return redirect()->route('admin.category.index')
            ->with('success', 'Kategori berhasil dihapus');
    }
}

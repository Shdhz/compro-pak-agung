<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Kelola Pengaturan Aplikasi';
        $query = Setting::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('key', 'like', "%$search%")
                    ->orWhere('value', 'like', "%$search%");
            });
        }

        // 2. Pagination (10 data per halaman)
        $settings = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.pages.settings.index', compact('settings', 'title'));
    }

    public function edit(Setting $setting)
    {
        return view('admin.pages.settings.edit', compact('setting'));
    }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'key' => 'required|unique:settings,key,' . $setting->id,
            'value' => 'required',
        ]);

        $setting->update($request->all());

        return redirect()->route('admin.setting.index')
            ->with('success', 'Pengaturan berhasil diperbarui');
    }
}

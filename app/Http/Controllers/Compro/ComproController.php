<?php

namespace App\Http\Controllers\Compro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function home()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.home', compact('title'));
    }

    public function aboutUs()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.profile', compact('title'));
    }

    public function teacher()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.employee', compact('title'));
    }

    public function news()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.news', compact('title'));
    }

    public function readNews()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.detail_news', compact('title'));
    }

    public function gallery()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.gallery', compact('title'));
    }

    public function infoPPDB()
    {
        $title = 'Beranda SD Negeri 1 Contoh';

        return view('compro.pages.ppdb_info', compact('title'));
    }
}

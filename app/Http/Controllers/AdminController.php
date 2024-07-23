<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; 

class AdminController extends Controller
{
    public function index()
    {
        // Logic untuk mengambil data dashboard
        return view('admin.dashboard');
    }

    public function manageNews()
    {
        // Logic untuk mengambil data berita
        $news = News::latest()->get();    
        return view('admin.news',compact('news') );
    }

    public function manageCategories()
    {
        // Logic untuk mengambil data kategori
        return view('admin.categories');
    }

    public function settings()
    {
        // Logic untuk mengambil data pengaturan
        return view('admin.settings');
    }
}

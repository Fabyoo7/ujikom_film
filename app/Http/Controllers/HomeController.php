<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Genre;
use App\Models\Film;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $total_kategori  = Kategori::count('id');
        $total_genre  = Genre::count('id');
        $total_film  = Film::count('id');
        return view('home', compact( 'total_kategori' , 'total_genre' , 'total_film' ));

    }
}

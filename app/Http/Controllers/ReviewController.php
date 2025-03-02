<?php
namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $film = Film::all();

        // Ambil ID kategori dari request
        $id_film = $request->get('id_film');

        // Jika id_kategori ada dan tidak kosong, filter artikel berdasarkan kategori tersebut
        if ($id_film) {
            $review = Review::where('id_film', $id_film)->get();
        } else {
            // Jika tidak, ambil semua artikel
            $review = Review::orderBy('created_at', 'desc')->get();

        }

        $user = User::all();

// Ambil ID kategori dari request
        $id_user = $request->get('id_user');

// Jika id_kategori ada dan tidak kosong, filter artikel berdasarkan kategori tersebut
        if ($id_user) {
            $review = Review::where('id_user', $id_user)->get();
        } else {
            // Jika tidak, ambil semua artikel
            $review = Review::orderBy('created_at', 'desc')->get();

        }

        // Menambahkan formatted_tanggal pada setiap artikel
        foreach ($review as $data) {
            $data->formatted_tanggal = Carbon::parse($data->tanggal)->translatedFormat('l, d F Y');
        }

        return view('review.index', compact('film', 'user', 'id_film'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film = Film::all();
        $user = User::all();

        return view('review.create', compact('film', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rating' => 'required|string|max:255',
            'komen'  => 'required',
        ]);

        $review          = new Review;
        $review->id_film = $request->id_film;
        $review->id_user = $request->id_user;
        $review->rating  = $request->rating;
        $review->komen   = $request->komen;

        $film->save();
        toast('New entry has been saved', 'success');

        return redirect()->route('film.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        $film = Film::all();
        $user = User::all();

        return view('review.show', compact('film', 'user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        $film = Film::all();
        $user = User::all();

        return view('review.edit', compact('film', 'user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $validated = $request->validate([
            'rating' => 'required|string|max:255',
            'komen'  => 'required',
        ]);

        $review          = new Review;
        $review->id_film = $request->id_film;
        $review->id_user = $request->id_user;
        $review->rating  = $request->rating;
        $review->komen   = $request->komen;

        $film->save();
        toast('New entry has been saved', 'success');

        return redirect()->route('film.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        toast('Record removed successfully', 'success');
        return redirect()->route('review.index');

    }
}

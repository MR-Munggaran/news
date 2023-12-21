<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

class SearchController extends Controller
{
    public function autocomplete(Request $request)
    {
        $query = $request->input('query');

        // Logika pencarian di sini
        $results = Artikel::where('slug', 'like', '%' . $query . '%')
            ->get();

        // Format hasil sesuai kebutuhan jQuery UI Autocomplete
        $formattedResults = $results->map(function ($result) {
            return [
                'slug' => $result->slug,
                'value' => $result->judul, // Sesuaikan dengan kolom yang sesuai
            ];
        });

        return response()->json($formattedResults);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan logika pencarian di sini pada model Article
        $results = Article::where('judul', 'like', '%' . $query . '%')
            ->get();

        return response()->json([
                ['slug' => $result->slug , 'value' => $result->judul],
            ]);
    }
}

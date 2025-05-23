<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "succsess" => true,
            "messege" => "Get All Resourse",
            "data" => $genres
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'name'        => 'required|string|max:100',
            'description' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Genre created successfully.',
            'data' => $genre
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
            'succsess' => false,
            'messege' => "Resource not found",
        ], 404);
        }

        return response()->json([
            'succsess' => true,
            'messege' => "Get detail resource",
            'data' => $genre
        ], 200);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {
        // 1. cari data 
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
            'succsess' => false,
            'messege' => "Resource not found",
        ], 404);
        }

        // 2. validasi 
        $validator = Validator::make($request->all(), [
            'name'        => 'required|string|max:100',
            'description' => 'nullable|string'
        ]);

         if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // 3. siapkan data yang ingin diupdate
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // 4. update data ke db
        $genre->update($data);

        return response()->json([
            "succsess" => true,
            "messege" => "Resourse updated successfully!",
            "data" => $genre
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::find($id);

        if (!$genre) {
            return response()->json([
            'succsess' => false,
            'messege' => "Resource not found",
        ], 404);
        }

        $genre->delete();

        return response()->json([
            'succsess' => true,
            'messege' => "Delee resource successfully",
        ]);
    }
}

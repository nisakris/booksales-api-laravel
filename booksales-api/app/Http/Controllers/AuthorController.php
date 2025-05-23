<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();

        if ($authors->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "succsess" => true,
            "messege" => "Get All Resourse",
            "data" => $authors
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
            'name'  => 'required|string|max:100',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'bio'   => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $photo = $request-> file('photo');
        $photo->store('authors', 'public');

        // 4. insert data
        $author =Author::create([
            'name' => $request->name,
            'photo' =>$photo->hashName(),
            'bio' => $request->bio,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Author created successfully.',
            'data' => $author
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
            'succsess' => false,
            'messege' => "Resource not found",
        ], 404);
        }

        return response()->json([
            'succsess' => true,
            'messege' => "Get detail resource",
            'data' => $author
        ], 200);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, Request $request)
    {
        // 1. cari data 
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
            'succsess' => false,
            'messege' => "Resource not found",
        ], 404);
        }

        // 2. validasi 
        $validator = Validator::make($request->all(), [
            'name'  => 'required|string|max:100',
            'photo' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'bio'   => 'nullable|string',
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
            'bio' => $request->bio,
        ];

        // 4. handel image (upload delete)
        if ($request-> hasFile('photo')) {
            $photo = $request->file('photo');
            $photo->store('authors', 'public');

            if ($author->photo){
                Storage::disk('public')->delete('authors/' . $author->photo);
            }

            $data['photo'] = $photo->hasName();
        }

        // 5. update data ke db
        $author->update($data);

        return response()->json([
            "succsess" => true,
            "messege" => "Resourse updated successfully!",
            "data" => $author
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::find($id);

        if (!$author) {
            return response()->json([
            'succsess' => false,
            'messege' => "Resource not found",
        ], 404);
        }

        if ($author->photo) {
            Storage::disk('public')->delete('authors/' . $author->photo);
        }

        $author->delete();

        return response()->json([
            'succsess' => true,
            'messege' => "Delee resource successfully",
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::with('user', 'book')->get();

        if ($transactions->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found!"
            ], 200);
        }

        return response()->json([
            "succsess" => true,
            "messege" => "Get All Resourse",
            "data" => $transactions
        ], 200);
    }

    public function store(Request $request) {
        // 1. validator & cek validator 
        $validator = Validator::make($request->all(), [
            'book_id' => 'required|exists:books,id',
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }
            
        // 2. generate orderNumber
        $uniqueCode = "ORD-" . strtoupper(uniqid());

        // 3. ambil user yang sedang login & cek login (apakah ada data user?)
        $user =auth('api')->user();
        if (!$user){
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized!'
            ], 401);
        }

        // 4. mencari data buku dari request 
        $book = Book::find($request->book_id);

        // 5. cek stok buku 
        if ($book->stock < $request->quantity) {
            return response()->json([
                'succsess' => false,
                'messege' => "Stok barang tidak cukup",
            ], 400);
        }

        // 6. hitung total harga = price * quantity 
        $totalAmount = $book->price * $request->quantity;

        // 7. kurangi stok buku
        $book->stock -= $request->quantity;
        $book->save();

        // 8. simpan data buku (update) 
        $transactions = Transaction::create([
            'order_number' => $uniqueCode,
            'customer_id' => $user->id,
            'book_id' => $book->id,
            'total_amount' => $totalAmount
        ]);

        return response()->json([
            "succsess" => true,
            "messege" => "Transaction created successfully",
            "data" => $transactions
        ], 201);
    }

    public function show(string $id)
    {
        $transaction = Transaction::with('user', 'book')->find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Get detail Transaction',
            'data' => $transaction
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        //1. cari data
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found',
            ], 404);
        }

        // 2. validasi 
        $validator = Validator::make($request->all(), [
            'quantity' => 'required|integer|min:1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        $book = Book::find($transaction->book_id);
        $newQuantity = $request->quantity;

        // 3. Hitung selisih
        $quantityNew = $newQuantity - $transaction->quantity;

        // 4. Jika selisih melebihi stok yang tersedia, tolak update
        if ($book->stock < $quantityNew) {
            return response()->json([
                'success' => false,
                'message' => 'Stok tidak cukup',
            ], 400);
        }

        // 5. Update stok
        $book->stock -= $quantityNew;
        $book->save();

        // 6. Update transaksi
        $transaction->quantity = $newQuantity;
        $transaction->total_amount = $book->price * $newQuantity;
        $transaction->save();

        return response()->json([
            'success' => true,
            'message' => 'Transaction updated successfully',
            'data' => $transaction
        ], 200);
    }

    public function destroy(string $id)
    {
        //1. cari data
        $transaction = Transaction::find($id);

        if (!$transaction) {
            return response()->json([
                'success' => false,
                'message' => 'Transaction not found',
            ], 404);
        }

        // 2. Kembalikan stok buku
        $book = Book::find($transaction->book_id);
        $book->stock += $transaction->quantity;
        $book->save();

        $transaction->delete();

        return response()->json([
            'success' => true,
            'message' => 'Transaction deleted successfully'
        ], 200);
    }
}

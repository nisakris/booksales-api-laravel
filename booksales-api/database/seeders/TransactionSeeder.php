<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'order_number' => 'ORD-0001',
            'customer_id' => 7,
            'book_id' => 1,
            'total_amount' => 50000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0002',
            'customer_id' => 2,
            'book_id' => 2,
            'total_amount' => 60000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0003',
            'customer_id' => 4,
            'book_id' => 3,
            'total_amount' => 40000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0004',
            'customer_id' => 3,
            'book_id' => 4,
            'total_amount' => 30000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0005',
            'customer_id' => 2,
            'book_id' => 5,
            'total_amount' => 50000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0006',
            'customer_id' => 2,
            'book_id' => 7,
            'total_amount' => 55000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0007',
            'customer_id' => 5,
            'book_id' => 6,
            'total_amount' => 60000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0009',
            'customer_id' => 6,
            'book_id' => 9,
            'total_amount' => 65000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0010',
            'customer_id' => 4,
            'book_id' => 8,
            'total_amount' => 65000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0011',
            'customer_id' => 3,
            'book_id' => 7,
            'total_amount' => 55000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0013',
            'customer_id' => 5,
            'book_id' => 5,
            'total_amount' => 50000.00,
        ]);
    }
}

<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodoSeeder extends Seeder
{
    public function run()
    {
        // Contoh data yang akan dimasukan ke tabel todos
        $data = [
            [
                'todo_title' => 'Learn HTML basics',
                'todo_description' => 'Study HTML tags, attributes, and basic structure.',
                'todo_status' => false,
            ],
            [
                'todo_title' => 'Practice CSS styling',
                'todo_description' => 'Experiment with CSS properties and selectors.',
                'todo_status' => false,
            ],
            [
                'todo_title' => 'Master JavaScript fundamentals',
                'todo_description' => 'Understand JavaScript syntax, functions, and DOM manipulation.',
                'todo_status' => false,
            ],
        ];

        // Masukan data ke tabal todos
        $this->db->table('todos')->insertBatch($data);
    }
}
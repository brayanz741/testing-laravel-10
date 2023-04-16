<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $document_type = new Status();
        $document_type->name = 'Inactivo';
        $document_type->save();

        $document_type = new Status();
        $document_type->name = 'Activo';
        $document_type->save();
    }
}

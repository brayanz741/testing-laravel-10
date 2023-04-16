<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $document_type = new DocumentType();
        $document_type->name = 'Documento Nacional de Identidad';
        $document_type->acronym = 'D.N.I.';
        $document_type->save();

        $document_type = new DocumentType();
        $document_type->name = 'Carné de Extranjeria';
        $document_type->acronym = 'C.E.';
        $document_type->save();

        $document_type = new DocumentType();
        $document_type->name = 'Registro único de Contribuyentes';
        $document_type->acronym = 'R.U.C';
        $document_type->save();

        $document_type = new DocumentType();
        $document_type->name = 'Pasaporte';
        $document_type->acronym = 'Pasaporte';
        $document_type->save();
    }
}

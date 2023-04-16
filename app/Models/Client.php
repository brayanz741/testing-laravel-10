<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'name',
    //     'document_type_id',
    //     'document',
    //     'check_digit',
    //     'address',
    //     'phone',
    //     'status'
    // ];

    protected $guarded = [];
}

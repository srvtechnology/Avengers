<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressModel extends Model
{
    use HasFactory;

     protected $table = 'address';
    protected $guarded = [];
}

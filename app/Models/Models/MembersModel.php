<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembersModel extends Model
{
    use HasFactory;

     protected $table = 'members';
    protected $guarded = [];
}


<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceAttrvalModel extends Model
{
    use HasFactory;

    protected $table = 'invoice_attrvals';
    protected $guarded = [];
}

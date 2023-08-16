<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert_cart_table extends Model
{
    use HasFactory;

    protected $table = 'orders_table';
    protected $primary_key = 'id';
    protected $timestmap = true;

    protected $guarded = [];

}

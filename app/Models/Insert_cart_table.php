<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insert_cart_table extends Model
{
    public $table = 'orders_table';
    public $primary_key = 'id';
    public $timestmap = true;
}

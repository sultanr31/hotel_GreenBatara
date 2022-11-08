<?php

namespace App\Models;

use CodeIgniter\Model;

class databaseModel extends Model
{
    protected $table            = 'customer';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['nama', 'tipe', 'cin', 'cout', 'telp', 'status', 'rating', 'layanan', 'total_tagihan', 'email'];
}
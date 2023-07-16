<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penumpang extends Model
{
    use HasFactory;

    protected $table ="tb_penumpang";
    protected $primaryKey ='pen_id';
    protected $guarded =[];

    public function transaksi():HasMany
    {
        return $this->hasMany(Transaksi::class, 'tran_id_pen', 'pen_id');
    }
}

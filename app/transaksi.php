<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transaksis';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_product', 'id_pelanggan', 'jumlah'];

 



    public function get_product(){
        return $this->belongsTo(product::class, 'id_product','id');
    }

    public function get_pelanggan(){
        return $this->belongsTo(pelanggan::class,'id_pelanggan','id');
    }
}

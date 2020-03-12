<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pelanggans';

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
    protected $fillable = ['namapelanggan', 'alamat', 'jeniskelamin', 'alamat', 'notelp'];

    public function get_pelanggan(){
       return $this->hasMany(transaksi::class);
    }
}

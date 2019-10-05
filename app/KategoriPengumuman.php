<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    protected $table='kategori_pengumuman';

    protected $fillable=[
    	'id','nama','users_id'
    ];

    protected $casts=[

    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    //
    protected $table='dokumen';
    protected $primaryKey='id';
    protected $fillable=['nama','jenis'];
}

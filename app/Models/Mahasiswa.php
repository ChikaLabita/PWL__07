<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswas'; //Eloquent akan membuat model Mahasiswa menyimpan record ditabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'nim'; // Memanggil isi DB dengan primaryKey
    /**
     * The attributes that are mass assignable
     *  @var array
     */
    protected $fillable= [
        'Nim',
        'Nama',
        'Kelas',
        'Jurusan',
        'No_Handphone',
    ];
}

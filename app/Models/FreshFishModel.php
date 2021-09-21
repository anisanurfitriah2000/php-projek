<?php
namespace App\Models;
use CodeIgniter\Model;
class FreshFishModel extends Model
{
    protected $table        ='tb_freshfish'; //nama tabel di database
    protected $primaryKey   ='id_ikan'; //field yang akan dijadikan PK

    protected $useAutoIncrement = true; //dibuat auto increment datanya
    protected $returnType ="object"; //nilai luarannya diformat ke object
    //field yang diijinkan untuk diakses yang ada di tabel database.
    protected $allowedFields = ['id_ikan', 'nama_ikan', 'harga', 'stok', 'status'];
}

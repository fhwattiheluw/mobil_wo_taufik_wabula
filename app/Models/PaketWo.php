<?php
namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class PaketWo extends Model
{
    protected $table = 'paket_wo';

    protected $fillable = [
        'id_user',
        'nama_paket',
        'harga',
        'spesifikasi',
        'status',
        'foto_paket1',
        'foto_paket2',
        'foto_paket3',
        'foto_paket4',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}

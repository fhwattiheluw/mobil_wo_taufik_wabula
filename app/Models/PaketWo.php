<?php
namespace App\Models;

use App\Models\User;
use App\Models\PortofolioWo;
use Illuminate\Database\Eloquent\Model;

class PaketWo extends Model
{
    protected $table = 'paket_wo';

    protected $guarded = ['id'];
    // protected $fillable = [
    //     'id_user',
    //     'nama_paket',
    //     'harga',
    //     'spesifikasi',
    //     'status',
    //     'foto_paket'
    // ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user')->withDefault();
    }

    public function portofolio_wo()
    {
      return $this->hasMany(PortofolioWo::class,'id_paket_wo');
    }
}

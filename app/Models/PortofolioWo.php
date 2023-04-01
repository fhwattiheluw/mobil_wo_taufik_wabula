<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PaketWo;

class PortofolioWo extends Model
{
    protected $table = "portofolio_wo";

    protected $guarded = ['id'];

    public function paket_wo()
    {
      return $this->belongsTo(PaketWo::class, 'id_paket_wo');
    }
}

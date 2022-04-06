<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Ouvrier extends Authenticatable{
    use HasFactory,  SoftDeletes, Notifiable;
    protected $fillable = [
        'id_zone_travail',
        'id_camion',
        'poste',
        'qrcode',
        'nom',
        'prenom',
        'CIN',
        'photo',
        'numero_telephone',
        'email',
    ];
    public function camion(){
        return $this->hasOne(Camion::class);
    }

    public function etablissement(){
        return $this->belongsTo(Etablissement::class);
    }
    protected $dates=['deleted_at'];
    protected $hidden = [
        'mot_de_passe',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}

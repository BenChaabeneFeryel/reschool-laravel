<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Commande_dechet extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'id_client_dechet',
        'quantite',
        'montant_total',
        'date_commande',
        'date_livraison',
    ];

    public function client_dechet()
    {
        return $this->hasOne(Client_dechet::class);
    }
        protected $dates=['deleted_at'];
}

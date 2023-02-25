<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prix',
        'description',
        'img',
        'user_id'
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $query->where('nom', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('prix', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship to User, créee une clé étrangère, une relation entre tes deux tables
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getOwner(){
        // $produits = user();
        // foreach ($produits as $produit){
        //     if($produit->id == )
        // }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    //Protected Sample

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'active'
    // ];

    //Guarded Sample needed validation
    protected $guarded = [];
    // tinanggal ung scope papuntang controller name active()
    public function scopeActive( $query )
    {
        return $query -> where( 'active', 1 );
    }
    //  tinanggal ung scope papuntang controller name inactive()
    public function scopeInactive( $query )
    {
        return $query -> where( 'active', 0 );
    }
}

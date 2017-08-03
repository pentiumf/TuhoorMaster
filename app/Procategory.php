<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procategory extends Model
{
    protected $fillable = [
        'name', 'img', 'prosection_id'
    ];
    
    
    public function section() {
        return $this->belongsTo('App\Prosection', 'prosection_id');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prosection extends Model
{
    protected $fillable = [
        'name'
    ];
    
    
    public function category() {
        return $this->hasMany('App\Procategory');
    }
    
    
}

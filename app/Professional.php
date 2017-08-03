<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{
    protected $fillable = [
        'user_id', 'procategory_id', 'membership_id', 'name', 'about', 'email', 'first_contact', 'second_contact', 'country_id', 'region', 'city', 'website', 'profile_photo', 'cover_photo', 'protype_id'
    ];
    
    
    public function country() {
        return $this->belongsTo('App\Country');
    }
    
    public function type() {
        return $this->belongsTo('App\Protype', 'protype_id');
    }
    
    public function membership() {
        return $this->belongsTo('App\Membership');
    }
    
    public function user() {
        return $this->belongsTo('App\user');
    }
    
    public function category() {
        return $this->belongsTo('App\Procategory', 'procategory_id');
    }
}

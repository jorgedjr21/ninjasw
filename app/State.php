<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    //

    protected $table = 'countries';

    protected $fillable = ['country_id','name','code'];

    public $timestamps = false;

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function cities(){
        return $this->hasMany(City::class);
    }

}

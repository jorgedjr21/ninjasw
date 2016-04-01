<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //
    protected $table = 'countries';

    protected $fillable = ['name','code'];

    public $timestamps = false;


    public function state(){
        return $this->hasMany(State::class);
    }
}

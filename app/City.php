<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //

    protected $table = 'cities';

    protected $fillable = ['state_id','name'];


    public $timestamps = false;


    public function state(){
        return $this->belongsTo(State::class);
    }

    public function startup_city(){
        return $this->hasMany(Startup::class);
    }

    public function student_city(){
        return $this->hasMany(Student::class);
    }
}

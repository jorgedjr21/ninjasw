<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class Startup extends Model
{
    //
    protected  $table = 'startups';

    protected $fillable = ['user_id','city_id','CNPJ','description','ninja_responsible','ninja_responsible_email','where_know_ninja'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function occupations(){
        return $this->belongsToMany(Occupation::class,'startup_occupations','startup_id','occupation_id');
    }

    public function programs(){
        return $this->belongsToMany(Program::class,'startup_programs','startup_id','program_id');
    }

}

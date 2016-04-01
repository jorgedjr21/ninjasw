<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $table = 'students';

    protected $fillable = ['user_id','city_id','occupation_id','university','course','grade','resume','skills','github','linkedin','student_phrase'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function city(){
        return $this->belongsTo(City::class);
    }

    public function occupation(){
        return $this->hasMany(Occupation::class);
    }

    public function programs(){
        return $this->belongsToMany(Program::class,'student_programs','student_id','program_id');
    }

}

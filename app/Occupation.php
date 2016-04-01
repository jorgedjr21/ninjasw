<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    //

    protected $table = 'occupations';


    protected $fillable = 'oname';


    public function student_occupation(){
        return $this->belongsTo(Student::class);
    }

    public function startup_occupations(){
        return $this->belongsToMany(Startup::class,'startup_occupations','occupation_id','startup_id');
    }
}

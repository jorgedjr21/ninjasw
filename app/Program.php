<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    //

    protected $table = 'programs';

    protected $fillable = ['name','begin_date','end_date','workload','description','informations','is_avaible'];

    public function students(){
        return $this->belongsToMany(Student::class,'student_programs','program_id','student_id');
    }

    public function startups(){
        return $this->belongsToMany(Startup::class,'startup_programs','proram_id','startup_id');
    }

    public function startup_questions(){
        return $this->belongsToMany(StartupQuestion::class,'program_startup_questions','program_id','question_id');
    }

    public function student_questions(){
        return $this->belongsToMany(StudentQuestion::class,'program_students_questions','program_id','question_id');
    }


}

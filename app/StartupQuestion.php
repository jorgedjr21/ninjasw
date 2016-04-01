<?php

namespace NinjaSJ;

use Illuminate\Database\Eloquent\Model;

class StartupQuestion extends Model
{
    //

    protected $table = 'startup_questions';

    protected $fillable = ['question','obs','input_size','is_required'];
}

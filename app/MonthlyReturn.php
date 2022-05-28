<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyReturn extends Model
{
    protected $fillable = ['year', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'];
}

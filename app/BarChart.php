<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarChart extends Model
{
    protected $fillable = ['labels_1', 'label_1', 'data_1', 'labels_2', 'label_2', 'data_2', 'labels_3', 'label_3', 'data_3'];
}

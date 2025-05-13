<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DashboardBlock extends Model
{
    protected $table = 'dashboard_blocks';

    protected $fillable = [
        'name',
        'block',
        'width',
        'order',
    ];
}

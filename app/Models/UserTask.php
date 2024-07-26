<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    use Hasfactory;
    protected $table = 'user_task';
    protected $guarded = [];
}
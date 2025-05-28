<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Donor extends Model
{
    use Billable;

    protected $fillable = ['email'];
    public $timestamps = false;
}

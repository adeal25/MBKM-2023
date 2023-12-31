<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_id',
        'item_id',
        'quantity'
    ];
}

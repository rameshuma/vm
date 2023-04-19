<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceDetails extends Model
{
    use HasFactory;
    protected $table ='insurance_details';
    protected $fillable =
    [
         "employee_no","coverage_from_date","coverage_to_date"
    ];
}

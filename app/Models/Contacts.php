<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Students;
class Contacts extends Model
{
    public function students(){
        return $this->belongsTo(Students::class,'student_id');
    }
}

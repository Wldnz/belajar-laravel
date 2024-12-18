<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Contacts;
class Students extends Model
{
    // use HasFactory;

    protected $table = "students";

    public function contacts(){
        return $this->hasOne(Contacts::class,'id');
    }

    public function AllContacts(){
        return $this->select('*');
    }

}
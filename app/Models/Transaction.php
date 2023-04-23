<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function clients() {
        return $this->belongsTo("App\Models\Client", "idClient");
    }

    public function employees() {
        return $this->belongsTo("App\Models\Employee", "idEmployee");
    }
}

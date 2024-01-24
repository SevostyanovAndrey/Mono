<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'color', 'numberAuto', 'client_id'
    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
}

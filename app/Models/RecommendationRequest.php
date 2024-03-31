<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendationRequest extends Model
{
    use HasFactory;

    protected $fillable = ['month', 'client_id'];

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function recommendation()
    {
        return $this->hasOne(Recommendation::class, 'request_id');
    }
}

<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recommendation extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'admin_id', 'request_id'];

    public function client() {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function admin() {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function request() {
        return $this->belongsTo(RecommendationRequest::class, 'request_id');
    }

    public function recommendedBooks() {
        return $this->hasMany(RecommendedBook::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class HelpGuide extends Model
{
    protected $fillable = [
        'link',
        'description',
        'user_id',
    ];

    // Define the relationship between HelpGuide and User model (belongsTo)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

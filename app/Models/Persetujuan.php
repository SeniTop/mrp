<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Persetujuan extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = ['user_id', 'setuju', 'tidak'];

    protected $searchableFields = ['*'];

    protected $casts = [
        'setuju' => 'boolean',
        'tidak' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mrpPost()
    {
        return $this->hasOne(MrpPost::class);
    }
}

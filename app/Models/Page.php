<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public function documents()
    {
        return $this->hasMany(\App\Models\Document::class, 'page_id', 'id');
    }
}

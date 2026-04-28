<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['clinic_id', 'name', 'document_number', 'specialty', 'phone', 'email'])]
class Professional extends Model
{
    use HasFactory, SoftDeletes;

    public function clinic(): BelongsTo
    {
        return $this->belongsTo(Clinic::class);
    }
}

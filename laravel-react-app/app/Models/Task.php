<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskName',
        'description',
        'community',
        'status',
        'deadline',
        'project_id',
    ];


    /**
     * The project that belong to the role.
     */
    public function project(): belongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * The project that belong to the role.
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();;
    }
}


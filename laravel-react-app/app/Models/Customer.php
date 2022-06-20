<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'company_name', 'address'];


    /**
     * @return HasOne
     */
    public function project()
    {
        return $this->hasOne(Project::class);
    }

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

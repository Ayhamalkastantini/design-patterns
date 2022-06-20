<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Project extends Model
{
    use HasFactory;

    public const IN_PROGRESS = 'In progress';
    public const TO_DO = 'To do';
    public const DONE = 'Done';

    public const PROJECT_STATUS = [
        self::IN_PROGRESS,
        self::TO_DO,
        self::DONE,
    ];
    protected $fillable = ['title', 'description', 'company_name','status','deadline'];


    /**
     * The users that belong to the role.
     */
    public function Tasks(): BelongsToMany
    {
        return $this->belongsToMany(Task::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

}

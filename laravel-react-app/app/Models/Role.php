<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    //User roles
    public const ADMIN = 'Admin';
    public const DEVELOPER = 'Developer';
    public const CUSTOMER = 'Customer';

    public const ROLE_NAME = [
        self::ADMIN,
        self::DEVELOPER,
        self::CUSTOMER,
    ];

    /**
     * The users that belong to the role.
     */
    public function users():HasMany
    {
        return $this->hasMany(User::class);
    }
}

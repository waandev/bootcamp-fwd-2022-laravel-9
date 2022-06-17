<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'permission';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // many to many
    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    // one to many
    public function permission_role()
    {
        return $this->hasMany(PermissionRole::class, 'permission_id');
    }
}

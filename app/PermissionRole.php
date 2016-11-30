<?php

namespace SisCad;

use Illuminate\Database\Eloquent\Model;

class PermissionRole extends Model
{
    protected $fillable = [
        'role_id',
        'permission_id' 
    ];
    
    protected $table = 'permission_role';

    /**
     * many-to-many relationship method.
     *
     * @return QueryBuilder
     */
    public function roles()
    {
        return $this->hasMany('SisCad\Role');
    }

    /**
     * many-to-many relationship method.
     *
     * @return QueryBuilder
     */
    public function permissions()
    {
        return $this->hasMany('SisCad\Permission');
    }
}

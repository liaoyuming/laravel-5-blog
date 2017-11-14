<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	//
    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'desc',
        'photo',
        'remember_token',
    ];

    public function getIsAdminAttribute()
    {
        return true;
    }
}

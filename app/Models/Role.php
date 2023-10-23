<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];


    public function user()
    {
        return $this->hasMany(User::class);
    }

    public static function createRole($data){
        $role = new self;

        $role->title = $data['title'];

        $role->save();
        return $role;
    }

    public static function deleteRole($id){
        $role = self::find($id);
        $role->delete();
        return $role;
    }  

    public static function updateRole($data, $id){
        $role = self::find($id);

        $role->title = $data['title'];

        $role->save();
        return $role;
    }
}

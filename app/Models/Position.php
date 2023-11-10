<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Auth;

class Position extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'position';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'status',
        'created_by',
    ];

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
    
    public static function createPosition($data){
        $position = new self;

        $position->title = $data['title'];
        $position->status = $data['status'];
        $position->created_by =  Auth::user()->id;

        $position->save();
        return $position;
    }

    public static function deletePosition($id){
        $position = self::find($id);
        $position->delete();
        return $position;
    }

    public static function updatePosition($data, $id){
        $position = self::find($id);

        $position->title = $data['title'];
        $position->status = $data['status'];
        $position->created_by = Auth::user()->id;

        $position->save();
        return $position;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnnualLeave extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request_annual_leave';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_employee',
        'quota',
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public static function createAnnualLeave($data){
        $annual_leave = new self;

        $annual_leave->id_employee = $data['id_employee'];
        $annual_leave->quota = $data['quota'];

        $annual_leave->save();
        return $annual_leave;
    }

    public static function deleteAnnualLeave($id){
        $annual_leave = self::find($id);
        $annual_leave->delete();
        return $annual_leave;
    }

    public static function updateAnnualLeave($data, $id){
        $annual_leave = self::find($id);

        $annual_leave->id_employee = $data['id_employee'];
        $annual_leave->quota = $data['quota'];

        $annual_leave->save();
        return $annual_leave;
    }
}

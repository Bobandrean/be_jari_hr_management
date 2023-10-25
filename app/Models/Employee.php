<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\RequestLeave;
use App\Models\AnnualLeave;
use Illuminate\Support\Facades\Auth;

class Employee extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'birth_date',
        'location_birth',
        'location_exist',
        'address',
        'url_avatar',
        'join_date',
        'position_id',
        'nik',
        'salary',
        'email',
        'phone_number',
        'status',
        'created_by',
    ];

    public function annual_leave()
    {
        return $this->hasMany(AnnualLeave::class);
    }

    public function request_leave()
    {
        return $this->hasMany(RequestLeave::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public static function createEmployee($data){
        $employee = new self;

        $employee->full_name = $data['full_name'];
        $employee->birth_date = $data['birth_date'];
        $employee->location_birth = $data['location_birth'];
        $employee->location_exist = $data['location_exist'];
        $employee->address = $data['address'];
        $employee->url_avatar = $data['url_avatar'];
        $employee->join_date = $data['join_date'];
        $employee->position_id = $data['position_id'];
        $employee->nik = $data['nik'];
        $employee->salary = $data['salary'];
        $employee->email = $data['email'];
        $employee->phone_number = $data['phone_number'];
        $employee->status = $data['status'];
        $employee->created_by = Auth::User()->id;

        $employee->save();
        return $employee;
    }

    public static function deleteEmployee($id){
        $employee = self::find($id);
        $employee->delete();

        return $employee;
    }

    public static function updateEmployee($data, $id){
        $employee = self::find($id);

        $employee->full_name = $data['full_name'];
        $employee->birth_date = $data['birth_date'];
        $employee->location_birth = $data['location_birth'];
        $employee->location_exist = $data['location_exist'];
        $employee->address = $data['address'];
        $employee->url_avatar = $data['url_avatar'];
        $employee->join_date = $data['join_date'];
        $employee->position_id = $data['position_id'];
        $employee->nik = $data['nik'];
        $employee->salary = $data['salary'];
        $employee->email = $data['email'];
        $employee->phone_number = $data['phone_number'];
        $employee->status = $data['status'];
        $employee->created_by = Auth::User()->id;

        $employee->save();
        return $employee;
    }
}

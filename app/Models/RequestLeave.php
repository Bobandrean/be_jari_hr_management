<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestLeave extends Model
{
    use HasFactory;

        /**
	 * The table associated with the model.
	 *
	 * @var string
	 */
	protected $table = 'request_leave';

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_employee',
        'leave_from',
        'leave_to',
        'status',
        'is_approved',
        'reject_remark',
        'created_by',
        'updated_by',
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public static function createRequestLeave($data){
        $request_leave = new self;

        $request_leave->id_employee = $data['id_employee'];
        $request_leave->leave_from = $data['leave_from'];
        $request_leave->leave_to = $data['leave_to'];
        $request_leave->status = $data['status'];
        $request_leave->is_approved = $data['is_approved'];
        $request_leave->reject_remark = $data['reject_remark'];
        $request_leave->created_by = $data['created_by'];
        $request_leave->updated_by = $data['updated_by'];

        $request_leave->save();
        return $request_leave;
    }

    public static function deleteRequestLeave($id){
        $request_leave = self::find($id);
        $request_leave->delete();
        return $request_leave;
    }

    public static function updateRequestLeave($data, $id){
        $request_leave = self::find($id);

        $request_leave->id_employee = $data['id_employee'];
        $request_leave->leave_from = $data['leave_from'];
        $request_leave->leave_to = $data['leave_to'];
        $request_leave->status = $data['status'];
        $request_leave->is_approved = $data['is_approved'];
        $request_leave->reject_remark = $data['reject_remark'];
        $request_leave->created_by = $data['created_by'];
        $request_leave->updated_by = $data['updated_by'];

        $request_leave->save();
        return $request_leave;
    }
}

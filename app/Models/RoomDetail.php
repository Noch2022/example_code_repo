<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class RoomDetail extends Model
{
    use HasFactory;
    protected $table = 'room_detail';
    protected $fillable = ['id','room_id','stu_id','author','status','created_at','updated_at'];
}

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Privilledges extends Model
{
    use HasFactory;
    protected $table = 'privilledges';
    protected $fillable = ['id','slug','title'];
}

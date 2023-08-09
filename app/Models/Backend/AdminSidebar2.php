<?php
namespace App\Models\Backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class AdminSidebar2 extends Model
{
    use HasFactory;
    protected $table = 'admin_sidebar2';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name','sidebar1_id', 'seq','is_active'
    ];
}

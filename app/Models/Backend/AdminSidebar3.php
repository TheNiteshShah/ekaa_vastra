<?php
namespace App\Models\Backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class AdminSidebar3 extends Model
{
    use HasFactory;
    protected $table = 'admin_sidebar3';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'url', 'sidebar2_id', 'seq', 'icon','is_active'
    ];
}

<?php
namespace App\Models\Backend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class AdminSidebar1 extends Model
{
    use HasFactory;
    protected $table = 'admin_sidebar1';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'url', 'icon', 'seq','routes','is_active'
    ];
}

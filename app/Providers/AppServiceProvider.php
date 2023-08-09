<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Models\Backend\AdminSidebar1;
use App\Models\Institute\InstituteSidebar1;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    /**
     * Bootstrap any application services.
     *
     * 
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
            $Admin = Auth::guard('web')->user();
            $institute = Auth::guard('institute')->user();
            if (!empty($Admin)) {
                $permission = array_map('intval', json_decode($Admin->services));
                if ($permission == [999]) {
                    $sidebar1 = AdminSidebar1::OrderBy('seq', 'asc')->where(array('is_active' => 1))->get();
                } else {
                    $sidebar1 = AdminSidebar1::OrderBy('seq', 'asc')->where(array('is_active' => 1))->whereIn('id', $permission)->get();
                }
                $view->with(array('sidebar1' => $sidebar1));
            }
            if (!empty($institute)) {
                $sidebar1 = InstituteSidebar1::OrderBy('seq', 'asc')->where(array('is_active' => 1))->get();
                $view->with(array('sidebar1' => $sidebar1));
            }
        });
    }
}

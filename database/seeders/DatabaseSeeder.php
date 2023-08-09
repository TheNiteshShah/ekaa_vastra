<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Backend\AdminTeams;
use App\Models\Backend\AdminSidebar1;
use App\Models\Backend\AdminSidebar2;
use App\Models\Backend\AdminSidebar3;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        //------Admin teams -------
        $user = AdminTeams::create([
            'name' => 'Super Admin',
            'email' => 'super@admin.com',
            'password' => Hash::make('qwer1234'),
            'services' => json_encode(["999"]),
            'power' => 1,
            'phone' => 9999999999,
            'address' => 'Earth',
        ]);
        //------ Dashboard -------

        $side1 = AdminSidebar1::create([
            'name' => 'Dashboard',
            'url' => 'home',
            'icon' => 'iconsminds-shop-4',
            'seq' => 1,
        ]);
        //------ Management -------

        $side1 = AdminSidebar1::create([
            'name' => 'Management',
            'url' => '#Management',
            'icon' => 'iconsminds-digital-drawing',
            'seq' => 2,
            'routes' => 'team',
        ]);
        $side1 = AdminSidebar2::create([
            'sidebar1_id' => '2',
            'name' => 'Teams',
            'seq' => 1,
        ]);
        $side1 = AdminSidebar3::create([
            'sidebar2_id' => '1',
            'name' => 'Add Team',
            'icon' => 'simple-icon-user-follow',
            'seq' => 1,
            'url' => 'team.create',
        ]);
        $side1 = AdminSidebar3::create([
            'sidebar2_id' => '1',
            'name' => 'View Teams',
            'icon' => 'simple-icon-user-following',
            'seq' => 2,
            'url' => 'team.index',
        ]);
        //------ Web Slider -------

        $side1 = AdminSidebar1::create([
            'name' => 'Web Slider',
            'url' => '#Web Slider',
            'icon' => 'iconsminds-photo',
            'seq' => 3,
            'routes' => 'web_slider',
        ]);
        $side1 = AdminSidebar2::create([
            'sidebar1_id' => '3',
            'name' => 'Web Slider',
            'seq' => 1,
        ]);
        $side1 = AdminSidebar3::create([
            'sidebar2_id' => '2',
            'name' => 'Add Slider',
            'icon' => 'simple-icon-note',
            'seq' => 1,
            'url' => 'web_slider.create',
        ]);
        $side1 = AdminSidebar3::create([
            'sidebar2_id' => '2',
            'name' => 'View Slider',
            'icon' => 'simple-icon-doc',
            'seq' => 2,
            'url' => 'web_slider.index',
        ]);
    }
}

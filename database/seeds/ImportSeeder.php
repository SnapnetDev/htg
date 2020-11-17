<?php

use Illuminate\Database\Seeder;

class ImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $pc=\App\PermissionCategory::updateorcreate(['name'=>'Import']);
        $permission_1=\App\Permission::create(['permission_category_id'=>$pc->id,'constant'=>'manage_import','name'=>'Manage Import']);

    }

}

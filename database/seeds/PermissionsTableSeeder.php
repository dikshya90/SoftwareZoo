<?php

use App\Model\Admin\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permissions::truncate();
        $values = [
            ['permission' => 'permission-view', 'per_com_id' => 1],
            ['permission' => 'permission-add', 'per_com_id' => 1],
            ['permission' => 'permission-edit', 'per_com_id' => 1],
            ['permission' => 'permission-delete', 'per_com_id' => 1],
            ['permission' => 'permission-access', 'per_com_id' => 1],

            ['permission' => 'role-view', 'per_com_id' => 2],
            ['permission' => 'role-add', 'per_com_id' => 2],
            ['permission' => 'role-edit', 'per_com_id' => 2],
            ['permission' => 'role-delete', 'per_com_id' =>2],
            ['permission' => 'role-access', 'per_com_id' =>2],

            ['permission' => 'category-access', 'per_com_id' =>3],
            ['permission' => 'category-view', 'per_com_id' =>3],
            ['permission' => 'category-add', 'per_com_id' =>3],
            ['permission' => 'category-edit', 'per_com_id' =>3],
            ['permission' => 'category-delete', 'per_com_id' =>3],

            ['permission' => 'user-access', 'per_com_id' =>4],
            ['permission' => 'user-view', 'per_com_id' =>4],
            ['permission' => 'user-add', 'per_com_id' =>4],
            ['permission' => 'user-edit', 'per_com_id' =>4],
            ['permission' => 'user-delete', 'per_com_id' =>4],


            ['permission' => 'animal-access', 'per_com_id' =>5],
            ['permission' => 'animal-view', 'per_com_id' =>5],
            ['permission' => 'animal-add', 'per_com_id' =>5],
            ['permission' => 'animal-edit', 'per_com_id' =>5],
            ['permission' => 'animal-delete', 'per_com_id' =>5],

            ['permission' => 'mammal-access', 'per_com_id' =>6],
            ['permission' => 'mammal-view', 'per_com_id' =>6],
            ['permission' => 'mammal-add', 'per_com_id' =>6],
            ['permission' => 'mammal-edit', 'per_com_id' =>6],
            ['permission' => 'mammal-delete', 'per_com_id' =>6],

            ['permission' => 'bird-access', 'per_com_id' =>7],
            ['permission' => 'bird-view', 'per_com_id' =>7],
            ['permission' => 'bird-add', 'per_com_id' =>7],
            ['permission' => 'bird-edit', 'per_com_id' =>7],
            ['permission' => 'bird-delete', 'per_com_id' =>7],

            ['permission' => 'fish-access', 'per_com_id' =>8],
            ['permission' => 'fish-view', 'per_com_id' =>8],
            ['permission' => 'fish-add', 'per_com_id' =>8],
            ['permission' => 'fish-edit', 'per_com_id' =>8],
            ['permission' => 'fish-delete', 'per_com_id' =>8],

            ['permission' => 'amphi-reptile-access', 'per_com_id' =>9],
            ['permission' => 'amphi-reptile-view', 'per_com_id' =>9],
            ['permission' => 'amphi-reptile-add', 'per_com_id' =>9],
            ['permission' => 'amphi-reptile-edit', 'per_com_id' =>9],
            ['permission' => 'amphi-reptile-delete', 'per_com_id' =>9],

            ['permission' => 'enquiry-access', 'per_com_id' =>10],
            ['permission' => 'enquiry-view', 'per_com_id' =>10],
            ['permission' => 'enquiry-add', 'per_com_id' =>10],
            ['permission' => 'enquiry-edit', 'per_com_id' =>10],
            ['permission' => 'enquiry-delete', 'per_com_id' =>10],

            ['permission' => 'ticket-access', 'per_com_id' =>11],
            ['permission' => 'ticket-view', 'per_com_id' =>11],
            ['permission' => 'ticket-add', 'per_com_id' =>11],
            ['permission' => 'ticket-edit', 'per_com_id' =>11],
            ['permission' => 'ticket-delete', 'per_com_id' =>11],

            ['permission' => 'sponsor-access', 'per_com_id' =>12],
            ['permission' => 'sponsor-view', 'per_com_id' =>12],
            ['permission' => 'sponsor-add', 'per_com_id' =>12],
            ['permission' => 'sponsor-edit', 'per_com_id' =>12],
            ['permission' => 'sponsor-delete', 'per_com_id' =>12],

        ];

        foreach ($values as $value) {
            Permissions::create($value);
        }
    }
}

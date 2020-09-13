<?php

use App\Model\Admin\Bird;
use App\Model\Admin\Category;
use App\Model\Admin\Fish;
use App\Model\Admin\Mammal;
use App\Model\Admin\PermissionComponents;
use App\Model\Admin\Permissions;
use App\Model\Admin\Reptiles;
use App\Model\Admin\Role;
use App\User;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

// home page
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// breadcrumbs for permission components
// for index page
Breadcrumbs::for('permission_component.index', function($trail) {
    $trail->parent('home');
    $trail->push('Permission Components', route('permission_component.index'));
});

// create breadcrumbs for permission components
Breadcrumbs::for('permission_component.create', function($trail){
    $trail->parent('permission_component.index');
    $trail->push('Add Permission Component', route('permission_component.create'));
});

// breadcrumb to edit permission components
Breadcrumbs::for('permission_component.edit', function ($trail, $id) {
    $permissionCom = PermissionComponents::find($id);
    $trail->parent('permission_component.index');
    $trail->push($permissionCom->permission_component, route('permission_component.edit', $permissionCom->permission_component));
});

// Role Breadcrumb
// for index page
Breadcrumbs::for('role.index', function($trail) {
    $trail->parent('home');
    $trail->push('Roles', route('role.index'));
});

// for adding new role
Breadcrumbs::for('role.create', function($trail){
    $trail->parent('role.index');
    $trail->push('Add Role', route('role.create'));
});

// for editing roles
Breadcrumbs::for('role.edit', function ($trail, $id) {
    $role = Role::find($id);
    $trail->parent('role.index');
    $trail->push($role->role, route('role.edit', $role->role));
});

// Permission Breadcrumb
// for index page of permission
Breadcrumbs::for('permission.index', function($trail) {
    $trail->parent('home');
    $trail->push('Permission', route('permission.index'));
});

// Breadcrumb for creating permission
Breadcrumbs::for('permission.create', function($trail){
    $trail->parent('permission.index');
    $trail->push('Add Permission', route('permission.create'));
});

// Breadcrumb to edit permission
Breadcrumbs::for('permission.edit', function ($trail, $id) {
    $permission = Permissions::find($id);
    $trail->parent('permission.index');
    $trail->push($permission->permission, route('permission.edit', $permission->permission));
});

// Breadcrumb to view the list of category
Breadcrumbs::for('category.index', function($trail) {
    $trail->parent('home');
    $trail->push('Category', route('category.index'));
});

// Breadcrumb to create new category
Breadcrumbs::for('category.create', function($trail) {
    $trail->parent('home');
    $trail->push('Category', route('category.create'));
});

// Breadcrumb to edit category
Breadcrumbs::for('category.edit', function ($trail, $id) {
    $category = Category::find($id);
    $trail->parent('category.index');
    $trail->push($category->name, route('category.edit', $category->name));
});

// Breadcrumb for users
// for index page of user
Breadcrumbs::for('user.index', function($trail) {
    $trail->parent('home');
    $trail->push('Users', route('user.index'));
});

// Breadcrumbs for creating user
Breadcrumbs::for('user.create', function($trail) {
    $trail->parent('home');
    $trail->push('User', route('user.create'));
});

// Breadcrumb for editing user
Breadcrumbs::for('user.edit', function ($trail, $id) {
    $user = User::find($id);
    $trail->parent('user.index');
    $trail->push($user->name, route('user.edit', $user->name));
});

// for mammals
// index of mammal
Breadcrumbs::for('mammal.index', function($trail) {
    $trail->parent('home');
    $trail->push('Mammal', route('mammal.index'));
});

// create mammal
Breadcrumbs::for('mammal.create', function($trail) {
    $trail->parent('home');
    $trail->push('Mammal', route('mammal.create'));
});

// edit mammals
Breadcrumbs::for('mammal.edit', function ($trail, $id) {
    $mammal = Mammal::find($id);
    $trail->parent('mammal.index');
    $trail->push($mammal->name, route('mammal.edit', $mammal->name));
});

// trashed mammal
Breadcrumbs::for('mammal.trashed', function ($trail) {
    $trail->parent('mammal.index');
    $trail->push('Trash Mammal', route('mammal.trashed'));
});

// bird index
Breadcrumbs::for('bird.index', function($trail) {
    $trail->parent('home');
    $trail->push('Birds', route('bird.index'));
});

// create bird breadcrumb
Breadcrumbs::for('bird.create', function($trail) {
    $trail->parent('home');
    $trail->push('Birds', route('bird.create'));
});

// edit bird details
Breadcrumbs::for('bird.edit', function ($trail, $id) {
    $bird = Bird::find($id);
    $trail->parent('bird.index');
    $trail->push($bird->name, route('bird.edit', $bird->name));
});

// trashed birds
Breadcrumbs::for('bird.trashed', function ($trail) {
    $trail->parent('bird.index');
    $trail->push('Trash Bird', route('bird.trashed'));
});


// for index of fish
Breadcrumbs::for('fish.index', function($trail) {
    $trail->parent('home');
    $trail->push('Fish', route('fish.index'));
});

// to create fish
Breadcrumbs::for('fish.create', function($trail) {
    $trail->parent('home');
    $trail->push('Fish', route('fish.create'));
});

// to edit fish
Breadcrumbs::for('fish.edit', function ($trail, $id) {
    $fish = Fish::find($id);
    $trail->parent('fish.index');
    $trail->push($fish->name, route('fish.edit', $fish->name));
});

// trashed fish
Breadcrumbs::for('fish.trashed', function ($trail) {
    $trail->parent('fish.index');
    $trail->push('Trashed Fish', route('fish.trashed'));
});

// for index of reptile and amphibians
Breadcrumbs::for('reptileAmphibian.index', function($trail) {
    $trail->parent('home');
    $trail->push('Reptile and Amphibians', route('reptileAmphibian.index'));
});

// for creating reptiles and amphibians
Breadcrumbs::for('reptileAmphibian.create', function($trail) {
    $trail->parent('home');
    $trail->push('Reptile and Amphibians', route('reptileAmphibian.create'));
});

// for editing the information of reptiles and amphibians
Breadcrumbs::for('reptileAmphibian.edit', function ($trail, $id) {
    $reptile = Reptiles::find($id);
    $trail->parent('reptileAmphibian.index');
    $trail->push($reptile->name, route('reptileAmphibian.edit', $reptile->name));
});

// for trashed reptile data
Breadcrumbs::for('reptileAmphibian.trashed', function ($trail) {
    $trail->parent('reptileAmphibian.index');
    $trail->push('Trashed Reptiles and Amphibians', route('reptileAmphibian.trashed'));
});

// to view the booked tickets
Breadcrumbs::for('viewTickets', function($trail) {
    $trail->parent('home');
    $trail->push('View the booked tickets', route('viewTickets'));
});

// to view the sponsors
Breadcrumbs::for('viewSponsors', function($trail) {
    $trail->parent('home');
    $trail->push('View the sponsors', route('viewSponsors'));
});


// breadcrumbs for enquiries
// for index page of enquiries
Breadcrumbs::for('enquiry.index', function($trail) {
    $trail->parent('home');
    $trail->push('Enquiries', route('enquiry.index'));
});


?>

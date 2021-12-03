<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Carbon\Carbon;


class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'admin.home.index', 'admin.about.index', 'admin.about.create', 'admin.about.store', 'admin.about.destroy', 'admin.about.edit', 
            'admin.about.update', 'admin.blog.index', 'admin.blog.create', 'admin.blog.store', 'admin.blog.destroy', 'admin.blog.edit', 'admin.blog.update', 
            'admin.catalog.index', 'admin.catalog.create', 'admin.catalog.store', 'admin.catalog.destroy', 'admin.catalog.edit', 'admin.catalog.update', 
            'admin.category.index', 'admin.category.create', 'admin.category.store', 'admin.category.destroy', 'admin.category.edit', 'admin.category.update', 
            'admin.contact.index', 'admin.contact.destroy', 'admin.dashboard', 'admin.logout.perform', 'admin.permissions.index', 'admin.permissions.store', 
            'admin.permissions.create', 'admin.permissions.destroy', 'admin.permissions.update', 'admin.permissions.show', 'admin.permissions.edit', 'admin.posts.index', 
            'admin.posts.store', 'admin.posts.create', 'admin.posts.destroy', 'admin.posts.edit', 'admin.posts.show', 'admin.posts.update', 'admin.product.index', 
            'admin.product.create', 'admin.product.store', 'admin.product.destroy', 'admin.product.edit', 'admin.product.show', 'admin.product.update', 'admin.roles.store', 
            'admin.roles.index', 'admin.roles.create', 'admin.roles.show', 'admin.roles.update', 'admin.roles.destroy', 'admin.roles.edit', 'admin.service.index', 'admin.service.create', 
            'admin.service.store', 'admin.service.destroy', 'admin.service.edit', 'admin.service.update', 'admin.site-setting', 'admin.site-setting.update', 'admin.slider.index', 
            'admin.slider.create', 'admin.slider.store', 'admin.slider.destroy', 'admin.slider.edit', 'admin.slider.update', 'admin.subcategory.index', 
            'admin.subcategory.create', 'admin.subcategory.store', 'admin.subcategory.destroy', 'admin.subcategory.edit', 'admin.subcategory.update', 'admin.testimonial.index', 
            'admin.testimonial.create', 'admin.testimonial.store', 'admin.testimonial.destroy', 'admin.testimonial.edit', 'admin.testimonial.update', 'admin.users.index',
            'admin.users.create', 'admin.users.store', 'admin.users.destroy', 'admin.users.edit', 'admin.users.show', 'admin.users.update', 'admin.video.index', 'admin.video.create', 
            'admin.video.store', 'admin.video.destroy', 'admin.video.edit', 'admin.video.update'
        ];
    

        foreach($permissions as $key=>$permission){
            $permission = Permission::create([
                'name' => $permission, 
                'guard_name' => 'web',
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString()
            ]);
        }
        
    }
}

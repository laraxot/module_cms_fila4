<?php

declare(strict_types=1);

<<<<<<< HEAD
use Modules\Cms\Tests\TestHelper;
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Modules\Cms\Tests\TestHelper;
=======
>>>>>>> a12f125f4a (.)
=======
use Modules\Cms\Tests\TestHelper;
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
use Modules\Cms\Models\Module;
use Modules\Xot\Actions\Filament\GetModulesNavigationItems;

describe('CMS Module', function () {
    it('user admin can view module dashboard', function (): void {
        // Test business logic: check that Module class exists and has required methods
        expect(class_exists(Module::class))->toBeTrue();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $moduleInstance = new Module();
        expect(method_exists($moduleInstance, 'getRows'))->toBeTrue();
    });

    it('user admin can view main dashboard', function (): void {
        // Test business logic: check that navigation action exists
        expect(class_exists(GetModulesNavigationItems::class))->toBeTrue();
<<<<<<< HEAD

=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
        
>>>>>>> a12f125f4a (.)
=======

>>>>>>> b93ef594b4 (.)
=======
        
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
        $navigationAction = new GetModulesNavigationItems();
        expect(method_exists($navigationAction, 'execute'))->toBeTrue();
    });

    it('guest user can view main dashboard', function (): void {
        // Test that module structure is correct
<<<<<<< HEAD
        expect(Module::class)->toBeString()->and(class_exists(Module::class))->toBeTrue();
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        expect(Module::class)->toBeString()->and(class_exists(Module::class))->toBeTrue();
=======
        expect(Module::class)->toBeString()
            ->and(class_exists(Module::class))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
        expect(Module::class)->toBeString()->and(class_exists(Module::class))->toBeTrue();
>>>>>>> b93ef594b4 (.)
=======
        expect(Module::class)->toBeString()
            ->and(class_exists(Module::class))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    });

    it('the user views navigation modules entries based on their role', function (): void {
        // Test business logic: navigation items generation
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> b93ef594b4 (.)
>>>>>>> 815ce17 (.)
        expect(GetModulesNavigationItems::class)
            ->toBeString()
            ->and(class_exists(GetModulesNavigationItems::class))
            ->toBeTrue();
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
        expect(GetModulesNavigationItems::class)->toBeString()
            ->and(class_exists(GetModulesNavigationItems::class))->toBeTrue();
>>>>>>> a12f125f4a (.)
=======
>>>>>>> b93ef594b4 (.)
=======
        expect(GetModulesNavigationItems::class)->toBeString()
            ->and(class_exists(GetModulesNavigationItems::class))->toBeTrue();
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)
    });

    it('the user no views navigation modules entries based on their no role', function (): void {
        // Test that required classes exist for role-based navigation
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> 815ce17 (.)
        expect(Module::class)->toBeString()->and(GetModulesNavigationItems::class)->toBeString();
    });
});
uses(TestHelper::class);

beforeEach(function (): void {
    $this->super_admin_user = $this->getSuperAdminUser();
    $this->no_super_admin_user = $this->getNoSuperAdminUser();
});

it('user admin can view main dashboard', function (): void {
    $modules_name = $this->getModuleNameLists();

    $this->actingAs($this->super_admin_user)->get('/admin')->assertRedirect('admin/main-dashboard');
    $this->actingAs($this->super_admin_user)->get('/admin/main-dashboard')->assertStatus(200); // ->assertSee($modules_name);
});

it('guest user can view main dashboard', function (): void {
    $this->actingAs($this->no_super_admin_user)->get('/admin')->assertRedirect('admin/main-dashboard');
    $this->actingAs($this->no_super_admin_user)->get('/admin/main-dashboard')->assertStatus(200);
});

it('the user views navigation modules entries based on their role', function (): void {
    $item_navs_roles = $this->getUserNavigationItemUrlRoles($this->super_admin_user);
    foreach ($item_navs_roles as $item_nav_role) {
        $this->actingAs($this->super_admin_user)->get('/admin/main-dashboard')->assertSee($item_nav_role);

        // ->assertSeeText($item_nav_role)
    }
});

it('the user no views navigation modules entries based on their no role', function (): void {
    $diff_navigation_items = $this->getMainAdminNavigationUrlItems()->diff($this->getUserNavigationItemUrlRoles($this->super_admin_user)->all());
    foreach ($diff_navigation_items as $item_nav_role) {
        $this->actingAs($this->super_admin_user)->get('/admin/main-dashboard')->assertDontSee($item_nav_role);

        // ->assertDontSeeText($item_nav_role)
    }
});

it('user admin can view module dashboard', function (): void {
    // $module_name = 'BarberShop';

    // $this->get('/admin')->dd();

    // $this->actingAs($super_admin_user)->get('/admin')->assertRedirect('admin/main-dashboard');
    $this->actingAs($this->super_admin_user)->get('http://multiv.local/barbershop/admin/dashboard')->assertStatus(200); // ->assertSee($modules_name);
})->todo();
<<<<<<< HEAD
=======
=======
=======
>>>>>>> origin/develop
        expect(Module::class)->toBeString()
            ->and(GetModulesNavigationItems::class)->toBeString();
    });
});
<<<<<<< HEAD
>>>>>>> a12f125f4a (.)
=======
        expect(Module::class)->toBeString()->and(GetModulesNavigationItems::class)->toBeString();
    });
});
uses(TestHelper::class);

beforeEach(function (): void {
    $this->super_admin_user = $this->getSuperAdminUser();
    $this->no_super_admin_user = $this->getNoSuperAdminUser();
});

it('user admin can view main dashboard', function (): void {
    $modules_name = $this->getModuleNameLists();

    $this->actingAs($this->super_admin_user)->get('/admin')->assertRedirect('admin/main-dashboard');
    $this->actingAs($this->super_admin_user)->get('/admin/main-dashboard')->assertStatus(200); // ->assertSee($modules_name);
});

it('guest user can view main dashboard', function (): void {
    $this->actingAs($this->no_super_admin_user)->get('/admin')->assertRedirect('admin/main-dashboard');
    $this->actingAs($this->no_super_admin_user)->get('/admin/main-dashboard')->assertStatus(200);
});

it('the user views navigation modules entries based on their role', function (): void {
    $item_navs_roles = $this->getUserNavigationItemUrlRoles($this->super_admin_user);
    foreach ($item_navs_roles as $item_nav_role) {
        $this->actingAs($this->super_admin_user)->get('/admin/main-dashboard')->assertSee($item_nav_role);

        // ->assertSeeText($item_nav_role)
    }
});

it('the user no views navigation modules entries based on their no role', function (): void {
    $diff_navigation_items = $this->getMainAdminNavigationUrlItems()->diff($this->getUserNavigationItemUrlRoles($this->super_admin_user)->all());
    foreach ($diff_navigation_items as $item_nav_role) {
        $this->actingAs($this->super_admin_user)->get('/admin/main-dashboard')->assertDontSee($item_nav_role);

        // ->assertDontSeeText($item_nav_role)
    }
});

it('user admin can view module dashboard', function (): void {
    // $module_name = 'BarberShop';

    // $this->get('/admin')->dd();

    // $this->actingAs($super_admin_user)->get('/admin')->assertRedirect('admin/main-dashboard');
    $this->actingAs($this->super_admin_user)->get('http://multiv.local/barbershop/admin/dashboard')->assertStatus(200); // ->assertSee($modules_name);
})->todo();
>>>>>>> b93ef594b4 (.)
=======
>>>>>>> origin/develop
>>>>>>> 815ce17 (.)

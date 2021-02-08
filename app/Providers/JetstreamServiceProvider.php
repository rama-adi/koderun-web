<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\InviteTeamMember;
use App\Actions\Jetstream\RemoveTeamMember;
use App\Actions\Jetstream\UpdateTeamName;
use App\Enums\ScratchbookPermissions;
use App\Enums\TeamPermissions;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Jetstream::ignoreRoutes();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();
        $this->configureRoutes();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::inviteTeamMembersUsing(InviteTeamMember::class);
        Jetstream::removeTeamMembersUsing(RemoveTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the routes offered by the application.
     *
     * @return void
     */
    protected function configureRoutes()
    {
        Route::group([
            'namespace' => 'Laravel\Jetstream\Http\Controllers',
            'domain' => config('jetstream.domain', null),
            'prefix' => config('jetstream.prefix', config('jetstream.path')),
        ], function () {
            $this->loadRoutesFrom(base_path('routes/jetstream.php'));
        });
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', 'Admin workspace', [
            ScratchbookPermissions::CREATE,
            ScratchbookPermissions::READ,
            ScratchbookPermissions::UPDATE,
            ScratchbookPermissions::DELETE,
            ScratchbookPermissions::CLONE_TO_WORKSPACE,
            ScratchbookPermissions::FOREIGN_STAR,

            TeamPermissions::INVITE_MEMBER,
            TeamPermissions::REMOVE_MEMBER,
            TeamPermissions::UPDATE_MEMBER_PERMISSION,

        ])->description('Admin workspace bisa melakukan apapun kecuali menghapus workspace');

        Jetstream::role('editor', __('Editor'), [
            ScratchbookPermissions::CREATE,
            ScratchbookPermissions::READ,
            ScratchbookPermissions::UPDATE,
            ScratchbookPermissions::CLONE_TO_WORKSPACE,
            ScratchbookPermissions::FOREIGN_STAR,
        ])->description(__('Editor tidak dapat mengatur tim dan menghapus scratchbook. selain itu, bisa'));

        Jetstream::role('member', __('Member'), [
            ScratchbookPermissions::READ,
        ])->description(__('Member hanya bisa melihat scratchbook'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\RoleRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class RoleController extends AppBaseController
{
    /** @var RoleRepository */
    private $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $permissions = Permission::toBase()->get();

        return view('roles.index', compact('permissions'));
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        $permissions = $this->roleRepository->getPermissions();

        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param  CreateRoleRequest  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateRoleRequest $request)
    {
        $input = $request->all();
        $this->roleRepository->store($input);

        \Flash::success(__('messages.flash.role_create'));

        return redirect(route('roles.index'));
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param  Role  $role
     * @return Application|Factory|View
     */
    public function edit(Role $role)
    {
        $permissions = $this->roleRepository->getPermissions();
        $selectedPermissions = $role->getAllPermissions()->keyBy('id');

        return view('roles.edit', compact('role', 'permissions', 'selectedPermissions'));
    }

    /**
     * Update the specified Role in storage.
     *
     * @param  UpdateRoleRequest  $request
     * @param  Role  $role
     * @return Application|Redirector|RedirectResponse
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        $this->roleRepository->update($request->all(), $role->id);
        \Flash::success(__('messages.flash.role_update'));

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param  Role  $role
     * @return JsonResponse
     */
    public function destroy(Role $role): JsonResponse
    {
        if ($role->is_default == 1) {
            return $this->sendError(__('messages.flash.default_role_not_delete'));
        }

        $checkRecord = DB::table('model_has_roles')->where('role_id', '=', $role->id)->exists();
        if ($checkRecord) {
            return $this->sendError(__('messages.flash.user_role_not_delete'));
        }

        $role->delete();

        return $this->sendSuccess(__('messages.flash.role_delete'));
    }
}

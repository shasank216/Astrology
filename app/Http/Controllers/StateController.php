<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStateRequest;
use App\Http\Requests\UpdateStateRequest;
use App\Models\Address;
use App\Models\Country;
use App\Models\State;
use App\Repositories\StateRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class StateController extends AppBaseController
{
    /** @var StateRepository */
    private $stateRepository;

    public function __construct(StateRepository $stateRepo)
    {
        $this->stateRepository = $stateRepo;
    }

    /**
     * Display a listing of the State.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $countries = Country::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('states.index', compact('countries'));
    }

    /**
     * Store a newly created State in storage.
     *
     * @param  CreateStateRequest  $request
     * @return JsonResponse
     */
    public function store(CreateStateRequest $request)
    {
        $input = $request->all();

        $state = $this->stateRepository->create($input);

        return $this->sendSuccess(__('messages.flash.state_create'));
    }

    /**
     * Show the form for editing the specified State.
     *
     * @param  State  $state
     * @return JsonResponse
     */
    public function edit(State $state)
    {
        return $this->sendResponse($state, __('messages.flash.states_retrieve'));
    }

    /**
     * Update the specified State in storage.
     *
     * @param  UpdateStateRequest  $request
     * @param  State  $state
     * @return JsonResponse
     */
    public function update(UpdateStateRequest $request, State $state)
    {
        $input = $request->all();
        $this->stateRepository->update($input, $state->id);

        return $this->sendSuccess(__('messages.flash.state_update'));
    }

    /**
     * @param  State  $state
     * @return JsonResponse
     */
    public function destroy(State $state)
    {
        $checkRecord = Address::whereStateId($state->id)->exists();
        if ($checkRecord) {
            return $this->sendError(__('messages.flash.state_use'));
        }

        $state->delete();

        return $this->sendSuccess(__('messages.flash.state_delete'));
    }
}

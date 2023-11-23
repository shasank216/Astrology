<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\Address;
use App\Models\City;
use App\Models\State;
use App\Repositories\CityRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class CityController extends AppBaseController
{
    /** @var CityRepository */
    private $cityRepository;

    public function __construct(CityRepository $cityRepo)
    {
        $this->cityRepository = $cityRepo;
    }

    /**
     * Display a listing of the City.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $states = State::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('cities.index', compact('states'));
    }

    /**
     * Store a newly created City in storage.
     *
     * @param  Requests\CreateCityRequest  $request
     * @return JsonResponse
     */
    public function store(CreateCityRequest $request)
    {
        $input = $request->all();
        $city = $this->cityRepository->create($input);

        return $this->sendSuccess(__('messages.flash.city_create'));
    }

    /**
     * Show the form for editing the specified City.
     *
     * @param  City  $city
     * @return JsonResponse
     */
    public function edit(City $city)
    {
        return $this->sendResponse($city, __('messages.flash.city_retrieved'));
    }

    /**
     * Update the specified City in storage.
     *
     * @param  UpdateCityRequest  $request
     * @param  City  $city
     * @return JsonResponse
     */
    public function update(UpdateCityRequest $request, City $city)
    {
        $input = $request->all();
        $this->cityRepository->update($input, $city->id);

        return $this->sendSuccess(__('messages.flash.city_update'));
    }

    /**
     * @param  City  $city
     * @return JsonResponse
     */
    public function destroy(City $city)
    {
        $checkRecord = Address::whereCityId($city->id)->exists();

        if ($checkRecord) {
            return $this->sendError(__('messages.flash.city_used'));
        }
        $city->delete();

        return $this->sendSuccess(__('messages.flash.city_delete'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Address;
use App\Models\Country;
use App\Repositories\CountryRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;

class CountryController extends AppBaseController
{
    /** @var CountryRepository */
    private $countryRepository;

    public function __construct(CountryRepository $countryRepo)
    {
        $this->countryRepository = $countryRepo;
    }

    /**
     * Display a listing of the Country.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('countries.index');
    }

    /**
     * Store a newly created Country in storage.
     *
     * @param  CreateCountryRequest  $request
     * @return JsonResponse
     */
    public function store(CreateCountryRequest $request)
    {
        $input = $request->all();

        $country = $this->countryRepository->create($input);

        return $this->sendSuccess(__('messages.flash.country_create'));
    }

    /**
     * Show the form for editing the specified Country.
     *
     * @param  Country  $country
     * @return JsonResponse
     */
    public function edit(Country $country)
    {
        return $this->sendResponse($country, __('messages.flash.Country_retrieved'));
    }

    /**
     * Update the specified Country in storage.
     *
     * @param  UpdateCountryRequest  $request
     * @param  Country  $country
     * @return JsonResponse
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $input = $request->all();
        $input['short_code'] = strtoupper($input['short_code']);

        $this->countryRepository->update($input, $country->id);

        return $this->sendSuccess(__('messages.flash.country_update'));
    }

    /**
     * @param  Country  $country
     * @return JsonResponse
     */
    public function destroy(Country $country)
    {
        $checkRecord = Address::whereCountryId($country->id)->exists();
        if ($checkRecord) {
            return $this->sendError(__('messages.flash.country_used'));
        }

        $country->delete();

        return $this->sendSuccess(__('messages.flash.country_delete'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateSettingRequest;
use App\Models\Appointment;
use App\Models\City;
use App\Models\Country;
use App\Models\Currency;
use App\Models\PaymentGateway;
use App\Models\Setting;
use App\Models\Specialization;
use App\Models\State;
use App\Repositories\SettingRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Laracasts\Flash\Flash;

class SettingController extends AppBaseController
{
    /**
     * @var SettingRepository
     */
    private $settingRepository;

    /**
     * SettingController constructor.
     *
     * @param  SettingRepository  $SettingRepository
     */
    public function __construct(SettingRepository $SettingRepository)
    {
        $this->settingRepository = $SettingRepository;
    }

    /**
     * @param  Request  $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $setting = Setting::pluck('value', 'key')->toArray();
        $sectionName = ($request->get('section') === null) ? 'general' : $request->get('section');
        $states = $cities = [];
        if (isset($setting['country_id'])) {
            $states = getStates($setting['country_id']);
        }
        if (isset($states)) {
            $cities = getCities($states);
        }
        $countries = Country::toBase()->pluck('name', 'id');
        $specialities = Specialization::orderBy('name', 'asc')->pluck('name', 'id');
        $currencies = Currency::toBase()->pluck('currency_name', 'id');
        $paymentGateways = Appointment::PAYMENT_METHOD;
        $selectedPaymentGateways = PaymentGateway::pluck('payment_gateway')->toArray();

        return view("setting.$sectionName",
            compact('sectionName', 'setting', 'countries', 'specialities', 'states', 'cities', 'currencies', 'paymentGateways', 'selectedPaymentGateways'));
    }

    /**
     * @param  UpdateSettingRequest  $request
     * @return RedirectResponse
     */
    public function update(UpdateSettingRequest $request)
    {
        $paymentGateways = $request->payment_gateway;
        if (! empty($paymentGateways)) {
            PaymentGateway::query()->delete();
        }

        if (isset($paymentGateways)) {
            foreach ($paymentGateways as $paymentGateway) {
                PaymentGateway::updateOrCreate(['payment_gateway_id' => $paymentGateway],
                    [
                        'payment_gateway' => Appointment::PAYMENT_METHOD[$paymentGateway],
                    ]);
            }
        }

        $id = Auth::id();
        $this->settingRepository->update($request->all(), $id);

        Flash::success(__('messages.flash.setting_update'));

        return Redirect::back();
    }

    /**
     * @param  Request  $request
     * @return mixed
     */
    public function getStates(Request $request)
    {
        $countryId = $request->get('settingCountryId');
        $data['state_id'] = getSettingValue('state_id');
        $data['states'] = State::where('country_id', $countryId)->toBase()->pluck('name', 'id')->toArray();

        return $this->sendResponse($data, __('messages.flash.states_retrieve'));
    }

    /**
     * @param  Request  $request
     * @return mixed
     */
    public function getCities(Request $request)
    {
        $state_id = $request->get('stateId');
        $data['city_id'] = getSettingValue('city_id');
        $data['cities'] = City::where('state_id', $state_id)->toBase()->pluck('name', 'id')->toArray();

        return $this->sendResponse($data, __('messages.flash.cities_retrieve'));
    }
}

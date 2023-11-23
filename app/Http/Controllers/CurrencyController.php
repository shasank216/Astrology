<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use App\Models\Currency;
use App\Models\Setting;
use App\Repositories\CurrencyRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;

class CurrencyController extends AppBaseController
{
    /** @var CurrencyRepository */
    private $currencyRepository;

    public function __construct(CurrencyRepository $currencyRepo)
    {
        $this->currencyRepository = $currencyRepo;
    }

    /**
     * Display a listing of the Currency.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('currencies.index');
    }

    /**
     * Store a newly created Currency in storage.
     *
     * @param  CreateCurrencyRequest  $request
     * @return JsonResponse
     */
    public function store(CreateCurrencyRequest $request)
    {
        $input = $request->all();
        $this->currencyRepository->store($input);

        Cache::flush('currency');

        return $this->sendSuccess(__('messages.flash.currency_create'));
    }

    /**
     * @param  Currency  $currency
     * @return JsonResponse
     */
    public function edit(Currency $currency)
    {
        return $this->sendResponse($currency, __('messages.flash.currency_retrieved'));
    }

    /**
     * Update the specified Currency in storage.
     *
     * @param  UpdateCurrencyRequest  $request
     * @param  Currency  $currency
     * @return JsonResponse
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        $input = $request->all();
        $this->currencyRepository->update($input, $currency->id);
        Cache::flush('currency');

        return $this->sendSuccess(__('messages.flash.currency_update'));
    }

    /**
     * Remove the specified Currency from storage.
     *
     * @param  Currency  $currency
     * @return JsonResponse
     */
    public function destroy(Currency $currency)
    {
        $checkRecord = Setting::where('key', 'currency')->first()->value;

        if ($checkRecord == $currency->id) {
            return $this->sendError(__('messages.flash.currency_used'));
        }
        $currency->delete();

        return $this->sendSuccess(__('messages.flash.currency_delete'));
    }
}

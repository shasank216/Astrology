<?php

namespace App\Http\Controllers\Front;

use App\DataTables\SliderDataTable;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use App\Repositories\SliderRepository;
use Datatables;
use Exception;
use Flash;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SliderController extends AppBaseController
{
    /** @var SliderRepository */
    private $sliderRepository;

    public function __construct(SliderRepository $sliderRepo)
    {
        $this->sliderRepository = $sliderRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     *
     * @throws Exception
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of((new SliderDataTable)->get())->make('true');
        }

        return view('fronts.sliders.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Slider  $slider
     * @return Application|Factory|View
     */
    public function edit(Slider $slider)
    {
        return view('fronts.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSliderRequest  $request
     * @param  Slider  $slider
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        $input = $request->all();
        $slider = $this->sliderRepository->update($input, $slider->id);

        Flash::success(__('messages.flash.slider_update'));

        return redirect(route('sliders.index'));
    }
}

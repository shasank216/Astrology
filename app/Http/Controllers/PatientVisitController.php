<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Repositories\PatientVisitRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class PatientVisitController extends Controller
{
    /** @var PatientVisitRepository */
    private $patientVisitRepository;

    public function __construct(PatientVisitRepository $patientVisitRepository)
    {
        $this->patientVisitRepository = $patientVisitRepository;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('patient_visits.index');
    }

    /**
     * @param $id
     * @return Application|Factory|View|RedirectResponse
     */
    public function show($id)
    {
        if (getLogInUser()->hasRole('patient')) {
            $patient = Visit::whereId($id)->wherePatientId(getLogInUser()->patient->id);
            if (! $patient->exists()) {
                return redirect()->back();
            }
        }

        $visit = $this->patientVisitRepository->getShowData($id);

        return view('patient_visits.show', compact('visit'));
    }
}

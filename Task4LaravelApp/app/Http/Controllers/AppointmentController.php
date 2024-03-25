<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return $this->respondSuccess(Appointment::all());
    }

    public function create(AppointmentRequest $request)
    {
        $appointment = Appointment::create([
            'name' => $request->name,
            'date_start' => $request?->date_start ?? null,
            'date_end' => $request?->date_end ?? null,
            'color' => $request?->color
        ]);

        return $this->respondSuccess($appointment);
    }

    public function update(AppointmentRequest $appointment, Request $request)
    {
        $appointment = $appointment->update([
            'name' => $request->name,
            'date_start' => $request?->date_start ?? null,
            'date_end' => $request?->date_end ?? null,
            'color' => $request?->color
        ]);

        return $this->respondSuccess($appointment);
    }

    public function delete(AppointmentRequest $appointment)
    {
        $appointment->delete();

        return $this->respondSuccess('');
    }
}

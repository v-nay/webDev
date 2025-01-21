<?php

namespace App\Http\Controllers\System\reservation;

use Illuminate\Http\Request;
use App\Services\System\ReservationService;
use App\Http\Controllers\System\ResourceController;

class ReservationController extends ResourceController
{
    public function __construct(ReservationService $reservationService)
    {
        parent::__construct($reservationService);
    }

    public function moduleName()
    {
        return 'reservations';
    }

    public function viewFolder()
    {
        return 'system.reservation';
    }
}

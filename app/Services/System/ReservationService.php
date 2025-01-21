<?php
namespace App\Services\System;
use App\Services\Service;
use App\Model\Reservation;

class ReservationService extends Service
{
    public function __construct(Reservation $reservation)
    {
        parent::__construct($reservation);
    }
    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();
        if (isset($data->keyword) && $data->keyword !== null) {
            $query
                ->where('name', 'LIKE', '%' . $data->keyword . '%')
                ->orWhere('phone', 'LIKE', '%' . $data->keyword . '%');
        }

        if (count($selectedColumns) > 0) {
            $query->select($selectedColumns);
        }
        if ($pagination) {
            return $query->orderBy('id', 'DESC')->paginate(PAGINATE);
        }

        return $query->orderBy('id', 'DESC')->get();
    }

    public function indexPageData($data)
    {
        return [
            'items' => $this->getAllData($data),
        ];
    }
}
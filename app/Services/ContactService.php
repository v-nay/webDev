<?php
namespace App\Services;
use App\Model\Contact;
// use App\Contact;
use App\Services\Service;

class ContactService extends Service
{
    public function __construct(Contact $contact)
    {
        parent::__construct($contact);
    }
    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();
        if (isset($data->keyword) && $data->keyword !== null) {
            $query
                ->where('name', 'LIKE', '%' . $data->keyword . '%')
                ->orWhere('email', 'LIKE', '%' . $data->keyword . '%')
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

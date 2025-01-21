<?php
namespace App\Services\System;

use App\Model\Special;
use App\Services\Service;
use App\Traits\ImageTrait;

class SpecialService extends Service
{
    use ImageTrait;
    public $dir = '/uploads/special';
    public function __construct(Special $special)
    {
        parent::__construct($special);
    }
    public function getAllData($data, $selectedColumns = [], $pagination = true)
    {
        $query = $this->query();
        if (isset($data->keyword) && $data->keyword !== null) {
            $query
                ->where('name', 'LIKE', '%' . $data->keyword . '%')
                ->orWhere('desc', 'LIKE', '%' . $data->keyword . '%');
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
    public function store($request)
    {
        $data = $request->except('_token');
        if ($request->hasFile('img')) {
            
            $data['img'] = $this->uploadImages($this->dir, $request->img);
        }
        return $this->model->create($data);
    }

    public function update($request, $id)
    {
        $data = $request->except('_token');
        $update = $this->itemByIdentifier($id);
        if ($request->hasFile('img')) {
            $this->removeImage($this->dir, $data['img']);

            $data['img'] = $this->uploadImages($this->dir, $request->img);
        }
        $update->fill($data)->save();
        $update = $this->itemByIdentifier($id);
        return $update;
    }
}
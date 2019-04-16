<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Service;
use App\Services\UtilityService;

class ServiceService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Service.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listServices()
    {
        return Service::get();
    }

    /**
     * Datatebles
     * @param service
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($services)
    {
        $tableData = Datatables::of($services)
            ->editColumn('icon', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$icon }}" class="image"  width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','services')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','icon'])->make(true);

        return $tableData ;
    }

    /**
     * Get service.
     * @param $serviceId
     * @return Service
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getService($serviceId)
    {
        try {
            $service = Service::findOrFail($serviceId);
            return $service;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Service not found');
        }
    }

    /**
     * Create service.
     * @param $serviceId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createService($parameters)
    {
        try {
            if(isset($parameters['icon']) && $parameters['icon'] != ""){
                $data = $this->utilityService->uploadImage($parameters['icon']);
                if(!$data['status'])
                    return response(array('msg' => $data['errors']), 404);
                $parameters['icon'] = $data['image'];
            }else{
                return array('status' => false, 'message' => 'Image required');
            }

            $service = new Service();
            $service->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update service.
     * @param $serviceId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateService($serviceId, $parameters, $images, $icon)
    {
        try {
            $service = Service::findOrFail($serviceId);
            if(isset($images['icon']) && $images['icon'] != ""){
                $data = $this->utilityService->uploadImage($images['icon']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['icon'] = $data['image'];
            }else{
                $parameters['icon']  = $icon;
            }

            $service->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete service.
     * @param $serviceId
     * @return Service
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteService($serviceId)
    {
        return Service::find($serviceId)->delete();
    }

    /**
     * get services front.
     * @author Alaa <alaaragab34@gmail.com>
     */
    static function servicesHome()
    {
        return Service::get();
    }
}

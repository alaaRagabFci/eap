<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Consultance;
use App\Services\UtilityService;

class ConsultancyService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Consultance.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listConsultancies()
    {
        return Consultance::get();
    }

    /**
     * Datatebles
     * @param consultance
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($consultance)
    {
        $tableData = Datatables::of($consultance)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image"  width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','consultancies')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get consultance.
     * @param $consultanceId
     * @return Consultance
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getConsultance($consultanceId)
    {
        try {
            $consultance = Consultance::findOrFail($consultanceId);
            return $consultance;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Consultance not found');
        }
    }

    /**
     * Create consultance.
     * @param $consultanceId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createConsultance($parameters)
    {
        try {
            if(isset($parameters['image']) && $parameters['image'] != ""){
                $data = $this->utilityService->uploadImage($parameters['image']);
                if(!$data['status'])
                    return response(array('msg' => $data['errors']), 404);
                $parameters['image'] = $data['image'];
            }else{
                return array('status' => false, 'message' => 'Image required');
            }

            $consultance = new Consultance();
            $consultance->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update consultance.
     * @param $consultanceId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateConsultance($consultanceId, $parameters, $images, $image)
    {
        try {
            $consultance = Consultance::findOrFail($consultanceId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $consultance->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete consultance.
     * @param $consultanceId
     * @return Consultance
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteConsultance($consultanceId)
    {
        return Consultance::find($consultanceId)->delete();
    }

    /**
     * get $consultancies front.
     * @author Alaa <alaaragab34@gmail.com>
     */
    static function consultancyHome()
    {
        return Consultance::get();
    }
}

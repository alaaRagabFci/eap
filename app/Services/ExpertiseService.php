<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Expertise;
use App\Services\UtilityService;

class ExpertiseService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Expertises.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listExpertises()
    {
        return Expertise::get();
    }

    /**
     * Datatebles
     * @param Expertise
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($expertises)
    {
        $tableData = Datatables::of($expertises)
            ->editColumn('icon', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$icon }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','expertises')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','icon'])->make(true);

        return $tableData ;
    }

    /**
     * Get expertise.
     * @param $expertiseId
     * @return Expertise
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getExpertise($expertiseId)
    {
        try {
            $expertise = Expertise::findOrFail($expertiseId);
            return $expertise;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Expertise not found');
        }
    }

    /**
     * Create expertise.
     * @param $expertiseId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function creatExpertise($parameters)
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

            $expertise = new Expertise();
            $expertise->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update expertisee.
     * @param $expertiseId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $icon
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateExpertise($expertiseId, $parameters, $images, $icon)
    {
        try {
            $expertise = Expertise::findOrFail($expertiseId);
            if(isset($images['icon']) && $images['icon'] != ""){
                $data = $this->utilityService->uploadImage($images['icon']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['icon'] = $data['image'];
            }else{
                $parameters['icon']  = $icon;
            }

            $expertise->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete expertise.
     * @param $expertiseId
     * @return Expertise
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteExpertise($expertiseId)
    {
        return Expertise::find($expertiseId)->delete();
    }
}

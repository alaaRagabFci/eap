<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Managment;
use App\Services\UtilityService;

class ManagmentService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Managment.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listManagments()
    {
        return Managment::get();
    }

    /**
     * Datatebles
     * @param managment
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($managment)
    {
        $tableData = Datatables::of($managment)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','managments')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get managment.
     * @param $managmentId
     * @return Managment
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getManagment($managmentId)
    {
        try {
            $managment = Managment::findOrFail($managmentId);
            return $managment;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Managment not found');
        }
    }

    /**
     * Create managment.
     * @param $managmentId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createManagment($parameters)
    {
        try {
            if(isset($parameters['image']) && $parameters['image'] != ""){
                $data = $this->utilityService->uploadImage($parameters['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                return array('status' => false, 'message' => 'Image required');
            }

            $managment = new Managment();
            $managment->create($parameters);
            return array('status' => 'true', 'message' => 'Managment created');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Managment already exist');
        }
    }

    /**
     * Update managment.
     * @param $managmentId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateManagment($managmentId, $parameters, $images, $image)
    {
        try {
            $managment = Managment::findOrFail($managmentId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $managment->update($parameters);
            return array('status' => 'true', 'message' => 'Managment updated');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Managment not found');
        }
    }

    /**
     * Delete managment.
     * @param $managmentId
     * @return Managment
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteManagment($managmentId)
    {
        return Managment::find($managmentId)->delete();
    }
}

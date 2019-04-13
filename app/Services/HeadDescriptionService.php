<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Description;
use App\Services\UtilityService;

class HeadDescriptionService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Descriptions.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listDescriptions()
    {
        return Description::get();
    }

    /**
     * Datatebles
     * @param $descriptions
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($descriptions)
    {
        $tableData = Datatables::of($descriptions)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','head-descriptions')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get description.
     * @param $descriptionId
     * @return Description
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getDescription($descriptionId)
    {
        try {
            $description = Description::findOrFail($descriptionId);
            return $description;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Description not found');
        }
    }

    /**
     * Create description.
     * @param $descriptionId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createDescription($parameters)
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

            $description = new Description();
            $description->create($parameters);
            return array('status' => 'true', 'message' => 'Description created');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Description already exist');
        }
    }

    /**
     * Update description.
     * @param $descriptionId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateDescription($descriptionId, $parameters, $images, $image)
    {
        try {
            $description = Description::findOrFail($descriptionId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $description->update($parameters);
            return array('status' => 'true', 'message' => 'Description updated');
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Description not found');
        }
    }

    /**
     * Delete description.
     * @param $descriptionId
     * @return Description
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteDescription($descriptionId)
    {
        return Description::find($descriptionId)->delete();
    }
}

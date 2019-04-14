<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\AboutUs;
use App\Services\UtilityService;

class AboutUsService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all AboutUs.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listAboutUs()
    {
        return AboutUs::get();
    }

    /**
     * Datatebles
     * @param about
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($about)
    {
        $tableData = Datatables::of($about)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','about-us')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get about.
     * @param $aboutId
     * @return AboutUs
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getAboutUs($aboutId)
    {
        try {
            $about = AboutUs::findOrFail($aboutId);
            return $about;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'AboutUs not found');
        }
    }

    /**
     * Create about.
     * @param $aboutId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createAboutUs($parameters)
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

            $about = new AboutUs();
            $about->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update about.
     * @param $aboutId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateAboutUs($aboutId, $parameters, $images, $image)
    {
        try {
            $about = AboutUs::findOrFail($aboutId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $about->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete about.
     * @param $aboutId
     * @return AboutUs
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteAboutUs($aboutId)
    {
        return AboutUs::find($aboutId)->delete();
    }
}

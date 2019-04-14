<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Publication;
use App\Services\UtilityService;

class PublicationService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Publication.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listPublications()
    {
        return Publication::get();
    }

    /**
     * Datatebles
     * @param publication
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($publication)
    {
        $tableData = Datatables::of($publication)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','publications')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get publication.
     * @param $publicationId
     * @return Publication
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getPublication($publicationId)
    {
        try {
            $publication = Publication::findOrFail($publicationId);
            return $publication;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Publication not found');
        }
    }

    /**
     * Create publication.
     * @param $publicationId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createPublication($parameters)
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

            $publication = new Publication();
            $publication->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update publication.
     * @param $publicationId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updatePublication($publicationId, $parameters, $images, $image)
    {
        try {
            $publication = Publication::findOrFail($publicationId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $publication->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete publication.
     * @param $publicationId
     * @return Publication
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deletePublication($publicationId)
    {
        return Publication::find($publicationId)->delete();
    }
}

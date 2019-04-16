<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Profile;
use App\Services\UtilityService;

class ProfileService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Profile.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listProfiles()
    {
        return Profile::get();
    }

    /**
     * Datatebles
     * @param profile
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($profiles)
    {
        $tableData = Datatables::of($profiles)
            ->editColumn('image', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$image }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','profiles')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','image'])->make(true);

        return $tableData ;
    }

    /**
     * Get profile.
     * @param $profileId
     * @return Profile
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getProfile($profileId)
    {
        try {
            $profile = Profile::findOrFail($profileId);
            return $profile;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Profile not found');
        }
    }

    /**
     * Create profile.
     * @param $profileId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function createProfile($parameters)
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

            $profile = new Profile();
            $profile->create($parameters);
            return response(array('msg' => 'Entity created'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity already exist'), 404);
        }
    }

    /**
     * Update profile.
     * @param $profileId
     * @param $title_ar
     * @param $title_en
     * @param $description_ar
     * @param $description_en
     * @param $image
     * @param $page
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateProfile($profileId, $parameters, $images, $image)
    {
        try {
            $profile = Profile::findOrFail($profileId);
            if(isset($images['image']) && $images['image'] != ""){
                $data = $this->utilityService->uploadImage($images['image']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['image'] = $data['image'];
            }else{
                $parameters['image']  = $image;
            }

            $profile->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete profile.
     * @param $profileId
     * @return Profile
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteProfile($profileId)
    {
        return Profile::find($profileId)->delete();
    }
}

<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\ProfileService;
use Response;

class ProfileController extends AbstractController {

    public $profileService;
    public function __construct(ProfileService $profileService)
    {
        $this->middleware('auth');
        $this->profileService = $profileService;
    }

    /**
     * List all profiles.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $profiles  = $this->profileService->listProfiles();
        $tableData = $this->profileService->datatables($profiles);

        if($request->ajax())
            return $tableData;

        return view('profiles.index')
              ->with('modal', 'profiles')
              ->with('tableData', $tableData);
    }

    /**
     * Update profile.
     * requirements={
     *      {"name"="image", "dataType"="String", "requirement"="\d+", "description"="image"},
     *      {"name"="title_ar", "dataType"="String", "requirement"="\d+", "description"="title ar"},
     *      {"name"="title_en", "dataType"="String", "requirement"="\d+", "description"="title en"},
     *      {"name"="description_ar", "dataType"="text", "requirement"="\d+", "description"="description ar"},
     *      {"name"="description_en", "dataType"="text", "requirement"="\d+", "description"="description en"},
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function store(Request $request)
    {
        $data  = $request->all();
        $data['image'] = $request->hasFile('image') ? $request->file('image') : "";
        $profile = $this->profileService->createProfile($data);
        return $profile;
    }
    /**
     * Edit profile.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="profile id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $profile = $this->profileService->getProfile($id);
        session(['profile_id'     => $profile->id]);
        session(['image'  => $profile->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $profile->toJson()]);
    }

    /**
     * Update profile.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="profile id"},
     *      {"name"="image", "dataType"="String", "requirement"="\d+", "description"="image"},
     *      {"name"="title_ar", "dataType"="String", "requirement"="\d+", "description"="title ar"},
     *      {"name"="title_en", "dataType"="String", "requirement"="\d+", "description"="title en"},
     *      {"name"="description_ar", "dataType"="text", "requirement"="\d+", "description"="description ar"},
     *      {"name"="description_en", "dataType"="text", "requirement"="\d+", "description"="description en"},
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function update(Request $request)
    {
        $images['image'] = $request->hasFile('image') ? $request->file('image') : "";
        $data  = $request->all();

        $profile = $this->profileService->updateProfile(
            session('profile_id'), $data, $images ,session('image')
        );

        return $profile;
    }

    /**
     * Delete profile.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="profile id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $profile = $this->profileService->deleteProfile($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

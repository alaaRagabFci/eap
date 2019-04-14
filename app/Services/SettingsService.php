<?php

namespace App\Services;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Yajra\Datatables\Datatables as Datatables;
use App\Models\Setting;
use App\Services\UtilityService;

class SettingsService
{
    private $utilityService;
    public function __construct(UtilityService $utilityService){
        $this->utilityService = $utilityService;
    }

    /**
     * List all Settings.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function listSettings()
    {
        return Setting::get();
    }

    /**
     * Datatebles
     * @param $settings
     * @return datatable.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function datatables($settings)
    {
        $tableData = Datatables::of($settings)
            ->editColumn('logo_ar', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$logo_ar }}" class="image" width="50px" height="50px"></a>')
            ->editColumn('logo_en', '<a href="javascript:;"><img src="{{ config("app.baseUrl").$logo_en }}" class="image" width="50px" height="50px"></a>')
            ->addColumn('actions', function ($data)
            {
                return view('partials.actionBtns')->with('controller','settings')
                    ->with('id', $data->id)
                    ->render();
            })->rawColumns(['actions','logo_ar', 'logo_en'])->make(true);

        return $tableData ;
    }

    /**
     * Get setting.
     * @param $settingId
     * @return Setting
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function getSetting($settingId)
    {
        try {
            $setting = Setting::findOrFail($settingId);
            return $setting;
        }
        catch(ModelNotFoundException $ex){
            return array('status' => 'false', 'message' => 'Setting not found');
        }
    }

    /**
     * Update setting.
     * @param $settingId
     * @param $logo_ar
     * @param $logo_en
     * @param $location_ar
     * @param $location_en
     * @param $email
     * @param $phone
     * @param $facebook
     * @param $google
     * @param $twitter
     * @return array
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function updateSetting($settingId, $parameters, $images, $logoAr, $logoEn)
    {
        try {
            $setting = Setting::findOrFail($settingId);
            if(isset($images['logoAr']) && $images['logoAr'] != ""){
                $data = $this->utilityService->uploadImage($images['logoAr']);
                if(!$data['status'])
                    return array('status' => -5, 'message' => $data['errors']);
                $parameters['logo_ar'] = $data['image'];
            }else{
                $parameters['logo_ar']  = $logoAr;
            }

            if(isset($images['logoEn']) && $images['logoEn'] != ""){
                $data = $this->utilityService->uploadImage($images['logoEn']);
                if(!$data['status'])
                    return response(array('msg' => $data['errors']), 404);
                $parameters['logo_en'] = $data['image'];
            }else{
                $parameters['logo_en']  = $logoEn;
            }

            $setting->update($parameters);
            return response(array('msg' => 'Entity updated'), 200);
        }
        catch(ModelNotFoundException $ex){
            return response(array('msg' => 'Entity not found'), 404);
        }
    }

    /**
     * Delete setting.
     * @param $settingId
     * @return Setting
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function deleteSetting($settingId)
    {
        return Setting::find($settingId)->delete();
    }
}

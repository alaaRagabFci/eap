<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\SettingsService;
use Response;

class SettingController extends AbstractController {

    public $settingService = null;
    public function __construct(SettingsService $settingService)
    {
        $this->middleware('auth');
        $this->settingService = $settingService;
    }

    /**
     * List all settings.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $settings  = $this->settingService->listSettings();
        $tableData = $this->settingService->datatables($settings);

        if($request->ajax())
            return $tableData;

        return view('settings.index')
              ->with('modal', 'settings')
              ->with('tableData', $tableData);
    }

    /**
     * Edit setting.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="setting id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $setting = $this->settingService->getSetting($id);
        session(['setting_id'     => $setting->id]);
        session(['settingLogoAr'  => $setting->logo_ar]);
        session(['settingLogoEn'  => $setting->logo_en]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $setting->toJson()]);
    }

    /**
     * Update setting.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="setting id"},
     *      {"name"="logo_ar", "dataType"="String", "requirement"="\d+", "description"="setting logo ar"},
     *      {"name"="logo_en", "dataType"="String", "requirement"="\d+", "description"="setting logo en"},
     *      {"name"="location_ar", "dataType"="String", "requirement"="\d+", "description"="location ar"},
     *      {"name"="location_en", "dataType"="String", "requirement"="\d+", "description"="location en"},
     *      {"name"="email", "dataType"="String", "requirement"="\d+", "description"="admin email"},
     *      {"name"="phone", "dataType"="String", "requirement"="\d+", "description"="admin phone"},
     *      {"name"="facebook", "dataType"="String", "requirement"="\d+", "description"="facebook"},
     *      {"name"="google", "dataType"="String", "requirement"="\d+", "description"="google"},
     *      {"name"="twitter", "dataType"="String", "requirement"="\d+", "description"="twitter"},
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function update(Request $request)
    {
        $images['logoAr'] = $request->hasFile('logo_ar') ? $request->file('logo_ar') : "";
        $images['logoEn'] = $request->hasFile('logo_en') ? $request->file('logo_en') : "";
        $data  = $request->all();

        $setting = $this->settingService->updateSetting(
            session('setting_id'), $data, $images ,
            session('settingLogoAr'),
            session('settingLogoEn')
        );

        return Response::json(['msg'=>'Updated Successfully',200]);
    }

    /**
     * Delete setting.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="setting id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $setting = $this->settingService->deleteSetting($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

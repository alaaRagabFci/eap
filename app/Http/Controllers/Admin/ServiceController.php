<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\ServiceService;
use Response;

class ServiceController extends AbstractController {

    public $serviceService = null;
    public function __construct(ServiceService $serviceService)
    {
        $this->middleware('auth');
        $this->serviceService = $serviceService;
    }

    /**
     * List all services.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $services  = $this->serviceService->listServices();
        $tableData = $this->serviceService->datatables($services);

        if($request->ajax())
            return $tableData;

        return view('services.index')
              ->with('modal', 'services')
              ->with('tableData', $tableData);
    }

    /**
     * Update service.
     * requirements={
     *      {"name"="icon", "dataType"="String", "requirement"="\d+", "description"="icon"},
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
        $data['icon'] = $request->hasFile('icon') ? $request->file('icon') : "";
        $service = $this->serviceService->createService($data);
        return $service;
    }
    /**
     * Edit service.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="service id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $service = $this->serviceService->getService($id);
        session(['service_id'     => $service->id]);
        session(['icon'  => $service->icon]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $service->toJson()]);
    }

    /**
     * Update service.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="service id"},
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
        $images['icon'] = $request->hasFile('icon') ? $request->file('icon') : "";
        $data  = $request->all();

        $service = $this->serviceService->updateService(
            session('service_id'), $data, $images ,session('icon')
        );

        return $service;
    }

    /**
     * Delete service.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="service id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $service = $this->serviceService->deleteService($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

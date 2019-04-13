<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\AboutUsService;
use Response;

class AboutUsController extends AbstractController {

    public $aboutUsService = null;
    public function __construct(AboutUsService $aboutUsService)
    {
        $this->middleware('auth');
        $this->aboutUsService = $aboutUsService;
    }

    /**
     * List all aboutUs.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $aboutUs  = $this->aboutUsService->listAboutUs();
        $tableData = $this->aboutUsService->datatables($aboutUs);

        if($request->ajax())
            return $tableData;

        return view('about-us.index')
              ->with('modal', 'about-us')
              ->with('tableData', $tableData);
    }

    /**
     * Update aboutUs.
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
        $aboutUs = $this->aboutUsService->createAboutUs($data);
        return Response::json(['msg'=>'Adding Successfully',200]);
    }
    /**
     * Edit about us.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="aboutUs id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $aboutUs = $this->aboutUsService->getAboutUs($id);
        session(['aboutUs_id'     => $aboutUs->id]);
        session(['image'  => $aboutUs->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $aboutUs->toJson()]);
    }

    /**
     * Update about us.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="about us id"},
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

        $aboutUs = $this->aboutUsService->updateAboutUs(
            session('aboutUs_id'), $data, $images ,session('image')
        );

        return Response::json(['msg'=>'Updated Successfully',200]);
    }

    /**
     * Delete about us.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="about us id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $aboutUs = $this->aboutUsService->deleteAboutUs($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\ExpertiseService;
use Response;

class ExpertiseController extends AbstractController {

    public $expertiseService = null;
    public function __construct(ExpertiseService $expertiseService)
    {
        $this->middleware('auth');
        $this->expertiseService = $expertiseService;
    }

    /**
     * List all expertises.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $expertises  = $this->expertiseService->listExpertises();
        $tableData = $this->expertiseService->datatables($expertises);

        if($request->ajax())
            return $tableData;

        return view('expertises.index')
              ->with('modal', 'expertises')
              ->with('tableData', $tableData);
    }

    /**
     * Update expertise.
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
        $expertise = $this->expertiseService->creatExpertise($data);
        return $expertise;
    }
    /**
     * Edit expertise.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="expertise id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $expertise = $this->expertiseService->getExpertise($id);
        session(['expertise_id'     => $expertise->id]);
        session(['icon'  => $expertise->icon]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $expertise->toJson()]);
    }

    /**
     * Update expertise.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="expertise id"},
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

        $expertise = $this->expertiseService->updateExpertise(
            session('expertise_id'), $data, $images ,session('icon')
        );

        return $expertise;
    }

    /**
     * Delete expertise.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="expertise id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $expertise = $this->expertiseService->deleteExpertise($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

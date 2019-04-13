<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\ManagmentService;
use Response;

class ManagmentController extends AbstractController {

    public $managmentService = null;
    public function __construct(ManagmentService $managmentService)
    {
        $this->middleware('auth');
        $this->managmentService = $managmentService;
    }

    /**
     * List all managments.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $managments  = $this->managmentService->listManagments();
        $tableData = $this->managmentService->datatables($managments);

        if($request->ajax())
            return $tableData;

        return view('managments.index')
              ->with('modal', 'managments')
              ->with('tableData', $tableData);
    }

    /**
     * Update managment.
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
        $managment = $this->managmentService->createManagment($data);
        return Response::json(['msg'=>'Adding Successfully',200]);
    }
    /**
     * Edit managment.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="managment id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $managment = $this->managmentService->getManagment($id);
        session(['managment_id'     => $managment->id]);
        session(['image'  => $managment->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $managment->toJson()]);
    }

    /**
     * Update managment.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="managment id"},
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

        $managment = $this->managmentService->updateManagment(
            session('managment_id'), $data, $images ,session('image')
        );

        return Response::json(['msg'=>'Updated Successfully',200]);
    }

    /**
     * Delete managment.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="managment id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $managment = $this->managmentService->deleteManagment($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

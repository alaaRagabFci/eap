<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Util\AbstractController;
use Illuminate\Http\Request;
use App\Services\ConsultancyService;
use Response;

class ConsultancyController extends AbstractController {

    public $consultancyService = null;
    public function __construct(ConsultancyService $consultancyService)
    {
        $this->middleware('auth');
        $this->consultancyService = $consultancyService;
    }

    /**
     * List all consultancies.
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function index(Request $request)
    {
        $consultancies  = $this->consultancyService->listConsultancies();
        $tableData = $this->consultancyService->datatables($consultancies);

        if($request->ajax())
            return $tableData;

        return view('consultancies.index')
              ->with('modal', 'consultancies')
              ->with('tableData', $tableData);
    }

    /**
     * Update consultancie.
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
        $consultancie = $this->consultancyService->createConsultance($data);
        return $consultancie;
    }
    /**
     * Edit consultancie.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="consultancie id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function edit(Request $request , $id)
    {
        $consultancie = $this->consultancyService->getConsultance($id);
        session(['consultancie_id'     => $consultancie->id]);
        session(['image'  => $consultancie->image]);
        return Response::json(['msg'=>'Adding Successfully','data'=> $consultancie->toJson()]);
    }

    /**
     * Update consultancie.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="consultancie id"},
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

        $consultancie = $this->consultancyService->updateConsultance(
            session('consultancie_id'), $data, $images ,session('image')
        );

        return $consultancie;
    }

    /**
     * Delete consultancy.
     * requirements={
     *      {"name"="id", "dataType"="Integer", "requirement"="\d+", "description"="consultancy id"}
     *  }
     * @author Alaa <alaaragab34@gmail.com>
     */
    public function destroy(Request $request, $id)
    {
        $consultancy = $this->consultancyService->deleteConsultance($id);

        if($request->ajax())
        {
            return Response::json(['msg'=>'Deleted Successfully',200]);
        }
        return redirect()->back();
    }
}

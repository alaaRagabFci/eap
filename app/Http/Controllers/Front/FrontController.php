<?php namespace App\Http\Controllers\Front;

use App\Http\Controllers\Util\AbstractController;
use App\Services\AboutUsService;
use App\Services\ClientService;
use App\Services\ConsultancyService;
use App\Services\ExpertiseService;
use App\Services\HeadDescriptionService;
use App\Services\ManagmentService;
use App\Services\NewService;
use App\Services\ProjectService;
use App\Services\ServiceService;
use Illuminate\Http\Request;

class FrontController extends AbstractController {

    //homePage
    public function home()
    {}

    //aboutUs
    public function aboutUs()
    {
        $headDescriptions = HeadDescriptionService::getHeadDescription('ABOUTUS');
        $aboutUs = AboutUsService::aboutUsHome();
        return view('dashboard',compact('headDescriptions', 'aboutUs'));
    }

    //services
    public function services()
    {
        $headDescriptions = HeadDescriptionService::getHeadDescription('WORK');
        $services = ServiceService::servicesHome();
        $projects = ProjectService::projectsHome();
        $expertises = ExpertiseService::expertisesHome();
        return view('dashboard',compact('headDescriptions','services', 'projects', 'expertises'));
    }

    //consultancy
    public function consultancy()
    {
        $headDescriptions = HeadDescriptionService::getHeadDescription('CONSULTANCY');
        $consultancies = ConsultancyService::consultancyHome();
        return view('dashboard',compact('headDescriptions', 'consultancies'));
    }

    //qualityManagment
    public function qualityManagment()
    {
        $headDescriptions = HeadDescriptionService::getHeadDescription('MANAGMENT');
        $managments = ManagmentService::managmentHome();
        return view('dashboard',compact('headDescriptions', 'managments'));
    }

    //clients
    public function clients()
    {
        $headDescriptions = HeadDescriptionService::getHeadDescription('CLIENTS');
        $clients = ClientService::clientsHome();
        return view('dashboard',compact('headDescriptions', 'clients'));
    }

    //news
    public function news()
    {
        $headDescriptions = HeadDescriptionService::getHeadDescription('NEWS');
        $news = NewService::newsHome();
        return view('dashboard',compact('headDescriptions', 'news'));
    }

    //contactUs
    public function contactUs()
    {
    }
}

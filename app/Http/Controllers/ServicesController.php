<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicesPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ServicesController extends Controller
{
    public function index()
    {
        $lang = App::getLocale();
        $services_page = ServicesPage::first()->translate($lang);
        $services = Service::all()->translate($lang);

        $page_title = [
            'ru' => 'Услуги',
            'en' => 'Services',
            'kz' => 'Қызметтер'
        ];

        return view('services', [
            'page_title' => $page_title[$lang],
            'services_page' => $services_page,
            'services' => $services
        ]);
    }

    public function show($id)
    {
        $lang = App::getLocale();
        $service = Service::find($id)->translate($lang);
        $services_page = ServicesPage::first()->translate($lang);
        $service->features = explode(PHP_EOL, $service->features);
        $service->work_flow = explode(PHP_EOL, $service->work_flow);
        $services = Service::all()->translate($lang);
        $page_title = [
            'ru' => 'Услуга',
            'en' => 'Service',
            'kz' => 'Қызмет'
        ];

        return view('service_single', [
            'page_title' => $page_title[$lang],
            'services_page' => $services_page,
            'service' => $service,
            'services' => $services
        ]);
    }
}

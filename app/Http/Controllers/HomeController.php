<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Achievement;
use App\Models\Advantage;
use App\Models\Home;
use App\Models\Service;
use App\Models\ServicesPage;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    public function index()
    {
        $lang = App::getLocale();
        $home_page_info = Home::first()->translate($lang);
        $about = About::first()->translate($lang);
        $advantages = Advantage::all()->translate($lang);
        $achievements = Achievement::all()->translate($lang);
        $services_page = ServicesPage::first()->translate($lang);
        $services_page->categories = explode(PHP_EOL, $services_page->categories);
        $services = Service::take(5)->get()->translate($lang);

        $page_title = [
            'ru' => 'Главная',
            'en' => 'Home',
            'kz' => 'Басты бет'
        ];

        return view('home', [
            'page_title' => $page_title[$lang],
            'home_page_info' => $home_page_info,
            'about' => $about,
            'advantages' => $advantages,
            'achievements' => $achievements,
            'services_page' => $services_page,
            'services' => $services
        ]);
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use App\Model\APIManager;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $locations = (new APIManager())->getData();
        $countries = (new APIManager())->filterCountry($locations);
        return $this->twig->render('Home/index.html.twig', ["countries" => $countries]);
    }
    public function city()
    {
        $locations = (new APIManager())->getData();
        $countries = (new APIManager())->filterCountry($locations);
        $cities = (new APIManager())->filterCity($locations, $_POST["country"]);
        return $this->twig->render('Home/index.html.twig', ["countries" => $countries, "cities" => $cities]);
    }

    public function horses()
    {
        $locations = (new ApiManager())->getData();
        $horses = (new ApiManager())->numberHorsesCity($locations, $_POST['city']);

        return $this->twig->render('Home/index.html.twig', ['horses' => $horses]);
    }
}

<?php

namespace App\Http\Controllers;

use Butschster\Head\Facades\Meta;
use Butschster\Head\Packages\Entities\OpenGraphPackage;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\URL;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addMetaTags(String $title, String $description, Array $keywords, String $imagePath = null)
    {
        Meta::prependTitle($title)
            ->setDescription($description)
            ->setKeywords($keywords);

        $og = new OpenGraphPackage('');

        $og->setType('website')
            ->setSiteName(env('APP_NAME'))
            ->setTitle($title)
            ->setUrl(URL::current())
            ->setLocale('fr_FR')
            ->setDescription($description);
        if ($imagePath)  $og->addImage($imagePath);
        Meta::registerPackage($og);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\News;
use Illuminate\Database\Capsule\Manager as DB;

class TestController extends BaseController
{
    public function index()
    {
        // testing eloquent and filling db manually
        $this->fillDataBase();

        // testing twig
        $allNewsWithLanguage = News::with('language')->get();
        return $this->render('Test/index.twig.php', ['news' => $allNewsWithLanguage]);
        // TODO: Add proper error handling
    }

    private function fillDataBase()
    {
        DB::transaction(function () { // Not necessary but for test purposes
            $language = Language::firstOrCreate([
                "name" => "Dutch",
                "code" => "NE"
            ]);
//        var_dump(Language::where('code', 'NE')->first());

            $news = News::firstOrNew([
                "title" => "Boeren blokkeren de snelwegen in protest",
                "image" => ""
            ]);

            if (!isset($news->language) || $news->language != $language) {
                $news->language()->associate($language);
                $news->save();
            }
//        var_dump($news);
        });

    }
}
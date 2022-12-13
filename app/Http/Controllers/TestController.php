<?php
namespace App\Http\Controllers;

use App\Http\Resources\TestResource;
use App\Models\Test;
use Deegitalbe\LaravelTrustupIoProjects\Resource\ProjectResource;
use Deegitalbe\LaravelTrustupIoExternalModelRelations\Collections\ExternalModelRelatedCollection;

class TestController extends Controller{




  public function index()
    {
      /** @var ExternalModelRelatedCollection */
        $tests = Test::all();
        $tests->loadExternalRelations('project');

        // return response()->json($changelogs);
        return TestResource::collection(($tests));
    }
}
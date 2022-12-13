<?php
namespace App\Http\Resources;

use Deegitalbe\LaravelTrustupIoExternalModelRelations\Traits\Resources\IsExternalModelRelatedResource;
use Deegitalbe\LaravelTrustupIoProjects\Resource\ProjectResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TestResource extends JsonResource {

  use IsExternalModelRelatedResource;

  public $resource;




  public function toArray($request)
  {
    return [

      'project' => ProjectResource::collection($this->whenExternalRelationLoaded('project'))

    ];
  }
}
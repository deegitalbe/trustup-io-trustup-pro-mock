<?php

namespace App\Models;

use Deegitalbe\LaravelTrustupIoProjects\Contracts\Models\ProjectRelatedModelContract;
use Deegitalbe\LaravelTrustupIoProjects\Traits\Models\IsProjectRelatedModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model implements ProjectRelatedModelContract
{
    use HasFactory, IsProjectRelatedModel;



    public function getExternalRelationNames(): array
    {
        return [
            'project'
        ];
    }

    public function project(){
        return $this->hasManyProjects('project_ids');
    }

    public function getProject(){
        return $this->getExternalModels('project');
    }
}

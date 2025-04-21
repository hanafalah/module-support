<?php

namespace Hanafalah\ModuleSupport\Models;

use Hanafalah\LaravelHasProps\Concerns\HasProps;
use Hanafalah\LaravelSupport\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hanafalah\ModuleSupport\Resources\DocumentType\{
    ViewDocumentType,
    ShowDocumentType
};

class DocumentType extends BaseModel
{
    use HasProps, SoftDeletes;
    
    public $list = [
        'id', 'name', 'props',
    ];

    protected $casts = [];

    

    public function viewUsingRelation(): array{
        return [];
    }

    public function showUsingRelation(): array{
        return [];
    }

    public function getViewResource(){
        return ViewDocumentType::class;
    }

    public function getShowResource(){
        return ShowDocumentType::class;
    }

    

    
}

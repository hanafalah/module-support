<?php

namespace Hanafalah\ModuleSupport\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleSupport\Contracts\Data\DocumentTypeData as DataDocumentTypeData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class DocumentTypeData extends Data implements DataDocumentTypeData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public mixed $name = null;

    #[MapInputName('props')]
    #[MapName('props')]
    public ?array $props = null;
}
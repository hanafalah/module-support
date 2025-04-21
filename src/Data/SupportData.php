<?php

namespace Hanafalah\ModuleSupport\Data;

use Hanafalah\LaravelSupport\Supports\Data;
use Hanafalah\ModuleSupport\Contracts\Data\SupportData as DataSupportData;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;

class SupportData extends Data implements DataSupportData
{
    #[MapInputName('id')]
    #[MapName('id')]
    public mixed $id = null;

    #[MapInputName('name')]
    #[MapName('name')]
    public string $name;

    #[MapInputName('reference_type')]
    #[MapName('reference_type')]
    public string $reference_type;

    #[MapInputName('reference_id')]
    #[MapName('reference_id')]
    public mixed $reference_id;

    #[MapInputName('author_type')]
    #[MapName('author_type')]
    public string $author_type;

    #[MapInputName('author_id')]
    #[MapName('author_id')]
    public mixed $author_id;

    #[MapInputName('paths')]
    #[MapName('paths')]
    public ?array $paths = [];

    #[MapInputName('props')]
    #[MapName('props')]
    public mixed $props = [];
}

<?php

namespace Hanafalah\ModuleSupport\Contracts\Schemas;

use Hanafalah\LaravelSupport\Contracts\Data\PaginateData;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\ModuleSupport\Contracts\Data\SupportData;

interface Support extends DataManagement
{
    public function getSupport(): mixed;
    public function prepareShowSupport(?Model $model = null, ?array $attributes = null): ?Model;
    public function showSupport(?Model $model = null): array;
    public function prepareStoreSupport(SupportData $support_dto): Model;
    public function storeSupport(?SupportData $support_dto = null): array;
    public function prepareViewSupportList(): Collection;
    public function viewSupportList(): array;
    public function prepareViewSupportPaginate(PaginateData $paginate_dto): LengthAwarePaginator;
    public function viewSupportPaginate(?PaginateData $paginate_dto = null): array;
    public function prepareDeleteSupport(? array $attributes = null): bool;
    public function deleteSupport(): bool;
    public function support(mixed $conditionals = null): Builder;
    
    
}

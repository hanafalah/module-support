<?php

namespace Hanafalah\ModuleSupport\Concerns;

trait HasSupport
{

    public function initializeSupport()
    {
        $this->mergeFillable([
            $this->getSupportForeignKey()
        ]);
    }

    protected function getSupportForeignKey(): string
    {
        return $this->SupportModel()->getForeignKey();
    }

    //EIGER SECTION
    public function funding()
    {
        return $this->belongsToModel('Support', $this->getSupportForeignKey());
    }
    //END EIGER SECTION
}

<?php

namespace Hanafalah\ModuleSupport\Supports;

use Hanafalah\LaravelSupport\Contracts\Supports\DataManagement;
use Hanafalah\LaravelSupport\Supports\PackageManagement;

class BaseModuleSupport extends PackageManagement implements DataManagement
{
    /** @var array */
    protected $__module_support_config = [];

    /**
     * A description of the entire PHP function.
     *
     * @param Container $app The Container instance
     * @throws Exception description of exception
     * @return void
     */
    public function __construct()
    {
        $this->setConfig('module-support', $this->__module_support_config);
    }
}

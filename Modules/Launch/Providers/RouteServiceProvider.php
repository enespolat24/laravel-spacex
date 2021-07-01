<?php

namespace Epigra\Launch\Providers;

use Epigra\Core\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
   public function boot()
   {
       $this->setModuleName('Launch');
       parent::boot();
   }
}

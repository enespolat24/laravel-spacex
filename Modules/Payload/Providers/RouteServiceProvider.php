<?php

namespace Epigra\Payload\Providers;

use Epigra\Core\Providers\BaseRouteServiceProvider;

class RouteServiceProvider extends BaseRouteServiceProvider
{
   public function boot()
   {
       $this->setModuleName('Payload');
       parent::boot();
   }
}

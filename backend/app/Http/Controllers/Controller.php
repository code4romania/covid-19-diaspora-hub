<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private function isGeneratingDocumentation()
    {
        return config('app.env') === 'documentation';
    }

    public function perPage()
    {
        return $this->isGeneratingDocumentation() ? 5 : 50;
    }
}

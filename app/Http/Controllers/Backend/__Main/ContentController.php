<?php

namespace App\Http\Controllers\Backend\__Main;

use App\Http\Controllers\Controller;
use App\Http\Traits\Backend\__System\Controllers\Datatable\DefaultController;
use App\Http\Traits\Backend\__System\Controllers\Datatable\ExtensionController;
use App\Http\Traits\HandlesFormRequest;
use Illuminate\Routing\Controllers\HasMiddleware;

use App\Http\Requests\Backend\__Main\Content\StoreRequest;
use App\Http\Requests\Backend\__Main\Content\UpdateRequest;

class ContentController extends Controller implements HasMiddleware 
{
    /**
     **************************************************
     * @return MIDDLEWARE
     **************************************************
     **/

    public static function middleware(): array
    {
        return [];
    }

    /**
     **************************************************
     * @return CONSTRUCT
     **************************************************
     **/

    public function __construct() 
    {
        $this->model            = 'App\Models\Backend\__Main\Content';
        $this->path             = 'pages.backend.__main.content.';
        $this->url              = '/dashboard/contents';
        $this->sort             = '1, desc';
        $this->status           = 'default';

        app()->instance('current.model', $this->model);
        app()->instance('current.url', $this->url);
    }

    use DefaultController;
    use ExtensionController;
    use HandlesFormRequest;

    public function store(StoreRequest $request) {}
    public function update(UpdateRequest $request, $id) {}
}

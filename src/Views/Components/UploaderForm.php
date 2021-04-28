<?php

namespace Idea\Uploader\Views\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class UploaderForm extends Component
{

    public $action;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action)
    {
        //
        $this->action = $action;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $action = '/';
        //dd(__DIR__);
        return view("uploady::components.uploader-form",compact('action'));
        //return View::file(__DIR__.'../../../views/components/uploader-form.blade.php')
    }
}

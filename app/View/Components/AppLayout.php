<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $header;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header = null)
    {
        $this->header = $header;
    }
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('layouts.app');
    }
}

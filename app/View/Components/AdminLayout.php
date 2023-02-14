<?php

namespace App\View\Components;

use Illuminate\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.admin');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component {
    public $activePage;
    
    public function __construct($activePage = null) {
        if ($activePage === null) {
            $this->activePage = optional(request()->route())->getName() ?? 'home';
        } else {
            $this->activePage = $activePage;
        }
    }

    public function render(): View|Closure|string {
        return view('components.navbar');
    }
}

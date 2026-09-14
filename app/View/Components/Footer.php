<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Footer extends Component {
    public $year;

    public function __construct() {
        $this->year = date('Y');
    }

    public function render(): View|Closure|string {
        return view('components.footer');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class playersTable extends Component
{
    /**
    *
    *
    */
    public $players;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($players)
    {
        $this->players = $players;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.players-components.players-table');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlayerModalShow extends Component
{
    public $player;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($player)
    {
        $this->player = $player;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.players-components.player-modal-show');
    }
}

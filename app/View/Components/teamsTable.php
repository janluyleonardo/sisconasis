<?php

namespace App\View\Components;

use Illuminate\View\Component;

class teamsTable extends Component
{
    /**
     *
     * the collection data for table
     *
     */
    public $teams;
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($teams)
    {
        $this->teams = $teams;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.teams-table');
    }
}

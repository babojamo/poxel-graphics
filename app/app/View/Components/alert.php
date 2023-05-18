<?php

namespace App\View\Components;

use Illuminate\View\Component;

class alert extends Component
{
    public $delay;
    public $content;
    public $header;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($delay = 3000, $content = '', $header = 'Alert', $type = 'success')
    {
        $this->delay = $delay;
        $this->header = $header;
        $this->content = $content;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}

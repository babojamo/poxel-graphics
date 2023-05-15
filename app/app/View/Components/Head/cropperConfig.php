<?php

namespace App\View\Components\Head;

use Illuminate\View\Component;

class cropperConfig extends Component
{
    public $selector;
    public $thumbnail_selector;
    public $input;
    public $ratio;
    public $thumbnail_ratio;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selector = '#cropped-main-image', $thumbnailSelector = null, $input = null, $ratio = null, $thumbnailRatio = null)
    {
        $this->selector = $selector;
        $this->thumbnail_selector = $thumbnailSelector;
        $this->input = $input;
        $this->ratio = $ratio;
        $this->thumbnail_ratio = $thumbnailRatio;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.head.cropper-config');
    }
}

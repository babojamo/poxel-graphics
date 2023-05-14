<?php

namespace App\View\Components\Head;

use Illuminate\View\Component;

class tinymceConfig extends Component
{
    public $selector;

    public $uploadUrl;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selector = 'tinymceEditor', $uploadUrl = '')
    {
        $this->selector = $selector;
        $this->uploadUrl = empty($uploadUrl) ? route('admin.upload.tinymce') : $uploadUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.head.tinymce-config');
    }
}

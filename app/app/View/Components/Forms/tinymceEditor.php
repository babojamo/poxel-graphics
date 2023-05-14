<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class tinymceEditor extends Component
{
    public $placeholder;
    public $name;
    public $rows;
    public $id;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id = 'tinymce', $nane = 'tinymce', $rows = '3', $placeholder = 'Content', $name = 'content')
    {
        $this->placeholder = $placeholder;
        $this->name = $name;
        $this->rows = $rows;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.forms.tinymce-editor');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Button extends Component
{
    public string $type;
    public ?string $loadingTarget;
    public string $class;
    public string $variant;

    /**
     * Create a new component instance.
     *
     * @param string $type
     * @param string|null $loadingTarget
     * @param string $class
     * @param string $variant
     */
    public function __construct(string $type = 'submit', string $loadingTarget = null, string $class = '', string $variant = 'blue')
    {
        $this->type = $type;
        $this->loadingTarget = $loadingTarget;
        $this->class = $class;
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View
     */
    public function render(): View
    {
        return view('components.button');
    }
}

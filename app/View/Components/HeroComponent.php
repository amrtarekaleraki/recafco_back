<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeroComponent extends Component
{
    public string $image;
    public string $title;
    public string $subtitle;
    public string $paragraph;
    public string $link1;
    public string $link2;
    public string $link3;
    public string $link4;
    public string $link5;

    // Constructor to initialize all properties
    public function __construct(
        string $image,
        string $title,
        string $subtitle,
        string $paragraph,
        string $link1,
        string $link2,
        string $link3,
        string $link4,
        string $link5
    ) {
        // Initialize the properties
        $this->image = $image;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->paragraph = $paragraph;
        $this->link1 = $link1;
        $this->link2 = $link2;
        $this->link3 = $link3;
        $this->link4 = $link4;
        $this->link5 = $link5;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero-component');
    }
}

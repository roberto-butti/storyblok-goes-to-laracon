<?php

namespace App\Livewire;

use Livewire\Attributes\Reactive;


class StoryblokComponent extends StoryblokBaseComponent
{

    #[Reactive]
    public $component = [];

    protected function getComponent() {
        return $this->component;
    }




}

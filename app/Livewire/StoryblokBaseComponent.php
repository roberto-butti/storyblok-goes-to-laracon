<?php

namespace App\Livewire;


use Livewire\Component;

abstract class StoryblokBaseComponent extends Component
{
    private $editable;




    public $editableAttributes = '';

    abstract protected function getComponent();

    public function render()
    {
        $this->editable = $this->extractEditableInfo($this->getComponent());
        $this->editableAttributes = $this->getEditableString();

        return view('components.storyblok.'.$this->getComponent()['component']);
    }

    private function extractEditableInfo($blok)
    {
        if (! is_array($blok) || ! array_key_exists('_editable', $blok)) {
            return [];
        }

        $options = json_decode(
            preg_replace(['/^<!--#storyblok#/', '/-->$/'], '', $blok['_editable']),
            true
        );

        if ($options) {
            return [
                'data-blok-c' => json_encode($options),
                'data-blok-uid' => $options['id'].'-'.$options['uid'],
            ];
        }

        return [];
    }

    protected function getEditableString()
    {
        return " data-blok-c='".$this->editable['data-blok-c']."' "
            ." data-blok-uid='".$this->editable['data-blok-uid']."'";
    }
}

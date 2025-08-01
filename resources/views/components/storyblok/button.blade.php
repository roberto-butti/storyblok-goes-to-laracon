

<a
    class="btn {{Arr::get($component, 'ghost') ?
    'btn-ghost border-base-content/20 hover:bg-base-content/5' :
   'btn-primary text-base-100' }} rounded-full px-8 py-3"
    href="{{Arr::get($component, 'link.url')}}"
    {!! $editableAttributes !!}
    id="button-{{ Arr::get($component,'_uid') }}"
>
    {{Arr::get($component, 'label')}}
</a>

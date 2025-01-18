@aware(['tableName','isTailwind','isBootstrap','isBootstrap4','isBootstrap5'])
@props(['filterPillTitle', 'filterPillValue', 'filterSelectName', 'separator'])
<span
    wire:key="{{ $tableName }}-filter-pill-{{ $filterSelectName }}"
    {{
        $attributes->merge($this->getFilterPillsItemAttributes())
        ->class([
            'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 capitalize' => $isTailwind && $this->getFilterPillsItemAttributes()['default-styling'],
            'bg-indigo-100 text-indigo-800 dark:bg-indigo-200 dark:text-indigo-900' => $isTailwind && $this->getFilterPillsItemAttributes()['default-colors'],
            'badge badge-pill badge-info d-inline-flex align-items-center' => $isBootstrap4 && $this->getFilterPillsItemAttributes()['default-styling'],
            'badge rounded-pill bg-info d-inline-flex align-items-center' => $isBootstrap5 && $this->getFilterPillsItemAttributes()['default-styling'],
        ])
        ->except(['default-styling', 'default-colors'])
    }}
>
    {{ $filterPillTitle }}:

    @if(is_array($filterPillValue))
        @foreach($filterPillValue as $filterPillArrayValue)
            {{ $filterPillArrayValue }}{!! !$loop->last ? $separator : '' !!}
        @endforeach
    @else
        {{ $filterPillValue }}
    @endif

    <x-livewire-tables::tools.filter-pills.buttons.reset-filter :filterKey="$filterSelectName" />

</span>

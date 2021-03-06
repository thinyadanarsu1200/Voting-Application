@props(['align' => '','width' => '48', 'contentClasses' => 'py-1 bg-white','alignmentClasses' => ''])

@php
switch ($align) {
    case 'left':
        $alignmentClasses = 'origin-top-left left-0';
        break;
    case 'top':
        $alignmentClasses = 'origin-top';
        break;
    case 'right':
        $alignmentClasses = 'origin-top-right right-0';
    default:
        break;
}

switch ($width) {
    case '48':
        $width = 'w-48';
        break;
}

// switch($show){
//     case 'block':
//         $show="block";
//         break;
//     case 'md:block':
//         $show="md:block";
//         break;
//     case 'hidden':
//         $show="hidden";
//         break;
//     case 'lg:hidden':
//         $show="lg:hidden";
//         break;
// }
@endphp

<div class="relative" x-data="{ open: false }" @click.outside="open = false" @close.stop="open = false">
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

    <div x-show="open"
            x-transition:enter="transition ease-out duration-150"
            x-transition:enter-start="transform opacity-0 scale-50"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="transform opacity-100 scale-100"
            x-transition:leave-end="transform opacity-0 scale-50"
            class="absolute z-50 mt-2 {{ $width }} rounded-lg shadow-dialog overflow-hidden {{ $alignmentClasses }} {{ $contentClasses }}"
            style="display: none;"
            @click="open = false"
            @keydown.escape.window="open=false">
        {{-- <div class="rounded-md ring-1 ring-black ring-opacity-5 ">
            {{ $content }}
        </div> --}}
        {{ $content }}
    </div>
</div>

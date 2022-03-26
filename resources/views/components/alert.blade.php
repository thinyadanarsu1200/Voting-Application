@props(['status' => '', 'message' => ''])
@php
switch($status)
{    case 'success':
        $class = "bg-green-100 text-green-900";
        break;
    case 'error':
        $class = "bg-red-100 text-red-900";
        break;
    case 'warning':
        $class = "bg-yellow-100 text-yellow-900";
        break;
    default:
        $class = "";
}
@endphp

@if ($message)
<p 
x-data="{ visible :true}"
x-init="
setTimeout(()=> {
    visible = false;
},5000);
"
x-show="visible"
x-transition:enter="transition ease-out duration-150"
x-transition:enter-start="transform opacity-0 scale-50"
x-transition:enter-end="transform opacity-100 scale-100"
x-transition:leave="transition ease-in duration-150"
x-transition:leave-start="transform opacity-100 scale-100"
x-transition:leave-end="transform opacity-0 scale-50"
class="p-4 w-full text-sm {{ $class }} rounded-lg">
    {{ $message }}
</p>
@endif
<a 
{{ $attributes->merge(['type' => "button", 'class' => 'flex items-center justify-center w-1/2 h-11 text-xs font-semibold rounded-md  transition duration-150 ease-in text-white ']) }}>
    {{ $slot }}
</a>
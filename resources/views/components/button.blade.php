<button 
    {{ $attributes->merge(['type' => "button", 'class' => 'flex items-center justify-center px-4 py-2 h-11 bg-gray-200 border hover:border-gray-300 text-xs font-semibold rounded-md  transition duration-150 ease-in ']) }}>
    {{$slot}}
 </button>

  

@php
  $classes = 'inline-flex 
    items-center 
    px-4 
    py-2 
    bg-indigo-800 
    dark:bg-sky-400 
    border 
    border-transparent 
    rounded-md 
    font-semibold 
    text-xs 
    text-white 
    dark:text-sky-800 
    uppercase 
    tracking-widest 
    hover:bg-gray-700 
    dark:hover:bg-sky-100 
    focus:bg-gray-700 
    dark:focus:bg-sky-100 
    active:bg-gray-900 
    dark:active:bg-sky-300 
    focus:outline-none 
    focus:ring-2 
    focus:ring-indigo-500 
    focus:ring-offset-2 
    dark:focus:ring-offset-sky-800 
    transition 
    ease-in-out 
    duration-150';
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => $classes]) }}>
  {{ $slot }}
</button>

@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'p-2 border-slate-600 focus:border-indigo-500 focus:ring-indigo-500  shadow-sm']) !!}>

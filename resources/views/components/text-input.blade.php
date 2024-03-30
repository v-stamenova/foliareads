@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-nikol-500 dark:focus:border-nikol-600 focus:ring-nikol-500 dark:focus:ring-nikol-600 rounded-md shadow-sm']) !!}>

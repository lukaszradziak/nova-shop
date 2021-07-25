<x-app-layout header="{{ __('Products') }}">
    <x-container>
        <x-product-list :products="$products" />
    </x-container>
</x-app-layout>

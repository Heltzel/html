<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <x-crud-button action="create" route="{{ route('admin.menus.create') }}">
                    New Menu </x-crud-button>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-data-table :headers="$headers" :rows="$rows" :tableTitle="$tableTitle" />
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

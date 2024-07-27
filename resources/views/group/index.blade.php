<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="flex-none font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Groups') }}
            </h2>
            <span class="grow">
            </span>
            <a href='./create'
                class="flex-none bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Create
            </a>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @foreach ($groups as $group)
                <a href="{{ route('group.edit', ['group' => $group->id]) }}"
                    class="block p-4 sm:p-8 bg-white hover:bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <p class="text-gray-800 dark:text-gray-200">
                            {{ $group->name }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>

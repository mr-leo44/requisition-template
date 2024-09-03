<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <h2 class="font-semibold text-3xl text-gray-800 mb-3 md:mb-0 dark:text-white leading-tight">
                {{ __('Demandes de Requisition') }}
            </h2>
            <div>
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-white bg-gray-900 px-6 py-3 dark:bg-orange-500 rounded-lg"
                    data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 dark:text-gray-400 hover:border-gray-300 dark:hover:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 rounded-lg" id="ongoing-styled-tab"
                            data-tabs-target="#styled-ongoing" type="button" role="tab" aria-controls="ongoing"
                            aria-selected="false">En cours</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="historics-styled-tab" data-tabs-target="#styled-historics" type="button" role="tab"
                            aria-controls="historics" aria-selected="false">Historique</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="statistics-styled-tab" data-tabs-target="#styled-statistics" type="button" role="tab"
                            aria-controls="statistics" aria-selected="false">Statistiques</button>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="px-4 sm:px-6 lg:px-8">
        <div>
            <div
                class="w-full p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="text-gray-900 dark:text-white">
                    <div id="default-styled-tab-content">
                        <x-ongoing-reqs />
                        <x-historics />
                        <x-statistics-reqs />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

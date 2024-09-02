<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-3xl text-gray-800 dark:text-white leading-tight">
                {{ __('Demandes de Requisition') }}
            </h2>
            <div>
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-white bg-gray-900 px-6 py-3 dark:bg-orange-400 rounded-lg"
                    data-tabs-inactive-classes="text-gray-500 hover:text-gray-600 dark:text-gray-400 hover:border-gray-300 dark:hover:text-gray-300"
                    role="tablist">
                    <li class="me-2" role="presentation">
                        <button class="inline-block p-4 rounded-lg" id="profile-styled-tab"
                            data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">En cours</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Historique</button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-styled-tab" data-tabs-target="#styled-settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Statistiques</button>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="px-4 sm:px-6 lg:px-8">
        <div>
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                <div class="text-gray-900 dark:text-white">
                    <div id="default-styled-tab-content">
                        <div class="hidden p-2 rounded-lg" id="styled-profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="grid grid-cols-4 gap-4">

                                <a href="#"
                                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

                                    <div class="flex items-center justify-between">
                                        <h5
                                            class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                            REQ-2-2024</h5>
                                        <span class="font-medium text-sm text-gray-700 dark:text-gray-400">Il ya deux
                                                jours</span>
                                    </div>
                                    <p class="font-medium text-lg text-white">Sharon Jayes</p>
                                    <p class="font-medium my-3 text-lg text-white">Moyens généraux</p>
                                    <hr>
                                    <div>
                                        buttons
                                    </div>

                                </a>

                            </div>
                        </div>
                        <div class="hidden p-4 rounded-lg" id="styled-dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the
                                <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated
                                    content</strong>.
                                Clicking another tab will toggle the visibility of this one for the next. The tab
                                JavaScript
                                swaps
                                classes to control the content visibility and styling.
                            </p>
                        </div>
                        <div class="hidden p-4 rounded-lg" id="styled-settings" role="tabpanel"
                            aria-labelledby="settings-tab">
                            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the
                                <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated
                                    content</strong>.
                                Clicking another tab will toggle the visibility of this one for the next. The tab
                                JavaScript
                                swaps
                                classes to control the content visibility and styling.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

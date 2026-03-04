<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="p-6">
        <form wire:submit="">
            <div class="mt-2">
                <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Name</label>
                <div
                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                    <input type="text"
                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                </div>
            </div>

            <div class="mb-10 mt-4">
                <div
                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                    <select wire:model.live='Kategorie'
                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500">
                        <option hidden readonly selected> -- select an options -- </option>

                        <option class="text-white ">
                            Arbeitstag
                        </option>
                        <option class="text-white">
                            Urlaub
                        </option>
                        <option class="text-white">
                            Krankenstand
                        </option>
                    </select>
                </div>
            </div>
            @if ($Kategorie == 'Arbeitstag')
                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Datum des
                        Arbeitstages</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">

                        <input type="date"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                    </div>
                </div>

                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Startzeit</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                        <input type="time"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                    </div>
                </div>
                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Endzeit</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                        <input type="time"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                    </div>
                </div>
                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Soll_Arbeitszeit</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                        <input type="time"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                    </div>
                </div>
                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Mittagspause</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                        <input type="text"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                    </div>
                </div>
                
            @elseif ($Kategorie == 'Urlaub' || $Kategorie == 'Krankenstand')
                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Datum</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">

                        <input type="date"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500" />
                    </div>
                </div>
                <div class="mt-2">
                    <label class="block text-sm/6 font-medium text-gray-900 dark:text-white">Notiz</label>
                    <div
                        class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">

                        <textarea rows="4" cols="50"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500"></textarea>
                    </div>
                </div>
            @endif

            <button type="submit"
                class="mt-6 cursor-pointer flex w-full justify-center rounded-md bg-gray-800 px-3 py-1.5 text-sm/6 font-semibold
         text-white shadow-xs hover:bg-gray-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
                Neue Zeiterfassung erstellen
            </button>
        </form>
    </div>
</div>

<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="p-6">
        <div class="mb-5 mt-4">
            <div
                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                <select wire:model.live='current_name'
                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500">
                    <option hidden readonly selected> -- select a name -- </option>
                    @foreach ($Names as $the_name)
                        <option class="text-white ">
                            {{ $the_name->Name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        @if ($current_name != null)
            <div class="mb-5">
                <div
                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                    <select wire:model.live='current_month'
                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500">
                        <option hidden readonly selected> -- select a month -- </option>
                        <option class="text-white">
                            -
                        </option>
                        @foreach ($months as $month)
                            <option class="text-white ">
                                {{ $month }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-5">
                <div
                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600 dark:bg-white/5 dark:outline-gray-600 dark:has-[input:focus-within]:outline-indigo-500">
                    <select wire:model.live='current_category'
                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 dark:bg-gray-800 dark:text-white dark:placeholder:text-gray-500">
                        <option hidden readonly selected> -- select a category -- </option>
                        <option class="text-white">
                            -
                        </option>

                        <option class="text-white ">
                            Arbeitstag
                        </option>
                        <option class="text-white ">
                            Urlaub
                        </option>
                        <option class="text-white ">
                            Krankenstand
                        </option>
                    </select>
                </div>
            </div>
        @endif


        <div class="overflow-x-auto rounded-lg shadow mt-10">
            <table class="min-w-full divide-y divide-gray-300">
                <thead class="bg-gray-100">
                    <tr>
                        @foreach ($columns as $column)
                            @if ($column == 'Name')
                                @continue
                            @endif
                            <th
                                class="px-4 py-3 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">
                                {{ ucfirst($column) }}
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($rows as $row)
                        @if (
                            $row->Name == $current_name &&
                                ($current_month == $months[(int) date('m', strtotime($row->Datum)) - 1] || $current_month == null || $current_month == '-') &&
                                ($current_category == $row->Kategorie || $current_category == null || $current_category == '-'))
                            <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }} hover:bg-gray-100 transition">
                                @foreach ($columns as $column)
                                    @if ($row->$column == $current_name)
                                        @continue
                                    @endif
                                    <td class="px-4 py-3 text-sm text-gray-900 whitespace-nowrap">
                                        {{ $row->$column }}
                                    </td>
                                @endforeach
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

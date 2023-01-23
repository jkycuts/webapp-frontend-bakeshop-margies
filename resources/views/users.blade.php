<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <button class="float-right rounded-full bg-sky-500 p-1 hover:bg-sky-700">Add Users</button>
                 
                    <table class="table-auto w-full">
                        <thead>
                          <tr class="text-center">
                                <th>Song</th>
                                <th>Artist</th>
                                <th>Year</th>
                                <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                                <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                                <td>Malcolm Lockyer</td>
                                <td>1961</td>
                            <td>
                                <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Update</button>
                                <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Delete</button>
                            </td>
                            </tr>
                          <tr class="text-center">
                                <td>Witchy Woman</td>
                                <td>The Eagles</td>
                                <td>1972</td>
                            <td>
                                 <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Update</button>
                                 <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Delete</button>
                            </td>
                          </tr>
                          <tr class="text-center">
                                <td>Shining Star</td>
                                <td>Earth, Wind, and Fire</td>
                                <td>1975</td>
                            <td>
                                 <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Update</button>
                                 <button class="rounded-full bg-sky-500 p-1 hover:bg-sky-700">Delete</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

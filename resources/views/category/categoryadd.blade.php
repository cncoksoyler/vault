<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col">
                        <form class="form" action="{{route('category.store')}}" method="post">
                            @csrf
                            <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800v mt-8">
                                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Category Create</h2>

                                <form>
                                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="name">Name</label>
                                            <input id="name" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                                        </div>

                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="amg">AMG</label>
                                            <select class="w-full block border border-gray-300 bg-white text-gray-700 rounded px-3 py-2 outline-none mt-2">
                                                <option class="py-1">AMG 7</option>
                                                <option class="py-1">AMG 8</option>
                                                <option class="py-1">Others</option>
                                            </select>


                                        </div>

                                        <div>
                                            <label class="text-gray-700 dark:text-gray-200" for="amg">Area</label>
                                            <select class="w-full block border border-gray-300 bg-white text-gray-700 rounded px-3 py-2 outline-none mt-2">
                                                <option class="py-1">overmoulding</option>
                                                <option class="py-1">assembly</option>
                                                <option class="py-1">fineblanking</option>
                                            </select>
                                        </div>


                                    </div>

                                    <div class="flex justify-end mt-6">
                                        <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Create</button>
                                    </div>
                                </form>
                            </section>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

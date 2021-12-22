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
                    <!-- Search input on desktop screen -->
                    <nav class="bg-white shadow dark:bg-gray-800 sm:rounded-lg shadow-sm" >
                          
                        <div class="flex flex-col md:flex-row md:justify-between md:items-center">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">                      
                                  <form action="{{route('category.post')}}" method="post">
                                    @csrf
                                    <!-- Search input on desktop screen -->
                                    <div class="hidden mx-10 md:block">
                                        <div class="relative">
                                            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </span>
            
                                            <input type="text" name='search' class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Search">
                                      </div>
                                    </div>
                                  </form>
                                </div>
                                 
            
                                <!-- Mobile menu button -->
                                <div class="flex md:hidden">
                                    <button type="button" class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400" aria-label="toggle menu">
                                        <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                            <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
            
                            <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                            <div class="items-center md:flex">
                                
            
                                <div class="flex items-center py-2 -mx-1 md:mx-0">
                               
                                    <a class="block w-1/2 px-3 py-2 mx-1 text-sm font-medium leading-5 text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-600 md:mx-0 md:w-auto" href="#">Add</a>
                                    
                                    
                                </div>
            
                                <!-- Search input on mobile screen -->
                                <div class="mt-3 md:hidden">
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                                            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
            
                                        <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
            
                   
                </nav>

                    <!-- Search end -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Category ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Category Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Up ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Edit
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($category as $item)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">

                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $item->id }}
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">{{ $item->name }}</div>

                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <span
                                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            {{ $item->up_id }}
                                                        </span>
                                                    </td>

                                                    <td
                                                        class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                        <a href="{{ route('machines.create') }}"
                                                            class="text-indigo-600 hover:text-indigo-900 m-2">Add</a>
                                                        <a href="#"
                                                            class="text-indigo-600 hover:text-indigo-900 m-2">Edit</a>
                                                        <a href="#"
                                                            class="text-indigo-600 hover:text-indigo-900 m-2">Drop</a>
                                                    </td>
                                                </tr>
                                            @endforeach



                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="mt-4">
                            {{ $category->links() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>

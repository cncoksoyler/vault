<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stockdetail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                        <div class="w-full overflow-x-auto">
                          <table class="w-full">
                            <thead>
                              <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">id</th>
                                <th class="px-4 py-3">Product</th>
                                <th class="px-4 py-3">Location</th>
                                <th class="px-4 py-3">User</th>
                                <th class="px-4 py-3">Input Source</th>
                                <th class="px-4 py-3">Quantitiy</th>
                              </tr>
                            </thead>
                            <tbody class="bg-white">      
                                @foreach ($stock as $item )               
                               
                                <tr class="text-gray-700">
                                  <td class="px-4 py-3 border text-md font-semibold">{{$item["id"]}}</td>
                                  <td class="px-4 py-3 border text-md font-semibold">{{$item["model_products"]["slug"]}}</td>
                                  <td class="px-4 py-3 border text-md font-semibold">{{$item["model_locations"]["name"]}}</td>
                                  <td class="px-4 py-3 border text-md font-semibold">{{$item["model_users"]["email"]}}</td>
                                  <td class="px-4 py-3 border text-md font-semibold">{{$item["model_input_sources"]["name"]}}</td>
                                  <td class="px-4 py-3 border text-md font-semibold">{{$item["quantitiy"]}}</td>

                                </tr>
                                @endforeach
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                </div>


                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

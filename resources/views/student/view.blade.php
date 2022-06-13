<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Of Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />
                    <div class="sparkline13-list">
                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div id="toolbar" class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table id="table" class="min-w-full divide-y divide-gray-200" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Department Id</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Batch</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Session</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Phone</th>
                                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200">
                                                @if (isset($student))
                                                @php
                                                $i = 0;
                                                @endphp
                                                @foreach ($student as $item)
                                                @php
                                                $i++;
                                                @endphp


                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$i}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->dept_id}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->name}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->batch}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->session}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->email}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$item->student_phone}}</td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                                        <x-button href="" class="btn btn-info">{{ __('Update') }}</x-button>

                                                        @csrf
                                                        @method('DELETE')
                                                        <x-button href="" class="btn btn-info">{{ __('Delete') }}</x-button>
                                                    </td>
                                                </tr>

                                                @endforeach
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Static Table End -->
    </div>
    <style>
        .fixed-table-loading {
            display: none;
        }
    </style>
</x-app-layout>
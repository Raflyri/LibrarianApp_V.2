<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List Of Books') }}
        </h2>
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="data-table-area mg-b-15" style="margin-left:210px;width:100%;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>List<span class="table-project-n"> Of</span> Books</h1>
                                </div>
                            </div>

                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar" class="hidden sm:flex sm:items-center sm:ml-6">
                                        <x-dropdown align="right" width="48">
                                            <x-slot name="trigger">
                                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                                    <div>Option</div>

                                                    <div class="ml-1">
                                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </button>
                                            </x-slot>
                                            <x-slot name="content">
                                                <x-dropdown-link value="">Export Basic</x-dropdown-link>
                                                <x-dropdown-link value="all">Export All</x-dropdown-link>
                                                <x-dropdown-link value="selected">Export Selected</x-dropdown-link>
                                            </x-slot>
                                        </x-dropdown>
                                    </div>
                                    <!-- Filter Data Here -->
                                    <table class="table-auto" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th>Serial no.</th>
                                                <th>Book Id</th>
                                                <th>Book Title</th>
                                                <th>author</th>
                                                <th>Department</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (isset($book))
                                            @php
                                            $i = 0;
                                            @endphp
                                            @foreach ($book as $item)
                                            @php
                                            $i++;
                                            @endphp

                                            <tr>
                                                <td>{{$i}}</td>
                                                <td>{{$item->book_id}}</td>
                                                <td>{{$item->book_title}}</td>
                                                <td>{{$item->author}}</td>
                                                <td>{{$item->book_dept}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>
                                                    @if ($item->availablity == 0)
                                                    <x-button class="btn btn-info" style="color: currentColor;cursor: not-allowed;opacity: 0.5;text-decoration: none;"> Issued by: {{$item->issuebook->first()->student->dept_id}} </x-button>
                                                    @endif
                                                    @if ($item->availablity == 1)
                                                    <x-button href="{{route('issue.book',['id'=>$item->id])}}" class="btn btn-primary">Issue Book</x-button>
                                                    @endif

                                                    <x-button href="" class="btn btn-info">Update</x-button>

                                                    <x-button href="" class="btn btn-danger">Delete</x-button>
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
        <!-- Static Table End -->
    </div>

    <style>
        .fixed-table-loading {
            display: none;
        }
    </style>
</x-app-layout>
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
                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Book') }}
        </h2>
    </x-slot>

    <div class="flex justify-center pt-8 sm:justify-start sm:pt-30">
        <form class="form-horizontal form-label-left" style="width:100%;margin-left:60px;" novalidate action="{{route('store.book')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="item form-group">
                <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_id">Book ID
                    <span class="required">*</span>
                </x-label>

                <x-input id="dept_id" value="{{ old('book_id') }}" class="form-control col-md-7 col-xs-12" name="book_id" required="required" type="number"/>
            </div>

            <div class="item form-group">
                <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_title">Book Title <span class="required">*</span>
                </x-label>
                    <x-input id="name" value="{{ old('book_title') }}" class="form-control col-md-7 col-xs-12" name="book_title" required="required" type="text"/>
                
            </div>

            <div class="item form-group">
                <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Author<span class="required">*</span>
                </x-label>
                <x-input id="name" value="{{ old('author') }}" class="form-control col-md-7 col-xs-12" name="author" required="required" type="text"/>
                
            </div>

            <div class="item form-group">
                <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_dept">Department of Book<span class="required">*</span></x-label>
                    <select class="form-control" value="{{ old('book_dept') }}" name="book_dept" required="required">
                        <option value="" disabled selected>Choose option</option>
                        <option value="FIKTI">Computer Science and information technology</option>
                        <option value="ACC">Economy, Management, Accountancy</option>
                        <option value="CE">Civil Engineering and Planning Architecture</option>
                    </select>
               
            </div>

            <div class="item form-group">
                <x-label class="control-label col-md-3 col-sm-3 col-xs-3">Book Description(Optional)<span class="required">*</span></x-label>
                    <textarea name="description" id="" style="width:80%;" rows="8"></textarea>
                
            </div>

            <x-button id="send" type="submit" class="ml-3">
                    {{ __('Add New Book') }}
            </x-button>




        </form>
    </div>
</x-app-layout>
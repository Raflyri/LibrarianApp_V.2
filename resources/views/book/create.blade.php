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
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_id">Book ID
                    <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="dept_id" value="{{ old('book_id') }}" class="form-control col-md-7 col-xs-12" name="book_id" required="required" type="number">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_title">Book Title <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" value="{{ old('book_title') }}" class="form-control col-md-7 col-xs-12" name="book_title" required="required" type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="author">Author<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="name" value="{{ old('author') }}" class="form-control col-md-7 col-xs-12" name="author" required="required" type="text">
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="book_dept">Department of Book<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select class="form-control" value="{{ old('book_dept') }}" name="book_dept" required="required">
                        <option value="" disabled selected>Choose option</option>
                        <option value="FIKTI">Computer Science and information technology</option>
                        <option value="ACC">Economy, Management, Accountancy</option>
                        <option value="CE">Civil Engineering and Planning Architecture</option>
                    </select>
                </div>
            </div>

            <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-3">Book Description(Optional)<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea name="description" id="" style="width:100%;" rows="10"></textarea>
                </div>
            </div>

            <div class="p6 border-t border-black-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="col-md-6 col-md-offset-3" stroke="currentColor" stroke-linecap="round">
                    <button id="send" type="submit" class="button"  >Add New Book</button>
                </div>
            </div>




        </form>
    </div>
</x-app-layout>
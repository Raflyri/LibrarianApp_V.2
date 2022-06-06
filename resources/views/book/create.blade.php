<x-app-layout>
    <x-slot name="header">
        <x-validation-errors />
        <x-success-message />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Book Information Form') }}
                    </h2>
                    <form novalidate action="{{route('store.book')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="book_id" :value="__('Book ID:')" />
                                    <x-input id="dept_id" value="{{ old('book_id') }}" class="block mt-1 w-full" name="book_id" required="required" type="number" />
                                </div>
                                <div>
                                    <x-label for="book_title" :value="__('Book Title:')" />
                                    <x-input id="name" value="{{ old('book_title') }}" class="block mt-1 w-full" name="book_title" required="required" type="text" />
                                </div>
                            </div>

                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="author" :value="__('Author:')" />
                                    <x-input id="name" value="{{ old('author') }}" class="block mt-1 w-full" name="author" required="required" type="text" />
                                </div>
                                <div>
                                    <x-label for="book_dept" :value="__('Department of Book:')" />
                                    <select class="block mt-1 w-full" value="{{ old('book_dept') }}" name="book_dept" required="required">
                                        <option value="" disabled selected>Choose option</option>
                                        <option value="FIKTI">Computer Science and information technology</option>
                                        <option value="ACC">Economy, Management, Accountancy</option>
                                        <option value="CE">Civil Engineering and Planning Architecture</option>
                                    </select>
                                </div>
                            </div>

                            <div class="grid grid-rows-2 gap-6">
                                <x-label for="description" :value="__('Book Description(Optional):')" />
                                <textarea class="block mt-1 w-full" name="description" id="" resize="true"></textarea>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-button id="send" type="submit" class="ml-3">
                                {{ __('Add New Book') }}
                            </x-button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
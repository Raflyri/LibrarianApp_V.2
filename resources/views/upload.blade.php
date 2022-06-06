<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload File') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-validation-errors />
                    <x-success-message />

                    <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Image/file</label>
                                <input type="file" name="files[]" class="form-control-file" multiple="">
                                @if($errors->has('files'))
                                    <span class="help-block text-danger">{{ $errors->first('files') }}</span>
                                @endif
                            </div>

                            <div class="text-center">
                                <x-button class="btn btn-primary">Upload</x-button>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
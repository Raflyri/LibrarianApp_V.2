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

                    <div>

                    <!-- print success message after file upload  -->
                    @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                                @php
                                    Session::forget('success');
                                @endphp
                            </div>
                        @endif

                    <form method="post" action="{{ route('upload') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group mt-1">
                            <x-label for="title" class="mt-1">Attach Image/file</x-label>
                            <x-input type="file" name="files[]" class="form-control-file mt-1" multiple=""/>
                            @if($errors->has('files'))
                            <span class="help-block text-danger mt-1">{{ $errors->first('files') }}</span>
                            @endif
                        </div>

                        <div class="text-right mt-1">
                            <x-button class="btn btn-primary mt-1">Upload</x-button>
                        </div>
                    </form>

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Book') }}
        </h2>
        <x-validation-errors />
        <x-success-message />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form class="form-horizontal form-label-left" novalidate action="{{route('store.student')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                            </x-label>
                            <x-input id="name" value="{{ old('name') }}" class="form-control col-md-7 col-xs-12" name="name" required="required" type="text" />
                        </div>

                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept">Department<span class="required">*</span></x-label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" value="{{ old('dept') }}" name="dept" required="required">
                                    <option value="" disabled selected>Choose option</option>
                                    <option value="FIKTI">Computer Science and information technology</option>
                                    <option value="ACC">Economy, Management, Accountancy</option>
                                    <option value="CE">Civil Engineering and Planning Architecture</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="dept_id">Department ID
                                <span class="required">*</span>
                            </x-label>
                            <x-input id="dept_id" value="{{ old('dept_id') }}" class="form-control col-md-7 col-xs-12" name="dept_id" required="required" type="number" />
                        </div>

                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="batch">Degree<span class="required">*</span></x-label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" value="{{ old('batch') }}" name="batch" required>
                                    <option value="" disabled selected>Choose option</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-3">Session<span class="required">*</span></x-label>
                            <x-input type="text" value="{{ old('session') }}" name="session" class="form-control" required="required" />
                        </div>



                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                            </x-label>

                            <x-input type="email" id="email" value="{{ old('email') }}" name="email" required="required" class="form-control col-md-7 col-xs-12" />

                        </div>

                        <div class="mt-4">
                            <x-label class="control-label col-md-3 col-sm-3 col-xs-12" for="student_phone">Student
                                Phone No <span class="required">*</span>
                            </x-label>

                            <x-input id="student_phone" value="{{ old('student_phone') }}" class="form-control col-md-7 col-xs-12" name="student_phone" pattern="[0-9-]" type="text" required />

                        </div>

                        <div class="mt-4">
                            <div class="col-md-6 col-md-offset-3">
                                <x-button id="send" type="submit" class="btn btn-success">Register Student</x-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
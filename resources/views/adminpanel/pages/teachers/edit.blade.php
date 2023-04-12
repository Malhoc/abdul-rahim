@extends('adminpanel.layouts.app')

@section('title-meta')
    <title>{{ config('app.name') }} | Teacher Create</title>

    <meta name="description" content="this is description">
@endsection

@section('other-css')
    <link href="{{ asset('assets') }}/css/plugins/dropzone/basic.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/plugins/dropzone/dropzone.css" rel="stylesheet">
@endsection

@section('content')
    <div id="page-wrapper" class="gray-bg">

        <div class="row border-bottom">
            @include('partials.header')
        </div>

        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-sm-4">
                <h2>Teacher Management</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('teachers.index') }}">Teacher</a>
                    </li>
                    <li class="active">
                        <strong>Edit</strong>
                    </li>
                </ol>
            </div>
            <div class="col-sm-8">
                <div class="title-action">
                    <a href="{{ route('teachers.index') }}" class="btn btn-primary">Show List</a>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content ">

            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">

                        <div class="ibox-title">
                            <h5>Fill out this form to edit Teacher.</h5>
                            {{-- <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-class">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div> --}}
                        </div>

                        <div class="ibox-content">
                            <form method="POST" class="form-horizontal" action="{{ route('teachers.update', $teacher) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Name</label>

                                    <div class="col-sm-4 @error('name') has-error @enderror">
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $teacher->name }}" required>
                                        @error('name')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Designation</label>

                                    <div class="col-sm-4 @error('designation') has-error @enderror">
                                        <input type="text" class="form-control" name="designation"
                                            value="{{ $teacher->designation }}" required>
                                        @error('designation')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Gender</label>

                                    <div class="col-sm-4 @error('gender') has-error @enderror">
                                        <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio1" value="male" name="gender"
                                                {{ $teacher->gender=='male' ? 'checked' : ''}}>
                                            <label for="inlineRadio1"> Male </label>
                                        </div>
                                        <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="female" name="gender"
                                                {{ $teacher->gender=='female' ? 'checked' : '' }}>
                                            <label for="inlineRadio2"> Female </label>
                                        </div>

                                        <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="other" name="gender"
                                                {{ $teacher->gender=='other' ? 'checked' : '' }}>
                                            <label for="inlineRadio2"> Other </label>
                                        </div>
                                        @error('gender')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Date Of Birth</label>

                                    <div class="col-sm-4 @error('date_of_birth') has-error @enderror">
                                        <input type="date" class="form-control" name="date_of_birth"
                                            value="{{ $teacher->date_of_birth }}" required>
                                        @error('date_of_birth')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Major Subject</label>

                                    <div class="col-sm-4 @error('major_subject') has-error @enderror">
                                        <input type="text" class="form-control" name="major_subject"
                                            value="{{ $teacher->major_subject }}" placeholder="Optional">
                                        @error('major_subject')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-4 @error('email') has-error @enderror">
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $teacher->email }}" placeholder="Optional">
                                        @error('email')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Date of Joining</label>

                                    <div class="col-sm-4 @error('date_of_joining') has-error @enderror">
                                        <input type="date" class="form-control" name="date_of_joining"
                                            value="{{ $teacher->date_of_joining }}" placeholder="Optional">
                                        @error('date_of_joining')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Profile Image</label>

                                    <div class="col-sm-4 @error('profile_image') has-error @enderror">
                                        <input type="file" class="form-control" name="profile_image"
                                            value="{{ $teacher->profile_image }}" placeholder="Optional">
                                        @error('profile_image')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Phone 1</label>

                                    <div class="col-sm-4 @error('phone_1') has-error @enderror">
                                        <input type="text" class="form-control" name="phone_1"
                                            value="{{ $teacher->phone_1 }}">
                                        @error('phone_1')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Phone 2</label>

                                    <div class="col-sm-4 @error('phone_2') has-error @enderror">
                                        <input type="text" class="form-control" name="phone_2"
                                            value="{{ $teacher->phone_2 }}" placeholder="Optional">
                                        @error('phone_2')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Qualification</label>

                                    <div class="col-sm-4 @error('qualification') has-error @enderror">
                                        <input type="text" class="form-control" name="qualification"
                                            placeholder="Optional" value="{{ $teacher->qualification }}">
                                        @error('qualification')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Description</label>

                                    <div class="col-sm-4 @error('description') has-error @enderror">
                                        <input type="text" class="form-control" name="description"
                                            value="{{ $teacher->description }}" placeholder="Optional">
                                        @error('description')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Address</label>

                                    <div class="col-sm-4 @error('address') has-error @enderror">
                                        <input type="text" class="form-control" name="address" placeholder="Optional"
                                            value="{{ $teacher->address }}">
                                        @error('address')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">National Identity #</label>

                                    <div class="col-sm-4 @error('national_identity_no') has-error @enderror">
                                        <input type="text" class="form-control" name="national_identity_no"
                                            placeholder="Optional" value="{{ $teacher->national_identity_no }}">
                                        @error('national_identity_no')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group ">

                                    <label class="col-sm-2 control-label">Salary</label>

                                    <div class="col-sm-4 @error('salary') has-error @enderror">
                                        <input type="number" class="form-control" name="salary"
                                            value="{{ $teacher->salary }}">
                                        @error('salary')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div class="form-group ">

                                    <label class="col-sm-2 control-label">Facebook</label>

                                    <div class="col-sm-4 @error('facebook') has-error @enderror">
                                        <input type="string" class="form-control" name="facebook"
                                            placeholder="Optional" value="{{ $teacher->facebook }}">
                                        @error('facebook')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <label class="col-sm-2 control-label">Instagram</label>

                                    <div class="col-sm-4 @error('instagram') has-error @enderror">
                                        <input type="string" class="form-control" name="instagram"
                                            placeholder="Optional" value="{{ $teacher->instagram }}">
                                        @error('instagram')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                </div>

                                <div class="form-group ">
                                    <label class="col-sm-2 control-label">Twitter</label>

                                    <div class="col-sm-4 @error('twitter') has-error @enderror">
                                        <input type="string" class="form-control" name="twitter" placeholder="Optional"
                                            value="{{ $teacher->twitter }}">
                                        @error('twitter')
                                            <span class="invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="hr-line-dashed"></div>

                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-primary disabledbutton" id="submitbtn"
                                            type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

    </div>
@endsection

@section('custom-script')
    <script>
        $(document).ready(function() {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            $("#isUserCheckBox").on("ifChecked", function hideUserEmailSection() {
                $("#userEmailSection").show();
            });
            $("#isUserCheckBox").on("ifUnchecked", function hideUserEmailSection() {
                $("#userEmailSection").hide();
            });
        });
    </script>
    <!-- DROPZONE -->
    <script src="{{ asset('assets') }}/js/plugins/dropzone/dropzone.js"></script>
    <script>
        $(document).ready(function() {

            Dropzone.options.myAwesomeDropzone = {

                autoProcessQueue: false,
                uploadMultiple: false,
                parallelUploads: 100,
                maxFiles: 1,

                // Dropzone settings
                init: function() {
                    var myDropzone = this;

                    this.element.querySelector("button[type=submit]").addEventListener("click", function(
                        e) {
                        e.preventDefault();
                        e.stopPropagation();
                        myDropzone.processQueue();
                    });
                    this.on('error', function(file, errorMessage) {
                        console.log(errorMessage);
                        var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
                        errorDisplay[errorDisplay.length - 1].innerHTML = errorMessage;
                    });
                    // this.on('success', function(file, errorMessage) {
                    //     // console.log(errorMessage);
                    //     // if (errorMessage.indexOf('Error 404') !== -1) {
                    //     //     var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
                    //     //     errorDisplay[errorDisplay.length - 1].innerHTML = 'Error 404: The upload page was not found on the server';
                    //     // }
                    // });
                }

            }

        });
    </script>
    <script>
        var Success = `{{ \Session::has('success') }}`;
        var Error = `{{ \Session::has('error') }}`;

        if (Success) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 3200
                };
                toastr.success('Success Message', `{{ \Session::get('success') }}`);
            }, 1300);
        } else if (Error) {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 3200
                };
                toastr.error('Failure Message', `{{ \Session::get('error') }}`);
            }, 1300);
        }
    </script>
@endsection

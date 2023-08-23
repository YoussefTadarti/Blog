@extends('dashboard.layouts.master')
@section('title', 'Blog | Settings')
@section('content')
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.settings.index') }}">{{ trans('sidebar.settings') }}</a>
            </li>
            <li class="breadcrumb-item active">{{ trans('sidebar.dashboard') }}</li>

            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu">
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                    <a class="btn btn-secondary" href="{{ route('dashboard.settings.index') }}"><i class="icon-graph"></i>
                        &nbsp;{{ trans('sidebar.dashboard') }}</a>
                </div>
            </li>
        </ol>

        <div class="container-fluid">
            <div class="row">
                <form action="{{ route('dashboard.settings.update',$setting) }}" method="post" enctype="multipart/form-data"
                    class="form-horizontal ">
                    @csrf

                    <div class="card">
                        <div class="card-header">
                            <strong>Basic Form</strong>Elements
                        </div>
                        <div class="card-block">

                            <div class="col-md-6">
                                <label for="logo">{{ trans('settings.logo') }}</label>
                                <div class="image-input">
                                    <img class="image-preview" id="logo_img"
                                        src="{{ asset('images/settings/' . $setting->logo) }}" alt="Logo">
                                    <input type="file" onchange="previewImage(event,'logo_img')" id="logo"
                                        name="logo">
                                    <div class="edit-icon" onclick="openImageEditor('logo')">
                                        <i class="icon-pencil icons"></i>
                                    </div>
                                </div>
                                @error('logo')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">

                                <label for="favicon">{{ trans('settings.favicon') }}</label>
                                <div class="image-input">
                                    <img class="image-preview" id="favicon_img"
                                        src="{{ asset('images/settings/' . $setting->favicon) }}" alt="Favicon">
                                    <input type="file" class="form-control" onchange="previewImage(event,'favicon_img')"
                                        id="favicon" name="favicon">
                                    <div class="edit-icon" onclick="openImageEditor('favicon')">
                                        <i class="icon-pencil icons"></i>
                                    </div>
                                </div>
                                @error('favicon')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">{{ trans('settings.facebook') }}</label>
                                    <input type="text" class="form-control" id="facebook" name="facebook"
                                        value="{{ $setting->facebook }}">
                                </div>
                                @error('facebook')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">{{ trans('settings.instagram') }}</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram"
                                        value="{{ $setting->instagram }}">
                                </div>
                                @error('instagram')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">{{ trans('settings.phone') }}</label>
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        value="{{ $setting->phone }}">
                                </div>
                                @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">{{ trans('settings.email') }}</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $setting->email }}" >
                                </div>
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <strong>Basic Form</strong>Elements
                        </div>
                        <div class="card-block">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                @foreach (config('translatable.languages') as $key => $lang)
                                    <li class="nav-item">
                                        <a class="nav-link @if (config('app.locale') === $key) active @endif"
                                            id="{{ $key }}-tab" data-toggle="tab" href="#{{ $key }}"
                                            role="tab" aria-controls="{{ $key }}"
                                            aria-selected="true">{{ $lang }}</a>
                                    </li>
                                @endforeach

                            </ul>

                            <div class="tab-content">
                                @foreach (config('translatable.languages') as $key => $lang)
                                    <div class="tab-pane @if (config('app.locale') === $key) active @endif"
                                        id="{{ $key }}" role="tabpanel"
                                        aria-labelledby="{{ $key }}-tab">
                                        <div class="card-block">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="email">{{ trans('settings.email') }}</label>
                                                    <input type="email" class="form-control" id="email"
                                                        name="{{ $key }}[email]" value='{{ $setting->email }}'
                                                        readonly>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="content">{{ trans('settings.content') }}</label>
                                                    <textarea rows="9" class="form-control" id="content" name="{{ $key }}[content]">{{ $setting->translate($key)->content }}</textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="address">{{ trans('settings.address') }}</label>
                                                    <input type="text" class="form-control" id="address"
                                                        name="{{ $key }}[address]"
                                                        value='{{ $setting->translate($key)->address }}'>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach


                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                                    Submit</button>
                                <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                                    Reset</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!--/.container-fluid-->
    </main>
@endsection
@section('scripts')
    <script>
        // Function to display image preview
        function previewImage(event, idImg) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                let preview = document.getElementById(idImg);

                preview.src = reader.result;
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }

        function openImageEditor(idImg) {
            const fileInput = document.getElementById(idImg);
            console.log(fileInput);
            fileInput.click();
        }
    </script>
@endsection

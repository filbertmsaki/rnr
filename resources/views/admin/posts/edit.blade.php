<x-admin-layout>
    @section('page-title', 'Edit Posts')
    @push('styles')
        <!-- summernote -->
        <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

        <!-- dropzonejs -->
        <link rel="stylesheet" href="{{ asset('plugins/dropzone/min/dropzone.min.css') }}">
        <style>
            [type="file"] {
                /* Style the color of the message that says 'No file chosen' */
                color: #878787;
            }

            [type="file"]::-webkit-file-upload-button {
                background: #ED1C1B;
                border: 2px solid #ED1C1B;
                border-radius: 4px;
                color: #fff;
                cursor: pointer;
                font-size: 12px;
                outline: none;
                padding: 10px 25px;
                text-transform: uppercase;
                transition: all 1s ease;
            }

            [type="file"]::-webkit-file-upload-button:hover {
                background: #fff;
                border: 2px solid #535353;
                color: #000;
            }
        </style>
    @endpush
    @push('scripts')
        <!-- Summernote -->
        <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
        <!-- dropzonejs -->
        <script src="{{ asset('plugins/dropzone/min/dropzone.min.js') }}"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

        <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
                var formAction;

                form = document.getElementById('kt_add_posts_form');
                submitButton = form.querySelector('#kt_add_posts_submit');
                formAction = form.getAttribute('action');

                // Summernote
                $('#description').summernote({
                    placeholder: 'Place some text here',
                    height: 200,
                    callbacks: {
                        onPaste: function(e) {
                            var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData)
                                .getData('Text');
                            e.preventDefault();
                            document.execCommand('insertText', false, bufferText);
                        }
                    }

                });

                const token = $('meta[name="csrf-token"]').attr('content');

                try {
                    // DropzoneJS Demo Code Start
                    Dropzone.autoDiscover = false;

                    // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
                    var previewNode = document.querySelector("#template")
                    previewNode.id = ""
                    var previewTemplate = previewNode.parentNode.innerHTML
                    previewNode.parentNode.removeChild(previewNode)

                    var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
                        url: formAction, //
                        thumbnailWidth: 80,
                        thumbnailHeight: 80,
                        parallelUploads: 20,
                        previewTemplate: previewTemplate,
                        paramName: "file", // The name that will be used to transfer the file
                        maxFilesize: 1.5, // MB
                        autoProcessQueue: false,
                        uploadMultiple: true,
                        acceptedFiles: "image/*",
                        maxFiles: 5,
                        headers: {
                            'X-CSRF-TOKEN': token
                        },
                        previewsContainer: "#previews", // Define the container to display the previews
                        clickable: ".fileinput-button", // Define the element that should be used as click trigger to select files.
                        sendingmultiple: function(file, xhr, formData) {
                            submitButton.disabled = true;
                            var dataForm = $("form#kt_add_posts_form").serializeArray();
                            var coverPhoto = document.querySelector('input[name=cover_photos]');
                            formData.append(coverPhoto.name, coverPhoto.files[0]);
                            $.each(dataForm, function(key, el) {
                                formData.append(el.name, el.value);
                            });
                        },
                        successmultiple: function(file, response) {

                            submitButton.disabled = false;
                            window.location = form.getAttribute("data-kt-redirect");
                        },
                    })

                } catch ($e) {

                }



                // Handle submit button
                submitButton.addEventListener('click', e => {
                    e.preventDefault();

                    if ($("#kt_add_posts_form")[0].checkValidity()) {
                        if ($('#description').summernote('isEmpty')) {
                            alert('Posts Description');
                            e.preventDefault();
                        } else {
                            submitButton.disabled = true;
                            var formData = new FormData(form);
                            const url = form.getAttribute('action');
                            $.ajax({
                                type: 'POST',
                                url: url,
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    submitButton.disabled = false;
                                    window.location = form.getAttribute("data-kt-redirect");
                                },
                                error: function(xhr) {
                                    var error = JSON.parse(xhr.responseText);
                                    toastr.options = {
                                        "closeButton": true,
                                        "progressBar": true,
                                        "positionClass": "toast-top-right"
                                    }
                                    toastr.error("Sorry, " + error.message);
                                    submitButton.disabled = false;

                                }
                            });
                        }

                    } else {
                        $("#kt_add_posts_form")[0].reportValidity();
                    }

                });
            });
        </script>
    @endpush
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('page-title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('page-title')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card ">
            <div class="card-body">
                <form id="kt_add_posts_form" action="{{ route('admin.news.posts.update', $post->id) }}" method="POST"
                    enctype="multipart/form-data" data-kt-redirect="{{ route('admin.news.posts.index') }}" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title', @$post->title) }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="short_description">Posts Short Description</label>
                                <textarea id="short_description" class="form-control" name="short_description" maxlength="100">{{ old('short_description', @$post->short_description) }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="description">Posts Description</label>
                                <textarea id="description" name="description">{!! old('description', @$post->description) !!}</textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cover_photos">Cover Photo</label><br>
                            <input type="file" name="cover_photos" id="cover_photos" class=""
                                value="{{ old('cover_photos') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category_id">Post Category </label>
                            <select class="form-control select2bs4" style="width: 100%;" id="category_id"
                                name="category_id[]" multiple required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        @if (in_array($category->id, $post->categories->pluck('id')->toArray())) selected @endif>{{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('admin.news.posts.index') }}" class="btn btn-secondary">Cancel</a>
                            <button id="kt_add_posts_submit" type="submit" value=""
                                class="btn btn-success float-right">Update Posts </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </section>
    <!-- /.content -->


</x-admin-layout>

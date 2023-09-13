<x-admin-layout>
    @section('page-title', 'New Categories')
    @push('styles')
      
    @endpush
    @push('scripts')

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
                <form id="kt_add_categories_form" action="{{ route('admin.news.categories.store') }}" method="POST"
                    enctype="multipart/form-data" data-kt-redirect="{{ route('admin.news.categories.index') }}" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('admin.news.categories.index') }}" class="btn btn-secondary">Cancel</a>
                            <button id="kt_add_categories_submit" type="submit" value=""
                                class="btn btn-success float-right">Create Category </button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>

    </section>
    <!-- /.content -->


</x-admin-layout>

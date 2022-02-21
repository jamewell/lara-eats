@include('admin.header')

<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.navbar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <x-app-layout></x-app-layout>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 my-4 text-gray-800">{{__('Food Menu')}}</h1>

                {{-- Form --}}
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            {{-- Card Header --}}
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    {{ __('Edit menu item') }}
                                </h6>
                            </div>

                            {{-- Card body --}}
                            <div class="card-body">
                                
                                <form action="{{ url('/updatefood', $data->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
            
                                    <div class="form-group ">
                                        <label for="">{{ __('Title') }}</label>
                                        <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="">{{ __('Price') }}</label>
                                        <input type="number" class="form-control" name="price" step=".01" value="{{ $data->price }}">
                                    </div>
                            
                                    <div class="form-group ">
                                        <label for="">{{ __('Description') }}</label>
                                        <textarea class="form-control" name="description">{{ $data->description }}</textarea>
                                    </div>
                            
                                    <div class="form-group ">
                                        <label for="">{{ __('Menu type') }}</label>
                                        <select name="type" id="type" class="form-control">
                                            <option value="">{{ __('Choose a menu type') }}</option>
                                            <option value="1" <?= $data->type == 1 ? 'selected' : '' ?> >{{ __('Breakfast') }}</option>
                                            <option value="2" <?= $data->type == 2 ? 'selected' : '' ?> >{{ __('Lunch') }}</option>
                                            <option value="3" <?= $data->type == 3 ? 'selected' : '' ?> >{{ __('Dinner') }}</option>
                                        </select>
                                    </div>
                            
                                    <div class="form-group ">
                                        <label for="">{{ __('Current image') }}</label>
                                        <img src="/foodimage/{{ $data->image }}" class="img-thumbnail" alt="" width="200px">
                                    </div>
                            
                                    <div class="form-group ">
                                        <label for="">{{ __('New image') }}</label>
                                        <input type="file" name="image" id="" class="form-control">
                                    </div>
                            
                                    <div class="">
                                        <button type="submit" class="btn bg-gradient-dark">{{ __('Submit') }}</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@include('admin.footer')
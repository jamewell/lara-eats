@include('admin.header')

<x-app-layout>

</x-app-layout>

<div class="wrapper">
    @include('admin.navbar')

    <div id="content-wrapper" class="d-flex flex-column">
        {{-- Main Content --}}
        <div id="content">

            <div class="row">
                <div class="col-8">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">{{__('Food Menu')}}</h1>
                    </div>
        
                    <div class="container-fluid">
                        
                        <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
        
                                <div class="form-group col-xl-3 col-md-6 mb-4">
                                    <label for="">{{ __('Title') }}</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                
                                <div class="form-group col-xl-3 col-md-6 mb-4">
                                    <label for="">{{ __('Price') }}</label>
                                    <input type="number" class="form-control" name="price" step=".01">
                                </div>
                        
                                <div class="form-group col-xl-3 col-md-6 mb-4">
                                    <label for="">{{ __('Description') }}</label>
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                        
                                <div class="form-group col-xl-3 col-md-6 mb-4">
                                    <label for="">{{ __('Menu type') }}</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="">{{ __('Choose a menu type') }}</option>
                                        <option value="1">{{ __('Breakfast') }}</option>
                                        <option value="2">{{ __('Lunch') }}</option>
                                        <option value="3">{{ __('Dinner') }}</option>
                                    </select>
                                </div>
                        
                                <div class="form-group col-xl-3 col-md-6 mb-4">
                                    <label for="">{{ __('Image') }}</label>
                                    <input type="file" name="image" id="" class="form-control">
                                </div>
                        
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                                </div>
                            </div>
                        </form>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
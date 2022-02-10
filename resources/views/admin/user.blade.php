@include('admin.header')

<x-app-layout>

</x-app-layout>


<!-- Page Wrapper -->
<div id="wrapper">
    @include('admin.navbar')

    <div class="container flex justify-center mx-auto">

        <div class="flex flex-col mt-8">
            <div class="py-2 -my-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    <div class="border-b border-gray-200 shadow">
    
                        <table class="min-w-full">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        {{ __('Name') }}
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        {{ __('Email') }}
                                    </th>
                                    <th class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                                        {{ __('Action') }}
                                    </th>
                                </tr>
                            </thead>
    
                            <tbody class="bg-white">
                                @foreach ($data as $user)
                                    <tr >
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            {{ $user->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            {{ $user->email }}
                                        </td>

                                        @if ($user->usertype == 0)
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <a href="{{ url('/deleteUser', $user->id) }}">
                                                <i class="fa fa-trash-alt"></i>
                                            </a>
                                        </td>
                                        
                                        @else
                                        <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                            <a>
                                                <i class="fa fa-user-lock"></i>
                                            </a>
                                        </td>
                                            
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@include('admin.footer')
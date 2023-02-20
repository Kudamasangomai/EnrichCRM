<x-app-layout>
    <x-active>






        <!-- component -->
        <div class="sm:px-6 w-full">
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0"
                        class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                        Users</p>

                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-2 md:px-8 xl:px-10">
                <div class="sm:flex items-center justify-between">
                    <div class="flex items-center">
                        @include('layouts.messages')
                    </div>

                    {{-- @can('manage users') --}}
                    <button onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex 
                        items-start justify-start 
                        px-6 py-3 bg-blue-500 hover:bg-blue-600 focus:outline-none rounded">
                        <p class="text-sm font-medium leading-none text-white"><a href="{{ route('users.create') }}">
                                Add User</a></p>
                    </button>
                    {{-- @endcan --}}
                </div>
                <div class="mt-7 overflow-x-auto">
                    <table class="w-full whitespace-nowrap">
                        <tbody>

                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <th>
                                </th>
                                <th> Name</th>
                                <th> Email</th>
                                <th> Verified @</th>

                                <th> Action </th>
                            </tr>
                            @foreach ($users as $user)
                            <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                <td>
                                    <div class="ml-5">
                                        <div
                                            class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">

                                            E
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ $user->name
                                            }}</p>

                                    </div>
                                </td>
                                <td class="pl-24">
                                    <div class="flex items-center">

                                        <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->email }}</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">

                                        <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->email_verified_at
                                            }}</p>
                                    </div>
                                </td>


                                <td>
                                    <a class="0 inline-flex  text-white rounded
                                    items-start justify-start 
                                    px-3 py-1 bg-green-500" href="{{ route('show_user_roles',$user->id) }}"> View</a>

                                    @can('delete users')
                                        
                                   
                                    <a class="0 inline-flex  text-white
                                    items-start justify-start 
                                    px-3 py-1 bg-yellow-500 focus:outline-none rounded"
                                        href="{{ route('users.edit',$user->id) }}"> Edit</a>


                                    <a class="0 inline-flex  text-white
                                    items-start justify-start 
                                    px-3 py-1 bg-red-500 h focus:outline-none rounded"
                                        href="{{ route('users.index') }}"> Delete</a>
                                        @endcan
                                </td>

                                {{-- <td class="pl-5">
                                    <button
                                        class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">Due
                                        today at 18:00</button>
                                </td>
                                <td class="pl-4">
                                    <button
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                                </td> --}}

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>



    </x-active>

</x-app-layout>
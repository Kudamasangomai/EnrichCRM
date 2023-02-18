<x-app-layout>
<x-active>



        


    <!-- component -->
<div class="sm:px-6 w-full">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
                <div class="px-4 md:px-10 py-4 md:py-7">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Users</p>
                   
                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                    <div class="sm:flex items-center justify-between">
                        <div class="flex items-center">
                            <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                                <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                    {{-- <p>All</p> --}}
                                </div>
                            </a>
                            <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8" href="javascript:void(0)">
                                <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                    {{-- <p>Done</p> --}}
                                </div>
                            </a>
                            <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                             href="javascript:void(0)">
                                <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                    {{-- <p>Pending</p> --}}
                                </div>
                            </a>
                        </div>
                        <button onclick="popuphandler(true)" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex 
                        items-start justify-start 
                        px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white"><a href="{{ route('users.create') }}"> Add User</a></p>
                        </button>
                    </div>
                    <div class="mt-7 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody>

                                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                    <th>
                                    </th>
                                    <th>
                                        Name
                                    </th>

                                    <th>
                                        Email
                                    </th>
                                    <th>
                                       Verified @
                                    </th>

                                    <th>
                                        Created@
                                     </th>
                                </tr>
                                @foreach ($users as $user)
                                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                                    <td>
                                        <div class="ml-5">
                                            <div class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                             
                                             E
                                            </div>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="flex items-center pl-5">
                                            <p class="text-base font-medium leading-none text-gray-700 mr-2">{{ $user->name }}</p>
                                          
                                        </div>
                                    </td>
                                    <td class="pl-24">
                                        <div class="flex items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M9.16667 2.5L16.6667 10C17.0911 10.4745 17.0911 11.1922 16.6667 11.6667L11.6667 16.6667C11.1922 17.0911 10.4745 17.0911 10 16.6667L2.5 9.16667V5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5H9.16667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <circle cx="7.50004" cy="7.49967" r="1.66667" stroke="#52525B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"></circle>
                                            </svg>
                                            <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->email }}</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                          
                                            <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->email_verified_at }}</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                          
                                            <p class="text-sm leading-none text-gray-600 ml-2">{{ $user->created_at }}</p>
                                        </div>
                                    </td>
                                    
                                    {{-- <td class="pl-5">
                                        <button class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">Due today at 18:00</button>
                                    </td>
                                    <td class="pl-4">
                                        <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">View</button>
                                    </td> --}}
                                    <td>
                                        <div class="relative px-5 pt-2">
                                            <button class="focus:ring-2 rounded-md focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                              
                                            </button>
                                            <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 hidden">
                                                <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <p>Edit</p>
                                                </div>
                                                <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <p>Delete</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                <tr class="h-3"></tr>
                       
                              
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
            

</x-active>

</x-app-layout>
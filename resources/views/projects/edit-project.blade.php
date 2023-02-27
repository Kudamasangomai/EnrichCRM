<x-app-layout>
    <x-active>

        <div class="sm:px-6 w-full flex-row">
           
                <x-page-title>
                    <p tabindex="0"
                        class="text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                       Edit  Project</p>
                </x-page-title>
        </div>

        <x-back-div>
            <p ><a class="p-1 px-3 rounded-sm bg-blue-500 text-white hover:bg-blue-700" href="{{ route('projects.index') }}">
                Back</a></p>
       
        </x-back-div>

          @include('layouts.messages')
        <x-active-page-content>

            {!! Form::model($project, ['method' => 'PATCH','route' => ['projects.update', $project->id]]) !!}

            <button>Update</button>
            <div class="flex columns-3">
                <div class="p-6 bg-white border-b lg:w-2/4">

                    
                        <strong>Title:</strong><br/>
                        {!! Form::text('title', null, array('class' => 'w-full p-2 my-1 rounded-md bg-gray-100 ')) !!}

                        <strong>Title:</strong><br/>
                        <select name="drivername" id="defaultSelect" class="w-full p-2 my-1 rounded-md bg-gray-100">
                            <option value="{{ $project->user_id }}"> {{ $project->user->name}} {{ $project->user_id  }}</option>
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }} {{ $user->id }}</option>
                        @endforeach
                          </select>
                </div>

                <div class="p-6 bg-white border-b lg:w-2/4">
                    <strong>Description:</strong><br/>
                    {!! Form::text('title', null, array('class' => 'w-full p-2 my-1 rounded-md bg-gray-100 ')) !!}

         
                </div>


            </div>

            {!! Form::close() !!}

           
            {{ $project }}
        </x-active-page-content>
    </x-active>
</x-app-layout>
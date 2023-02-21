<x-app-layout>
    <x-active>



        
        
   
        
        <div>
            <h3 class="my-2 text-base font-semibold">Roles List</h3>
            @foreach ($roles as $role)
            <p class="mt-1">   {{ $role}}  
            </p>
            @endforeach

            <form action="{{ route('roles.store') }}" method="POST">
                @csrf
                <div class="">
                @error('name')
                <x-form_error_message>
                    {{ $message }}
                </x-form_error_message>
                @enderror
                </div>
            <input type="text" class="rounded-md mt-4" id="role" name="name"
            placeholder="enter Role"><button type="submit" class="text-white p-2 bg-blue-500 rounded-lg ml-1">Add Role</button>
        </form>
        </div>
    </x-active>
</x-app-layout>
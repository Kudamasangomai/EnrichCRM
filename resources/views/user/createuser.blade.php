<x-app-layout>
    <x-active>

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Create New User</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                </div>
            </div>
        </div>
       
        {{-- {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!} --}}
        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="name"
                            value="{{ old('name') }}" />

                            {{-- {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'rounded-md text-black p-1 w-full mb-4 bg-gray-100')) !!} --}}

                        @error('name')
                        <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        <input type="text" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="email"
                        value="{{ old('email') }}" />

                        {{-- {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'rounded-md text-black p-1 w-full mb-4 bg-gray-100')) !!} --}}

                    @error('email')
                    <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                    @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="text" class=" rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="password"
                        value="{{ old('password') }}" />

                        {{-- {!! Form::password('password', array('placeholder' => 'Password','class' => 'rounded-md text-black p-1 w-full mb-4 bg-gray-100')) !!} --}}

                    @error('password')
                    <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                    @enderror
                    </div>
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>

                            <select class="rounded-md text-black p-1 w-full mb-4 bg-gray-100" name="roles[]" multiple>
                                @foreach ($roles as $role)
                                <option value="{{ $role }}">    {{ $role}}  </option>
                                @endforeach
                            
                             
                            </select>

                            {{-- {!! Form::select('roles[]', $roles,[], array('class' => ' rounded-md text-black p-1 w-full mb-4 bg-gray-100','multiple')) !!} --}}
                            @error('roles')
                            <p class="bg-red-400 mb-1 rounded-sm p-2 text-white"> {{ $message }}</p>
                            @enderror
                     
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        {{-- {!! Form::close() !!} --}}
    </x-active>
</x-app-layout>
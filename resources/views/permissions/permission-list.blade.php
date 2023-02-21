<x-app-layout>
    <x-active>

        @forelse ($permissions as $permission )
            
        {{ $permission->name }}
        @empty
            <strong>No Permssions Found</strong>
        @endforelse

    </x-active>
</x-app-layout>
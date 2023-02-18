<x-app-layout>
    
    <x-active>   
        
<ul>
    <li>{{ $user->name }}</li>

    <li>   {{ $user->email }} </li>
    <li> {{ $user->email_verified_at }}  </li>
    <li>{{ $user->created_at }} </li>
</ul>
      
 
    
      
    </x-active>


    
 
</x-app-layout>
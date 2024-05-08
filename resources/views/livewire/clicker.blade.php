<div>
    <h2>{{$sample}}</h2>
    <h1>{{ $title }}</h1>
    {{ count($users) }}
    <button wire:click="createNewUser">Create new user</button>
</div>

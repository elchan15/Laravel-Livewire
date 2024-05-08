<div>
    <form wire:submit="createNewUser" action="">
        <input wire:model="txtname" type="text" placeholder="name">
        <input wire:model="txtemail" type="email" placeholder="email">
        <input wire:model="txtpassword" type="password" placeholder="password">
        <button>Save</button>
    </form>

    @foreach ($users as $user)
        <h3>{{ $user->name }}</h3>
    @endforeach
</div>

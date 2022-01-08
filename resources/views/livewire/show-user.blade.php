<div class="container_show_user">
    <div class="col-md-4 card">
        <div class="card-header container_header">
            {{ $user->firstname }} {{ $user->lastname }}
            <div class="icon" wire:click='closeUser'>
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Ville : {{ $user->city }}</h5>
            <p class="card-text">Age : {{ $user->age }}</p>
            <p class="card-text">Amail : {{ $user->email }}</p>
            <a href="#" class="btn btn-primary" wire:click="edit({{ $user->id }} )">Editer</a>
        </div>
    </div>
</div>

<div class="row justify-content-center container_table"  x-data="{selections: []}"
    x-init="@this.on('saved', () => { selections = [] })" 
>
{{-- @dump($selections) --}}
    {{-- <span x-html="JSON.stringify(selections)"></span> --}}
    <div wire:toto="remove">
        <button x-show="selections.length > 0" type="button" class="btn btn-danger btn_supprimer" x-on:click="$dispatch('toto', `${selections}`)">Supprimer</button>
    </div>
   
    <div class="form-group">
        <label for="search" class="sr-only">Search</label>
        <input type="text" id="search" wire:model="search" class="form-control form-control-md" placeholder="Recherche">
    </div>

    <div class="col-auto ml-auto mb-4">
        <span style="font-weight: 600">Afficher</span>
        <select wire:model.lazy="paginate" class="custom-select w-auto">
            @for($i = 5; $i <= 25; $i += 5)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>
        <span style="font-weight: 600">éléments</span>
    </div>
    
    <table class="table table-striped" >
        <thead>
            <tr>
                <th scope="col">Select</th>
                <th scope="col">Firstname</th>
                <th scope="col">Lastname</th>
                <th scope="col">Age</th>
                <th scope="col">Ville</th>
                <th scope="col">Email</th>
                <th scope="col">Détail</th>
                <th scope="col">Editer</th>
                <th scope="col">Effacer</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" x-model="selections" value="{{ $user->id }} ">
                    </div>
                    </th>
                    <td>{{ $user->firstname}}</td>
                    <td>{{ $user->lastname}}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city}}</td>
                    <td>{{ $user->email}}</td>
                    <td class="td_cursor_pointer" wire:click="show({{ $user->id }} )"><i class="fas fa-eye"></i></td>
                    <td class="td_cursor_pointer" wire:click="edit({{ $user->id }} )"><i class="fas fa-pen-square"></i></td>
                    <td class="td_cursor_pointer" wire:click="remove({{ $user->id }} )"><i class="fas fa-trash"></i></i></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $users->links() }}
    </div>

    <div>
        @if ($show)
            @livewire('show-user', [
                'user' => $userById,
                ])
        @endif
    </div>

    <div>
        @if ($showEdit)
            @livewire('edit-user', [
                'user' => $userById,
                ])
        @endif
    </div>
</div>




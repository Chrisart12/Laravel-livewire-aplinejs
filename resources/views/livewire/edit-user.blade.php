<div class="container_show_user">
    <div class="col-md-4 card">
        <div class="card-header container_header">
            Editer {{ $user->firstname }} {{ $user->lastname }}
            <div class="icon" wire:click='closeUser'>
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="updateUser({{ $user->id }})">
                {{ csrf_field() }}
                <div class="form-group mb-3">
                    <input type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" wire:model.lazy="firstname" >
                    
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" wire:model.lazy="lastname" >
                    
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" wire:model.lazy="age" >
                    
                    @if ($errors->has('age'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('age') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" wire:model.lazy="city" >
                    
                    @if ($errors->has('city'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" wire:model.lazy="email" >
                    
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="btn btn-primary mt-1 mb-3" type="submit" >Valider</button>
            </form>
        </div>
    </div>
   
</div>

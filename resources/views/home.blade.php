@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>Központi oldal</h1>


            Felasználó neve: {{ $user->name }}<br>
            Utolsó bejelentkezés: {{ $user->last_login }}<br>
            Szerepkörök:
            @foreach($user->roles as $role)
                @lang('roles.role_'.$role->name ),
            @endforeach


        </div>
    </div>
</div>
@endsection

@if (Auth::id() != $user->id)
    @if (Auth::user()->is_friending($user->id))
        {!! Form::open(['route' => ['user.unfriend', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unfriend', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.friend', $user->id]]) !!}
            {!! Form::submit('Friend', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif
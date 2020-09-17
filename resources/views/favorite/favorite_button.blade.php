
@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンフェイバリットボタンのフォーム --}}
    {!! Form::open(['route' => ['user.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-light btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- フェイバリットボタンのフォーム --}}
    {!! Form::open(['route' => ['user.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
@endif
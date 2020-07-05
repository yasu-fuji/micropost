@if (Auth::id() != $micropost->user_id)
  @if($micropost->id != Auth::user()->is_favorite($micropost->id))
    {{--フェイバリットボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
    {!! Form::submit('Favorite', ['class' => "btn btn-success btn-sm"]) !!}
    {!! Form::close() !!}
 @else
    {{--フェイバリット削除ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
    {!! Form::submit('Unfavorite', ['class' => 'btn btn-light btn-sm']) !!}
    {!! Form::close() !!}
  @endif    
@endif
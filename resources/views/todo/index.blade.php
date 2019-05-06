@if($errors->has('title'))
    <strong>{{$error->first('title')}}</strong>
@endif
@foreach($todos as $todo)
    {{--    <p>{{$todo->id .'.'.$todo->title}}--}}
    {{--        <a href="todo/{{$todo->id}}">Delect</a>--}}
    {{--    </p>--}}

    <p>{{$todo->id .'.'.$todo->title}}
    {{--        <a href="todo/{{$todo->id}}">Delect</a>--}}
    <form action="todo/{{$todo->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <input type="submit" value="Delete">
    </form>
    </p>
@endforeach
<form action="/todo" method="POST">
    {{csrf_field()}}
    <input name="title" type="text" placeholder="清输入">
    <input type="submit">
</form>
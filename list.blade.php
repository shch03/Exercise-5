@extends('master')

@section('title', 'E-Book List')

@section('content')
<table>
    <tr>
    @foreach($books['book'] as $list)
        <td>{{$list['title']}}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($books['book'] as $list)
        <td>{{$list['isbn']}}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($books['book'] as $list)
        <td>{{$list['category']}}</td>
    @endforeach
    </tr>
    <tr>
    @foreach($books['book'] as $list)
        <td>{{$list['page']}}</td>
    @endforeach
    </tr>
</table>
@endsection

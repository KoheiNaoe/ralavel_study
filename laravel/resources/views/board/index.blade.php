@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr><th>Message</th></tr>
        <tr><th>Name</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->message}}</td>
                <td>{{optional($item->person)->name}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2022 kohei.
@endsection

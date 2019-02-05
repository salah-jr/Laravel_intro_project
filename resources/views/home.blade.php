@extends('layouts.app')

@section('content')
    

<h3>Home page</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dolores assumenda totam eum neque fuga! Natus reiciendis repellat, placeat obcaecati suscipit at sequi necessitatibus veritatis pariatur nobis, voluptas labore eaque.</p>

@endsection

@section('sidebar')
    @parent
    <p> Override the main sidebar </p>
@endsection
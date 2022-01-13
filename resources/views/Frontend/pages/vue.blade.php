@extends('welcome')
@section('content')
<example-component :laraveldata="{{ json_encode($datas) }}"></example-component>
@endsection

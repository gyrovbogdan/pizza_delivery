@extends('layots.master')

@section('content')
    @foreach ($dishes as $dish)
        @include('partials.cards.pizza', [
            'id' => $dish['id'],
            'name' => $dish['name'],
            'diametr' => '30cm - 40cm',
            'image' => 'https://www.pizzanay.sk/wp-content/uploads/2020/03/pizza-600x600.png',
        ])
    @endforeach
@endsection

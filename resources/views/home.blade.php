@extends('templates.base')

@section('title', 'Comics | Homepage')

@section('mainContent')

<main>
    <table>
        <tr>
            <th class="intestazione">Nome</th>
            <th class="intestazione">Cognome</th>
            <th class="intestazione">Età</th>
        </tr>

        @foreach ($persons as $person)
            <tr>
                <td>{{ $person['first_name'] }}</td>
                <td>{{ $person['second_name'] }}</td>
                <td>{{ $person['age'] }}</td>
            </tr>
        @endforeach

    </table>
</main>

@endsection

@extends('layouts.duck')
@section('content')

<div>
    <h1> A Living Random Duck</h1>
    <img src = "/images/ducks/{{ $activity  }}.gif" width = "200">

    <table>
        <thead>
            <th>Gender</th>
            <th>Age</th>
            <th>Weigh</th>
            <th>Activity</th>
        </thead>

        <tbody>
            <tr>
                <td>{{ $gender }}</td>
                <td>{{ $age }} year(s)</td>
                <td>{{ $weight }} lb(s)</td>
                <td>{{ $activity }}</td>
            </tr>
        </tbody>
    </table>
</div>
@stop

@extends('base')

@section('content')

<h1>NORD</h1>

<table class="table">
    <tr>
        <td colspan = '5'>
            <h3>WILDCARDS</h3>
        </td>
    </tr>
    <tr>
        <td>HOME</td>
        <td>8 - {{ $nord[7] }}</td>
        <td>7 - {{ $nord[6] }}</td>
        <td>6 - {{ $nord[5] }}</td>
        <td>5 - {{ $nord[4] }}</td>
    </tr>
    <tr>
        <td>AWAY</td>
        <td>9 - {{ $nord[8] }}</td>
        <td>10 - {{ $nord[9] }}</td>
        <td>11 - {{ $nord[10] }}</td>
        <td>12 - {{ $nord[11] }}</td>
    </tr>
    <tr>
        <td colspan = '5'>
            <h3>QUARTI</h3>
        </td>
    </tr>
    <tr>
        <td>HOME</td>
        <td>1 - {{ $nord[0] }}</td>
        <td>2 - {{ $nord[1] }}</td>
        <td>3 - {{ $nord[2] }}</td>
        <td>4 - {{ $nord[3] }}</td>
    </tr>
    <tr>
        <td>AWAY</td>
        <td>Vincente 8-9</td>
        <td>Vincente 7-10</td>
        <td>Vincente 6-11</td>
        <td>Vincente 5-12</td>
    </tr>
</table>

<h1>SUD</h1>

<table class="table">
    <tr>
        <td colspan = '5'>
            <h3>WILDCARDS</h3>
        </td>
    </tr>
    <tr>
        <td>HOME</td>
        <td>8 - {{ $sud[7] }}</td>
        <td>7 - {{ $sud[6] }}</td>
        <td>6 - {{ $sud[5] }}</td>
        <td>5 - {{ $sud[4] }}</td>
    </tr>
    <tr>
        <td>AWAY</td>
        <td>9 - {{ $sud[8] }}</td>
        <td>10 - {{ $sud[9] }}</td>
        <td>11 - {{ $sud[10] }}</td>
        <td>12 - {{ $sud[11] }}</td>
    </tr>
    <tr>
        <td colspan = '5'>
            <h3>QUARTI</h3>
        </td>
    </tr>
    <tr>
        <td>HOME</td>
        <td>1 - {{ $sud[0] }}</td>
        <td>2 - {{ $sud[1] }}</td>
        <td>3 - {{ $sud[2] }}</td>
        <td>4 - {{ $sud[3] }}</td>
    </tr>
    <tr>
        <td>AWAY</td>
        <td>Vincente 8-9</td>
        <td>Vincente 7-10</td>
        <td>Vincente 6-11</td>
        <td>Vincente 5-12</td>
    </tr>
</table>


@endsection

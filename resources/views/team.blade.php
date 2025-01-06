<x-app-layout>
    <link href="{{ asset('team.css') }}" rel="stylesheet">
    @include('layouts.sidebar')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Team</title>
    </head>
    <body>
        <h1>Team Members</h1>

        @if($team)
            <h2>Team: {{ $team->name }}</h2>
            <table class="team-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>MBTI</th>
                        <th>Job</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                        <tr>
                            <td>{{ $member->name }}</td>
                            <td>{{ $member->email }}</td>
                            <td>{{ $member->mbti_type ?? 'N/A' }}</td>
                            <td>{{ $member->job ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>You are not part of a team.</p>
        @endif
    </body>
    </html>
</x-app-layout>

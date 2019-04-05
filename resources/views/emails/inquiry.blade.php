<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Booking Request</h2>

        <div>
            <p>From: {{ $name ?? 'Unknown' }} ({{ $email ?? 'Unknown Email' }})</p>

            <p>Dates: {{ $datestart ?? 'Unknown Start Date' }} - {{ $dateend ?? 'Unknown End Date' }}</p>

            <p>Message: {{ $messagetext ?? 'No Message'}}</p>
        </div>
    </body>
</html>

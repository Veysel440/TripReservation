<!DOCTYPE html>
<html>
<head>
    <title>Trip Details</title>
</head>
<body>
<h1>Reservation Details</h1>
<p><strong>Client:</strong> {{ $reservation->client->name }}</p>
<p><strong>Activity:</strong> {{ $reservation->activity->name }}</p>
<p><strong>Size:</strong> {{ $reservation->size }}</p>
<p><strong>Price:</strong> $50.00</p>
<p><strong>Payment Status:</strong> Paid</p>
</body>
</html>

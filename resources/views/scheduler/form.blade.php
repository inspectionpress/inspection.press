<!DOCTYPE html>
<html>
<head>
    <title>Schedule Inspection</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
</head>
<body>
<h2>Schedule Inspection</h2>

<form id="booking-form" method="POST" action="{{ route('booking.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Your Name" required><br><br>
    <input type="email" name="email" placeholder="Email Address" required><br><br>
    <input type="text" name="phone" placeholder="Phone Number" required><br><br>
    <input type="text" name="address" placeholder="Property Address" required><br><br>

    <!-- Hidden pricing, service selection, etc. would go here -->

    <div id="card-container"></div>
    <button id="card-button" type="button">Pay & Book</button>
</form>

<script>
async function initializeCard(payments) {
    const card = await payments.card();
    await card.attach('#card-container');
    return card;
}

async function createPayment(token) {
    const form = document.getElementById('booking-form');
    const input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'nonce';
    input.value = token;
    form.appendChild(input);
    form.submit();
}

async function main() {
    const payments = Square.payments("REPLACE_WITH_APP_ID", "REPLACE_WITH_LOCATION_ID");
    const card = await initializeCard(payments);

    const cardButton = document.getElementById('card-button');
    cardButton.addEventListener('click', async function () {
        const result = await card.tokenize();
        if (result.status === 'OK') {
            await createPayment(result.token);
        } else {
            alert('Payment failed to tokenize.');
        }
    });
}

main();
</script>
</body>
</html>

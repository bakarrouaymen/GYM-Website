<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reservation.css" />
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form class="form-container" action="book.php" method="POST">
            <div class="form-group">
                <label for="first_name">Personal Name</label>
                <input type="text" id="first_name" name="first_name" placeholder="Personal Name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Family Name</label>
                <input type="text" id="last_name" name="last_name" placeholder="Family Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group">
                <label for="phone_number">Phone number</label>
                <input type="tel" id="phone_number" name="phone_number" placeholder="phone number" required>
            </div>
            <div class="form-group">
                <label for="appointment_date">Reservation date</label>
                <input type="date" id="appointment_date" name="appointment_date" required>
            </div>
            <button type="submit" class="submit-button">Book now!</button>
        </form>
    </div>
    <a href="../index.php"><button class="return">Return to home page</button></a>
</body>
</html>

<!DOCTYPE html>
    <html>
    <head>
        <title>Contact Form</title>
    </head>
    <body>
        <h1>Contact us</h1>

        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf 
            <label for="name">Name:</label><br>
            <input type="text" id"name" name="name" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id"email" name="email" required><br>

            <label for="phone">Phone Number</label><br>
            <input type="phone" id"phone" name="phone" required><br>

            <label for="Message">Message:</label><br>
            <textarea id="message" name"message" required></textarea><br>

            <input type="submit" value="Submit">

        </form>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Form on Click</title>
    <style>
        /* Initially hide the form */
        #myForm {
            display: none;
            border: 1px solid #ccc;
            padding: 20px;
            width: 300px;
            margin-top: 20px;
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <!-- Button to open the form -->
    <button onclick="openForm()">Open Form</button>

    <!-- Form to be opened -->
    <div id="myForm">
        <h2>Contact Form</h2>
        <form>
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        // JavaScript function to open the form
        function openForm() {
            document.getElementById('myForm').style.display = 'block';
        }
    </script>

</body>
</html>

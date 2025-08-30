<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Info</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        fieldset {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            box-sizing: border-box;
        }

        legend {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
            padding: 0 10px;
            background-color: #f4f4f4;
            border-radius: 8px;
            padding: 5px 15px;
        }

        label {
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
            background-color: #f9f9f9;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<fieldset>
    <legend><b>Update Info</b></legend>
    <form method="post" action="update.php">
        <label for="id">Id:</label>
        <input type="text" name="id" id="id" placeholder="Enter your ID" required>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" required>

        <label for="email">Email:</label>
        <input type="text" name="email" id="email" placeholder="Enter your email" required>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>

        <label for="message">Message:</label>
        <textarea name="message" id="message" placeholder="Let's work together to unlock new revenue streams with our premium advertisers and advanced technology solutions."></textarea>

        <input type="submit" value="Update">
    </form>
</fieldset>

</body>
</html>

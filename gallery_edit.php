<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Gallery Image</title>
    <style>
        /* Reset some default styles */
        body, h3, input, label, button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
            color: #4CAF50;
        }

        /* Form styles */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        input:focus {
            outline: none;
            border-color: #4CAF50;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Responsive adjustments */
        @media (max-width: 500px) {
            .container {
                width: 90%;
                padding: 15px;
            }

            input, button {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h3>Edit Image</h3>
        <form action="gallery_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <div>
                <label for="image_path">Image Path</label>
                <input type="text" name="image_path" value="<?php echo $image_path; ?>" required />
            </div>
            <div>
                <label for="alt_text">Alt Text</label>
                <input type="text" name="alt_text" value="<?php echo $alt_text; ?>" required />
            </div>
            <button type="submit">Save Changes</button>
        </form>
    </div>

</body>

</html>

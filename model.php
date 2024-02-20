

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<!-- HTML Form -->
<form id="carForm" method="post" action="process.php">
    <!-- Brand Dropdown -->
    <label for="brand">Select Brand:</label>
    <select name="brand" id="brand">
        <option value="brand1">Brand 1</option>
        <option value="brand2">Brand 2</option>
        <!-- Add more brand options as needed -->
    </select>

    <!-- Model Dropdown (Initially Empty) -->
    <label for="model">Select Model:</label>
    <select name="model" id="model">
        <!-- Models will be dynamically populated here -->
    </select>

    <input type="submit" value="Submit">
</form>
, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<!-- JavaScript (or jQuery) -->


<script>
    document.addEventListener('DOMContentLoaded', function () {
        // On brand selection change
        document.getElementById('brand').addEventListener('change', function () {
            var brand = this.value;
          
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: POST-request for 'getModels.php', asynchronous
            xhr.open('POST', 'getModels.php', true);

            // Set the request header to indicate the type of content being sent
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Set up the callback function for when the request completes
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Clear and populate the model dropdown with the fetched models
                    document.getElementById('model').innerHTML = xhr.responseText;
                }
            };

            // Prepare the data to be sent
            var data = 'brand=' + encodeURIComponent(brand);

            // Send the request
            xhr.send(data);
        });
    });
</script>

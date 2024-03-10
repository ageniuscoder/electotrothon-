<!DOCTYPE html>
<html>
<head>
    <title>Popup Message</title>
    <script type="text/javascript">
        function showMessage() {
            alert("This is a pop-up message!");
        }
    </script>
</head>
<body>
    <?php
    // PHP code to process data or perform operations
    $name = "John Doe";
    $age = 30;
    ?>

    <!-- Button to trigger the pop-up message -->
    <button onclick="showMessage()">Show Message</button>

    <!-- PHP code to output data within JavaScript -->
    <script type="text/javascript">
        var name = "<?php echo $name; ?>";
        var age = <?php echo $age; ?>;
        console.log("Name: " + name + ", Age: " + age);
    </script>
</body>
</html>

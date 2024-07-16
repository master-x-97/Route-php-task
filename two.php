<!-- Use a cookie to change the default website background color. choose the new
color from a dropdown menu of colors. -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["color"])) {
    setcookie("bgcolor", $_POST["color"], time() + (3 * 24 * 60 * 60));
    // reload a page with time method to convert color
    header("Location: " . $_SERVER["PHP_SELF"]);
    exit;
}
// if we have not color we will use default color 'white'
$backgroundColor = isset($_COOKIE["bgcolor"]) ? $_COOKIE["bgcolor"] : "#ffffff";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change BG Color<</title>
    <style>
        body {
            background-color: <?php echo htmlspecialchars($backgroundColor); ?>;
        }
    </style>
</head>
<body>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="color">Select Color:</label>
        <select name="color" id="color">
            <option value="#ffffff" <?php if($backgroundColor == '#ffffff') echo 'selected'; ?>>White</option>
            <option value="#ff0000" <?php if($backgroundColor == '#ff0000') echo 'selected'; ?>>Red</option>
            <option value="#00ff00" <?php if($backgroundColor == '#00ff00') echo 'selected'; ?>>Green</option>
            <option value="#0000ff" <?php if($backgroundColor == '#0000ff') echo 'selected'; ?>>Blue</option>
            <option value="#ffff00" <?php if($backgroundColor == '#ffff00') echo 'selected'; ?>>Yellow</option>
            <option value="#ff00ff" <?php if($backgroundColor == '#ff00ff') echo 'selected'; ?>>Magenta</option>
            <option value="#00ffff" <?php if($backgroundColor == '#00ffff') echo 'selected'; ?>>Cyan</option>
        </select>
        <input type="submit" value="Change Color">
    </form>
</body>
</html>
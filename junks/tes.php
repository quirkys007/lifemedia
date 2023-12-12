<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Example</title>
</head>
<body>

<button onclick="openPopup()">Open Popup</button>
<button onclick="closePopup()">Close Popup</button>

<script>
let popupWindow;

function openPopup() {
    // Open a popup window
    popupWindow = window.open('', 'MyPopup', 'width=300,height=200');
    popupWindow.document.write('<h2>This is a Popup</h2>');
}

function closePopup() {
    // Close the popup window
    if (popupWindow) {
        popupWindow.close();
    }
}
</script>

</body>
</html>

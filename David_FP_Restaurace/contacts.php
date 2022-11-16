<?php
    include_once "./components/header.php";
?>

<head>
    <link rel="stylesheet" href="./css/contacts.css">
    <title>Giuseppe's - Contacts</title>
</head>
<body>
    <div class="contact_details">
        <h1>Contact Details</h1>
        <p>Phone: 728 111 222</p>
        <p>Email: info@giuseppes.com</p>
        <h2>Address:</h2>
        <p>Giuseppe's ltd</p>
        <p>Karlova 12</p>
        <p>Prague 1</p>
        <p>Postal code: 11000</p><br>
        <iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=Karlova%2012&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>
</body>

<?php
    include_once "./components/footer.php";
?>
<?php 
$domain = "ogilviejennings.com.au";
$offices = [
    [
        "location"      => "hobart",
        "phone"         => "03 6235 0800",
        "fax"           => "03 6235 0888",
        "address"       => "Level 4, 39 Murray Street, Hobart TAS 7001, GPO Box 435",
        "map-link"      => "https://www.google.com/maps/place/Ogilvie+Jennings/@-42.8861291,147.3313788,16z/data=!4m16!1m9!3m8!1s0xaa6e758510a93103:0xcc5b999e24d3a542!2s39+Murray+St,+Hobart+TAS+7000!3b1!8m2!3d-42.883189!4d147.3271624!10e3!16s%2Fg%2F11c2fynr_m!3m5!1s0xaa6e7585d726218d:0xe595e649f76ad8ac!8m2!3d-42.883128!4d147.3271265!16s%2Fg%2F1tqg1l1w?entry=ttu",
        "email_handler" => "reception"
    ],
    [
        "location"      => "kingston",
        "phone"         => "03 6235 0882",
        "fax"           => "03 6235 0888",
        "address"       => "1/11 John Street, Kingston TAS 7050",
        "map-link"      => "https://www.google.com/maps/place/Ogilvie+Jennings/@-42.9745677,147.3095559,17z/data=!4m15!1m8!3m7!1s0xaa6dd9c5f4cff1b7:0x7276a20ea5b22550!2s1%2F11+John+St,+Kingston+TAS+7050!3b1!8m2!3d-42.9745677!4d147.3095559!16s%2Fg%2F11pvcw8n9d!3m5!1s0xaa6dd9c525912599:0xa6b4cbdd1597f09c!8m2!3d-42.9745677!4d147.3095559!16s%2Fg%2F1tf6c8n3?entry=ttu",
        "email_handler" => "kingston.reception"
    ],
    [
        "location"      => "glenorchy",
        "phone"         => "03 6235 0885",
        "fax"           => "03 6235 0888",
        "address"       => "282 Main Road, Glenorchy TAS 7010",
        "map-link"      => "https://www.google.com/maps/place/Ogilvie+Jennings+Glenorchy/@-42.835369,147.284736,17z/data=!4m15!1m8!3m7!1s0xaa6e74bb378f63c5:0xa6d78440b736fae6!2s282+Main+Rd,+Glenorchy+TAS+7010!3b1!8m2!3d-42.835369!4d147.284736!16s%2Fg%2F11c5fx17cj!3m5!1s0xaa6e74a46986a957:0x20d650da2e9c8bad!8m2!3d-42.835369!4d147.284736!16s%2Fg%2F1tywz5cq?entry=ttu",
        "email_handler" => "glenorchy.reception"
    ]

]
?>

<section class="contact-section">
    <div class="container">
    <?php foreach( $offices as $office ){ ?>
    <div class="office-card">
        <h2><?php echo $office['location']; ?></h2>
        <span><strong>Phone: </strong><a href="tel:<?php echo $office['phone']; ?>"><?php echo $office['phone']; ?></a></span><br>
        <span><strong>Fax: </strong><a href="tel:<?php echo $office['fax']; ?>"><?php echo $office['fax']; ?></a></span><br>
        <span><strong>Address: </strong><a href="<?php echo $office['map-link']; ?>" target="_blank"><?php echo $office['address']; ?></a></span><br>
        <span><strong>Email: </strong><a href="mailto:<?php echo $office['email_handler']; ?>@<?php echo $domain; ?>"><?php echo $office['email_handler']; ?>@<?php echo $domain; ?></a></span>
    </div>
    <?php }?>
    </div>
</section>
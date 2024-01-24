<?php 
$domain = "ogilviejennings.com.au";
$offices = [
    [
        "location"      => "hobart",
        "phone"         => "03 6235 0800",
        "fax"           => "03 6235 0888",
        "address"       => "Level 4, 39 Murray Street, Hobart TAS 7001, GPO Box 435",
        "email_handler" => "reception"
    ],
    [
        "location"      => "kingston",
        "phone"         => "03 6235 0882",
        "fax"           => "03 6235 0888",
        "address"       => "1/11 John Street, Kingston TAS 7050",
        "email_handler" => "kingston"
    ],
    [
        "location"      => "glenorchy",
        "phone"         => "03 6235 0885",
        "fax"           => "03 6235 0888",
        "address"       => "282 Main Road, Glenorchy TAS 7010",
        "email_handler" => "glenorchy"
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
        <span><strong>Address: </strong><?php echo $office['address']; ?></span><br>
        <span><strong>Email: </strong><a href="mailto:<?php echo $office['email_handler']; ?>@<?php echo $domain; ?>"><?php echo $office['email_handler']; ?>@<?php echo $domain; ?></a></span>
    </div>
    <?php }?>
    </div>
</section>
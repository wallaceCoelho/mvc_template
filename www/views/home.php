<title> <?php echo $title; ?></title>

<ul>
    <?php foreach($user as $item) { ?>
        <li><?php echo $item['email']; ?></li>
        <li><?php echo $item['first_name']." ".$item['last_name']; ?></li>
    <?php } ?>
</ul>
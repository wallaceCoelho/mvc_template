<title> <?php echo $title; ?></title>

<ul>
    <?php foreach($users as $item) { ?>
        <li><?php echo $item['email']; ?></li>
        <li><?php echo $item['name']; ?></li>
    <?php } ?>
</ul>
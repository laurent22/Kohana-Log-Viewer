<ul class="pills">
    <?php foreach($days as $day): ?>
    <li class="<?php if($active_report == $day) echo "active" ?>">
        <a href="<?php echo URL::site("logs/$active_month/" . substr($day, 0, 2)) ?>"><?php echo $day ?></a>
    </li>
    <?php endforeach;?>
</ul>

 

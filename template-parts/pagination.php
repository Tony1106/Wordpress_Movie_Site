<?php
$pagination = get_query_var('pagination');
$current_page = $pagination['current_page'];
?>
<div class="pagination">
    <ul>
        <?php if ($current_page > 1) { ?>
            <li class="page-numbers previous"><a href=<?php echo "/page/" . ($current_page - 1) ?>><i class="fas fa-chevron-left"></i></a></li>
        <?php } ?>
        <?php
        for ($i = 1; $i < 6; $i++) {
            if ($current_page == $i) { ?>
                <li><a class="page-numbers current" href=<?php echo "/page/" . $i ?>>
                        <?php echo $i ?>
                    </a></li>
            <?php } else { ?>
                <li><a class="page-numbers" href=<?php echo "/page/" . $i ?>>
                        <?php echo $i ?>
                    </a></li>
            <?php }
        } ?>

        <li class="page-numbers next"><a href=<?php echo "/page/" . ($current_page + 1) ?>><i class="fas fa-chevron-right"></i></a></li>
    </ul>
</div><!-- #pagination -->
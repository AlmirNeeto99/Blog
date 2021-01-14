<nav aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-end mr-0">
        <li class="breadcrumb-item"><a class="text-conexa" href="/">Home</a></li>
        <?php $last = false;
        $index = 0;
        foreach ($links as $key => $value) {
            if ($index == sizeof($links) - 1) $last = true;
            if ($last) { ?>
                <li class="breadcrumb-item active" aria-current="page"><?= $value ?></li>
            <?php } else { ?>
                <li class="breadcrumb-item"><a class="text-conexa" href="<?= Yii::app()->createUrl($value[0]) ?>"><?= $key ?></a></li>
        <?php }
            $index++;
        } ?>
    </ol>
</nav>
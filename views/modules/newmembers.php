<?php
$newMembers = $this->data('NewMembers');
?>

<div id="NewMembers" class="Box">
    <h4 aria-level="2"><?php echo t('New Members'); ?>
        <span class="Count"><?php echo Gdn_Format::bigNumber(count($newMembers), 'html') ?></span>
    </h4>
    <?php
    if (count($newMembers) > 0) {
        echo '<ul class="PanelInfo">';

        foreach ($newMembers AS $user) {
            //echo '<li>'.userAnchor($user, ($user['Invisible']) ? 'Invisible' : '').'</li>';
            echo '<li>' . $user['id'] . '</li>';
        }

        echo '</ul>';
    }
    ?>
</div>


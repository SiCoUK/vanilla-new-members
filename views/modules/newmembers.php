<?php
$newMembers = $this->data('NewMembers');
?>

<div class="Box BoxNewUsers">

    <?php echo panelHeading(t('New Members')); ?>
    <?php
    if (count($newMembers) > 0) {
        echo '<ul class="PanelInfo PanelNewUsers">';

        foreach ($newMembers AS $user) {
            echo '<li>' . anchor(
                wrap(wrap(Gdn_Format::date($user->DateFirstVisit, 'html')), 'span', ['class' => 'Aside']) . ' ' .
                wrap(wrap(htmlspecialchars(val('Name', $user)), 'span', ['class' => 'Username']), 'span'),
                userUrl($user),
                    '',
                    ['title' => htmlspecialchars(val('Name', $user)) . ' joined on ' . Gdn_Format::date($user->DateFirstVisit, 'html')]
            ) . '</li>';
            //echo '<li>' . userAnchor($user) . Gdn_Format::date($user->DateInserted, 'html') . '</li>';
        }

        echo '</ul>';
    }
    ?>
</div>


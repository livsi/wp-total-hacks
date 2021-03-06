
<div id="post" class="tab">
<h3><?php _e('Posts & Pages', 'wp-total-hacks'); ?></h3>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Delete meta boxes for Posts', 'wp-total-hacks'); ?></h4>
    <div class="block_content">
        <p><?php _e('Click on the check box that you want to delete.', 'wp-total-hacks'); ?></p>
        <ul>
            <?php foreach ($this->post_metas as $wgt => $pos): ?>
            <li>
<?php if (get_option('wfb_postmetas') && is_array(get_option('wfb_postmetas')) && in_array($wgt, get_option('wfb_postmetas'))): ?>
                <input id="wfb_postmetas_<?php echo $wgt; ?>" type="checkbox" name="wfb_postmetas[]" value="<?php echo $wgt; ?>" checked="checked" />
<?php else: ?>
                <input id="wfb_postmetas_<?php echo $wgt; ?>" type="checkbox" name="wfb_postmetas[]" value="<?php echo $wgt; ?>" />
<?php endif; ?>
                <label for="wfb_postmetas_<?php echo $wgt; ?>"><?php echo __($pos['title']); ?></label>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Delete meta boxes for Pages', 'wp-total-hacks'); ?></h4>
    <div class="block_content">
        <p><?php _e('Click on the check box that you want to delete.', 'wp-total-hacks'); ?></p>
        <ul>
            <?php foreach ($this->page_metas as $wgt => $pos): ?>
            <li>
<?php if (get_option('wfb_pagemetas') && is_array(get_option('wfb_pagemetas')) && in_array($wgt, get_option('wfb_pagemetas'))): ?>
                <input id="wfb_pagemetas_<?php echo $wgt; ?>" type="checkbox" name="wfb_pagemetas[]" value="<?php echo $wgt; ?>" checked="checked" />
<?php else: ?>
                <input id="wfb_pagemetas_<?php echo $wgt; ?>" type="checkbox" name="wfb_pagemetas[]" value="<?php echo $wgt; ?>" />
<?php endif; ?>
                <label for="wfb_pagemetas_<?php echo $wgt; ?>"><?php _e($pos['title']); ?></label>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Revision Control', 'wp-total-hacks'); ?></h4>
    <div class="block_content">
        <p><?php _e('Please select limit the number of allowed revisions.', 'wp-total-hacks'); ?></p>
        <select name="wfb_revision" id="wfb_revision">
            <option value=""><?php _e('Store All', 'wp-total-hacks'); ?></option>
            <?php for($i=0; $i<21; $i++): ?>
            <?php
                if (strlen(get_option("wfb_revision")) && intval(get_option("wfb_revision")) === $i) {
                    $chk = 'selected="selected"';
                } else {
                    $chk = '';
                }
            ?>
            <option value="<?php echo $i; ?>" <?php echo $chk; ?>><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Disable Auto Save', 'wp-total-hacks'); ?></h4>
    <div class="block_content">
        <?php $this->sel('wfb_autosave'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Stop Self Pings', 'wp-total-hacks'); ?></h4>
    <div class="block_content">
        <p><?php _e('Stop sending pings from your own site to your own site when you write posts.', 'wp-total-hacks'); ?></p>
        <?php $this->sel('wfb_selfping'); ?>
    </div>
</div>

<div class="block">
    <h4><img src="<?php echo $this->get_plugin_url(); ?>/img/check.png" height="24" width="24" /><?php _e('Add "Excerpt" support for Pages.', 'wp-total-hacks'); ?></h4>
    <div class="block_content">
        <p><?php _e('Requires to add excerpt text in a Pages.', 'wp-total-hacks'); ?></p>
        <?php $this->sel('wfb_pageexcerpt'); ?>
    </div>
</div>

</div><!--end .tab-->


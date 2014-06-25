<?php
/**
 * plugz Admin Settings
 *
 * Admin settings for all plugz plugins
 *
 * @package plugz
 * @subpackage Functions
 */

$widgetList = plugz_request(array('action' => 'getWidgets'));

if (isset($widgetList['error'])) {
    $errors = '<div class="error fade"><p><strong>' . $widgetList['error'] . '</strong></div>';
}
 
?>

<div class="wrap">
    <?php if ($plugzConnected && empty($errors)) : ?>
        <h2>Widgets <a class="add-new-h2" href="admin.php?page=plugz/widgets&create=1">Add New</a></h2>
        <?php if (is_array($widgetList) && count($widgetList)) : ?>
            <table class="wp-list-table widefat fixed posts">
                <thead>
                    <tr>
                        <th style="" class="manage-column column-title" id="title" scope="col"><span>Title</span></th>
                        <th style="" class="manage-column column-categories" id="categories" scope="col">Categories</th>
                        <th style="" class="manage-column column-tags" id="tags" scope="col">Tags</th>
                        <th style="" class="manage-column column-date" id="date" scope="col"><span>Date</span></th>
                    </tr>
                </thead>

                <tfoot>
                    <tr>
                        <th style="" class="manage-column column-title" id="title" scope="col"><span>Title</span></th>
                        <th style="" class="manage-column column-categories" id="categories" scope="col">Categories</th>
                        <th style="" class="manage-column column-tags" id="tags" scope="col">Tags</th>
                        <th style="" class="manage-column column-date" id="date" scope="col"><span>Date</span></th>
                    </tr>
                </tfoot>

                <tbody id="the-list">
                    <?php $c = false;
                    foreach ($widgetList as $widget) :
                        ?>
                        <tr class="widget-<?php echo $widget['id'] ?> <?php echo (($c = !$c) ? ' alternate' : '') ?>" id="widget-<?php echo $widget['id'] ?>">
                            <td class="post-title page-title column-title"><strong><a title="Edit “<?php echo $widget['name'] ?>”" target="plugz" href="admin.php?page=plugz/widgets&amp;edit=<?php echo $widget['id'] ?>&amp;noheader=true" class="row-title"><?php echo $widget['name'] ?></a></strong>
                                <div class="locked-info"><span class="locked-avatar"></span> <span class="locked-text"></span></div>
                                <div class="row-actions">
                                    <span class="edit"><a title="Edit this item" target="plugz" href="admin.php?page=plugz/widgets&amp;edit=<?php echo $widget['id'] ?>&amp;noheader=true">Edit</a> | </span>
                                    <span class="trash"><a href="admin.php?page=plugz/widgets&amp;delete=<?php echo $widget['id'] ?>&amp;noheader=true" onclick="return confirm('Are you sure, that you want to delete this widget?')" title="Move this item to the Trash" class="submitdelete">Trash</a></span>
                                </div>
                            </td>
                            <td class="categories column-categories">
            <?php echo json_decode($widget['wdata'])->tags0 ?>
                            </td>
                            <td class="tags column-tags">
            <?php echo json_decode($widget['wdata'])->tags1 ?>
                            </td>
                            <td class="date column-date"><abbr title="<?php echo date('Y/d/m h:i:s A', strtotime($widget['added_date'])) ?>"><?php echo human_time_diff(strtotime($widget['added_date'])) ?></abbr></td>
                        </tr>
        <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
    <div class="metabox-holder" id="poststuff">
        <div id="post-body">
            <div id="post-body-content">
                <div class="postbox" id="plugz-about">
                    <h3 class="title">Messages:</h3>
                    <div class="inside">
                        <div>You don't have widgets yet. Click <a href="admin.php?page=plugz/widgets&create=1">Add New</a> to create one.</div>
                    </div>
            </div>
            </div>
        </div>
    </div>
        <?php endif; ?>
    <?php else : ?>
        <h2>Widgets</h2>
        <?php echo $errors ?>
    <?php endif; ?>
</div>

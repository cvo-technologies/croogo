<div class="navbar navbar-light bg-faded">
    <div class="float-left">
        <?php
        echo __d('croogo', 'Sort by:');
        echo ', ' . $this->Paginator->sort('title', __d('croogo', 'Title'), ['class' => 'sort']);
        echo ', ' . $this->Paginator->sort('created', __d('croogo', 'Created'), ['class' => 'sort']);
        ?>
    </div>
    <div class="float-right">
        <button type="button" class="btn btn-primary add-image">Add images</button>
    </div>
    <div class="float-right">
        <?php echo $this->element('Croogo/Nodes.admin/nodes_search'); ?>
    </div>
</div>

<div class="card-columns" id="dropzone-previews">
    <?php
    $rows = [];
    foreach ($attachments as $attachment):
        list($mimeType, $imageType) = explode('/', $attachment->mime_type);
        $imagecreatefrom = ['gif', 'jpeg', 'png', 'string', 'wbmp', 'webp', 'xbm', 'xpm'];
        if ($mimeType == 'image' && in_array($imageType, $imagecreatefrom)) {
            $thumbnail = $this->Image->resize($attachment->path, 500, 500, [], ['class' => 'thumbnail card-img-bottom img-fluid']);
        } else {
            $thumbnail = $this->Html->image(
                '/croogo/img/icons/page_white.png',
                ['class' => 'card-img-bottom img-fluid']
            );
        }

        $footerText = $attachment->title .
            '<br>' .
            $this->Html->tag('small', $attachment->path, ['class' => 'text-muted']);
        $cardHeader = $this->Html->div('card-header', $footerText);
        $card = $this->Html->div(
            'card text-xs-center selector item-choose',
            $cardHeader . $thumbnail,
            [
                'data-slug' => $attachment->slug,
                'data-chooser-type' => 'Node',
                'data-chooser-id' => $attachment->id,
                'data-chooser-title' => $attachment->title,
                'rel' => $attachment->path,
            ]
        );
        echo $card;
    endforeach;
    ?>
</div>
<?php echo $this->element('Croogo/Core.admin/pagination'); ?>

<?php
echo $this->Html->script([
    'Croogo/FileManager.lib/dropzone',
    'Croogo/FileManager.attachments/chooser'
]);
echo $this->element('Croogo/FileManager.admin/dropzone_setup', ['type' => 'card']);

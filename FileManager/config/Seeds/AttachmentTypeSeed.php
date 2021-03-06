<?php

use Phinx\Seed\AbstractSeed;

class AttachmentTypeSeed extends AbstractSeed
{

    public function run()
    {
        $records = [
            [
                'title' => 'Attachment',
                'alias' => 'attachment',
                'plugin' => 'Croogo/FileManager',
                'updated' => date('Y-m-d'),
                'created' => date('Y-m-d'),
            ],
        ];

        $this->table('types')
            ->insert($records)
            ->save();
    }
}

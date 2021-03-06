<?php

use Phinx\Seed\AbstractSeed;

class LinksSeed extends AbstractSeed
{

    public $records = [
        [
            'id' => '5',
            'parent_id' => null,
            'menu_id' => '4',
            'title' => 'About',
            'class' => 'about',
            'description' => '',
            'link' => 'plugin:Croogo%2fNodes/controller:Nodes/action:view/type:page/slug:about',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '3',
            'rght' => '4',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-06 23:14:21',
            'created' => '2009-08-19 12:23:33'
        ],
        [
            'id' => '6',
            'parent_id' => null,
            'menu_id' => '4',
            'title' => 'Contact',
            'class' => 'contact',
            'description' => '',
            'link' => 'plugin:Croogo/Contacts/controller:Contacts/action:view/contact',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '5',
            'rght' => '6',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-06 23:14:45',
            'created' => '2009-08-19 12:34:56'
        ],
        [
            'id' => '7',
            'parent_id' => null,
            'menu_id' => '3',
            'title' => 'Home',
            'class' => 'home',
            'description' => '',
            'link' => 'plugin:Croogo%2fNodes/controller:Nodes/action:promoted',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '5',
            'rght' => '6',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-06 21:17:06',
            'created' => '2009-09-06 21:32:54'
        ],
        [
            'id' => '8',
            'parent_id' => null,
            'menu_id' => '3',
            'title' => 'About',
            'class' => 'about',
            'description' => '',
            'link' => 'plugin:Croogo%2fNodes/controller:Nodes/action:view/type:page/slug:about',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '7',
            'rght' => '10',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-09-12 03:45:53',
            'created' => '2009-09-06 21:34:57'
        ],
        [
            'id' => '9',
            'parent_id' => '8',
            'menu_id' => '3',
            'title' => 'Child link',
            'class' => 'child-link',
            'description' => '',
            'link' => '#',
            'target' => '',
            'rel' => '',
            'status' => '0',
            'lft' => '8',
            'rght' => '9',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-06 23:13:06',
            'created' => '2009-09-12 03:52:23'
        ],
        [
            'id' => '10',
            'parent_id' => null,
            'menu_id' => '5',
            'title' => 'Site Admin',
            'class' => 'site-admin',
            'description' => '',
            'link' => '/admin',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '1',
            'rght' => '2',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-09-12 06:34:09',
            'created' => '2009-09-12 06:34:09'
        ],
        [
            'id' => '11',
            'parent_id' => null,
            'menu_id' => '5',
            'title' => 'Log out',
            'class' => 'log-out',
            'description' => '',
            'link' => '/plugin:Croogo%2fUsers/controller:Users/action:logout',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '7',
            'rght' => '8',
            'visibility_roles' => '["1","2"]',
            'params' => '',
            'updated' => '2009-09-12 06:35:22',
            'created' => '2009-09-12 06:34:41'
        ],
        [
            'id' => '12',
            'parent_id' => null,
            'menu_id' => '6',
            'title' => 'Croogo',
            'class' => 'croogo',
            'description' => '',
            'link' => 'http://www.croogo.org',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '3',
            'rght' => '4',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-09-12 23:31:59',
            'created' => '2009-09-12 23:31:59'
        ],
        [
            'id' => '14',
            'parent_id' => null,
            'menu_id' => '6',
            'title' => 'CakePHP',
            'class' => 'cakephp',
            'description' => '',
            'link' => 'http://www.cakephp.org',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '1',
            'rght' => '2',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-07 03:25:25',
            'created' => '2009-09-12 23:38:43'
        ],
        [
            'id' => '15',
            'parent_id' => null,
            'menu_id' => '3',
            'title' => 'Contact',
            'class' => 'contact',
            'description' => '',
            'link' => '/plugin:Croogo%2fContacts/controller:Contacts/action:view/contact',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '11',
            'rght' => '12',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-09-16 07:54:13',
            'created' => '2009-09-16 07:53:33'
        ],
        [
            'id' => '16',
            'parent_id' => null,
            'menu_id' => '5',
            'title' => 'Entries (RSS)',
            'class' => 'entries-rss',
            'description' => '',
            'link' => '/promoted.rss',
            'target' => '',
            'rel' => '',
            'status' => '1',
            'lft' => '3',
            'rght' => '4',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-27 17:46:22',
            'created' => '2009-10-27 17:46:22'
        ],
        [
            'id' => '17',
            'parent_id' => null,
            'menu_id' => '5',
            'title' => 'Comments (RSS)',
            'class' => 'comments-rss',
            'description' => '',
            'link' => '/comments.rss',
            'target' => '',
            'rel' => '',
            'status' => '0',
            'lft' => '5',
            'rght' => '6',
            'visibility_roles' => '',
            'params' => '',
            'updated' => '2009-10-27 17:46:54',
            'created' => '2009-10-27 17:46:54'
        ],
    ];

    public function run()
    {
        $Table = $this->table('links');
        $Table->insert($this->records)->save();
    }

}

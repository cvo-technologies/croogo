<?php

namespace Croogo\Taxonomy\Model;

use App\Model\AppModel;

/**
 * Type
 *
 * @category Taxonomy.Model
 * @package  Croogo.Taxonomy.Model
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class Type extends TaxonomyAppModel
{

/**
 * Model name
 *
 * @var string
 * @access public
 */
    public $name = 'Type';

/**
 * Behaviors used by the Model
 *
 * @var array
 * @access public
 */
    public $actsAs = [
        'Croogo.Cached' => [
            'groups' => [
                'taxonomy',
            ],
        ],
        'Croogo.Params',
        'Croogo.Trackable',
    ];

/**
 * Validation
 *
 * @var array
 * @access public
 */
    public $validate = [
        'title' => [
            'rule' => ['minLength', 1],
            'message' => 'Title cannot be empty.',
        ],
        'alias' => [
            'isUnique' => [
                'rule' => 'isUnique',
                'message' => 'This alias has already been taken.',
            ],
            'minLength' => [
                'rule' => ['minLength', 1],
                'message' => 'Alias cannot be empty.',
            ],
        ],
    ];

/**
 * Model associations: hasAndBelongsToMany
 *
 * @var array
 * @access public
 */
    public $hasAndBelongsToMany = [
        'Vocabulary' => [
            'className' => 'Taxonomy.Vocabulary',
            'joinTable' => 'types_vocabularies',
            'foreignKey' => 'type_id',
            'associationForeignKey' => 'vocabulary_id',
            'unique' => true,
            'conditions' => '',
            'fields' => '',
            'order' => 'Vocabulary.weight ASC',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => '',
        ],
    ];

/**
 * Display fields for this model
 *
 * @var array
 */
    protected $_displayFields = [
        'id',
        'title',
        'alias',
        'description',
        'plugin',
    ];

/**
 * Get a list of relevant types for given plugin
 */
    public function pluginTypes($plugin = null)
    {
        if ($plugin === null) {
            $conditions = [];
        } elseif ($plugin) {
            $conditions = ['plugin' => $plugin];
        } else {
            $conditions = [
                'OR' => [
                    'plugin LIKE' => '',
                    'plugin' => null,
                ],
            ];
        }
        return $this->find('list', compact('conditions'));
    }
}

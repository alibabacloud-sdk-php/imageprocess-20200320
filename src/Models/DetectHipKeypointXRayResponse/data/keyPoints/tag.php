<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectHipKeypointXRayResponse\data\keyPoints;

use AlibabaCloud\Tea\Model;

class tag extends Model
{
    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $label;
    protected $_name = [
        'direction' => 'Direction',
        'label'     => 'Label',
    ];

    public function validate()
    {
        Model::validateRequired('direction', $this->direction, true);
        Model::validateRequired('label', $this->label, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        return $model;
    }
}

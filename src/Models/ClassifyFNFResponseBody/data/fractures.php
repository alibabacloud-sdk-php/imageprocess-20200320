<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponseBody\data\fractures\tag;
use AlibabaCloud\Tea\Model;

class fractures extends Model
{
    /**
     * @var int[]
     */
    public $boxes;

    /**
     * @var tag
     */
    public $tag;

    /**
     * @var float
     */
    public $value;
    protected $_name = [
        'boxes' => 'Boxes',
        'tag'   => 'Tag',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boxes) {
            $res['Boxes'] = $this->boxes;
        }
        if (null !== $this->tag) {
            $res['Tag'] = null !== $this->tag ? $this->tag->toMap() : null;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fractures
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = $map['Boxes'];
            }
        }
        if (isset($map['Tag'])) {
            $model->tag = tag::fromMap($map['Tag']);
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}

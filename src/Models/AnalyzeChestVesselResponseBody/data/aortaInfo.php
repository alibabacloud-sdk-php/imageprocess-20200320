<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\AnalyzeChestVesselResponseBody\data;

use AlibabaCloud\Tea\Model;

class aortaInfo extends Model
{
    /**
     * @description 1
     *
     * @var float[]
     */
    public $area;

    /**
     * @var float[][]
     */
    public $coordinates;

    /**
     * @example 2
     *
     * @var int
     */
    public $labelValue;

    /**
     * @example 2722
     *
     * @var float
     */
    public $maxArea;

    /**
     * @example 416
     *
     * @var int
     */
    public $maxAreaIndex;

    /**
     * @example 63
     *
     * @var float
     */
    public $maxDiameter;
    protected $_name = [
        'area'         => 'Area',
        'coordinates'  => 'Coordinates',
        'labelValue'   => 'LabelValue',
        'maxArea'      => 'MaxArea',
        'maxAreaIndex' => 'MaxAreaIndex',
        'maxDiameter'  => 'MaxDiameter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->coordinates) {
            $res['Coordinates'] = $this->coordinates;
        }
        if (null !== $this->labelValue) {
            $res['LabelValue'] = $this->labelValue;
        }
        if (null !== $this->maxArea) {
            $res['MaxArea'] = $this->maxArea;
        }
        if (null !== $this->maxAreaIndex) {
            $res['MaxAreaIndex'] = $this->maxAreaIndex;
        }
        if (null !== $this->maxDiameter) {
            $res['MaxDiameter'] = $this->maxDiameter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aortaInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            if (!empty($map['Area'])) {
                $model->area = $map['Area'];
            }
        }
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = $map['Coordinates'];
            }
        }
        if (isset($map['LabelValue'])) {
            $model->labelValue = $map['LabelValue'];
        }
        if (isset($map['MaxArea'])) {
            $model->maxArea = $map['MaxArea'];
        }
        if (isset($map['MaxAreaIndex'])) {
            $model->maxAreaIndex = $map['MaxAreaIndex'];
        }
        if (isset($map['MaxDiameter'])) {
            $model->maxDiameter = $map['MaxDiameter'];
        }

        return $model;
    }
}

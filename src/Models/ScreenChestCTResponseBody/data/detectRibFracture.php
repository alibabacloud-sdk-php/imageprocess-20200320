<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenChestCTResponseBody\data\detectRibFracture\detections;
use AlibabaCloud\Tea\Model;

class detectRibFracture extends Model
{
    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @var string
     */
    public $fractureMaskURL;

    /**
     * @var float[]
     */
    public $origin;

    /**
     * @var string
     */
    public $resultURL;

    /**
     * @var string
     */
    public $ribSegmentMaskURL;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'detections'        => 'Detections',
        'fractureMaskURL'   => 'FractureMaskURL',
        'origin'            => 'Origin',
        'resultURL'         => 'ResultURL',
        'ribSegmentMaskURL' => 'RibSegmentMaskURL',
        'spacing'           => 'Spacing',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detections) {
            $res['Detections'] = [];
            if (null !== $this->detections && \is_array($this->detections)) {
                $n = 0;
                foreach ($this->detections as $item) {
                    $res['Detections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fractureMaskURL) {
            $res['FractureMaskURL'] = $this->fractureMaskURL;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }
        if (null !== $this->ribSegmentMaskURL) {
            $res['RibSegmentMaskURL'] = $this->ribSegmentMaskURL;
        }
        if (null !== $this->spacing) {
            $res['Spacing'] = $this->spacing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectRibFracture
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Detections'])) {
            if (!empty($map['Detections'])) {
                $model->detections = [];
                $n                 = 0;
                foreach ($map['Detections'] as $item) {
                    $model->detections[$n++] = null !== $item ? detections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FractureMaskURL'])) {
            $model->fractureMaskURL = $map['FractureMaskURL'];
        }
        if (isset($map['Origin'])) {
            if (!empty($map['Origin'])) {
                $model->origin = $map['Origin'];
            }
        }
        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }
        if (isset($map['RibSegmentMaskURL'])) {
            $model->ribSegmentMaskURL = $map['RibSegmentMaskURL'];
        }
        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = $map['Spacing'];
            }
        }

        return $model;
    }
}

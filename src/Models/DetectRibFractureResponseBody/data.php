<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureResponseBody\data\detections;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var detections[]
     */
    public $detections;

    /**
     * @var float[]
     */
    public $origin;

    /**
     * @example http://vibktprfx-prod-prod-aic-med-cn-shanghai.oss-cn-shanghai.aliyuncs.com/detect-rib-fracture/local_test/2020-12-22/result-D5CD101C-F8E5-43CA-9E99-44C783B8F8BE.tar.gz?Expires=1608631727&OSSAccessKeyId=LTAI4FoLmvQ9urWXgSRp****&Signature=d6c32E1IB4b7Ayo1lpjs%2Bq3Ylv****
     *
     * @var string
     */
    public $resultURL;

    /**
     * @var float[]
     */
    public $spacing;
    protected $_name = [
        'detections' => 'Detections',
        'origin'     => 'Origin',
        'resultURL'  => 'ResultURL',
        'spacing'    => 'Spacing',
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
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
        }
        if (null !== $this->spacing) {
            $res['Spacing'] = $this->spacing;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['Origin'])) {
            if (!empty($map['Origin'])) {
                $model->origin = $map['Origin'];
            }
        }
        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }
        if (isset($map['Spacing'])) {
            if (!empty($map['Spacing'])) {
                $model->spacing = $map['Spacing'];
            }
        }

        return $model;
    }
}

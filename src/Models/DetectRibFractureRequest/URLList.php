<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectRibFractureRequest;

use AlibabaCloud\Tea\Model;

class URLList extends Model
{
    /**
     * @example https://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo/ribfrac/ribfrac-test-image.nii.gz
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'URL' => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return URLList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}

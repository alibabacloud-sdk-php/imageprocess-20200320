<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentLymphNodeRequest;

use AlibabaCloud\Tea\Model;

class URLList extends Model
{
    /**
     * @example ["Url":"http://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo%2Frt%2Fgtv%2F1-050.dcm","Url":"http://medclients-sh.oss-cn-shanghai.aliyuncs.com/demo%2Frt%2Fgtv%2F1-051.dcm",......]
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
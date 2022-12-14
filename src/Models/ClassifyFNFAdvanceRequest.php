<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ClassifyFNFAdvanceRequest extends Model
{
    /**
     * @example jpg
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xuhan/8%E6%9C%88%E4%BB%BD%E5%8C%BB%E7%96%97/sample_jpg_1.jpg
     *
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @example 0001
     *
     * @var string
     */
    public $orgId;

    /**
     * @example weiyi
     *
     * @var string
     */
    public $orgName;

    /**
     * @example 123
     *
     * @var string
     */
    public $tracerId;
    protected $_name = [
        'dataFormat'     => 'DataFormat',
        'imageUrlObject' => 'ImageUrl',
        'orgId'          => 'OrgId',
        'orgName'        => 'OrgName',
        'tracerId'       => 'TracerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->tracerId) {
            $res['TracerId'] = $this->tracerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ClassifyFNFAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['TracerId'])) {
            $model->tracerId = $map['TracerId'];
        }

        return $model;
    }
}

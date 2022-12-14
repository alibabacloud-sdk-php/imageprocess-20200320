<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\ClassifyFNFResponseBody\data\fractures;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var fractures[]
     */
    public $fractures;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/test-team/xuhan/8%E6%9C%88%E4%BB%BD%E5%8C%BB%E7%96%97/sample_jpg_1.jpg
     *
     * @var string
     */
    public $imageUrl;

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
    protected $_name = [
        'fractures' => 'Fractures',
        'imageUrl'  => 'ImageUrl',
        'orgId'     => 'OrgId',
        'orgName'   => 'OrgName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fractures) {
            $res['Fractures'] = [];
            if (null !== $this->fractures && \is_array($this->fractures)) {
                $n = 0;
                foreach ($this->fractures as $item) {
                    $res['Fractures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
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
        if (isset($map['Fractures'])) {
            if (!empty($map['Fractures'])) {
                $model->fractures = [];
                $n                = 0;
                foreach ($map['Fractures'] as $item) {
                    $model->fractures[$n++] = null !== $item ? fractures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        return $model;
    }
}

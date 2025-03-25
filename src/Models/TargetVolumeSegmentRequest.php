<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\TargetVolumeSegmentRequest\URLList;

class TargetVolumeSegmentRequest extends Model
{
    /**
     * @var string
     */
    public $cancerType;

    /**
     * @var string
     */
    public $dataFormat;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var string
     */
    public $targetVolumeType;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'cancerType' => 'CancerType',
        'dataFormat' => 'DataFormat',
        'orgId' => 'OrgId',
        'orgName' => 'OrgName',
        'targetVolumeType' => 'TargetVolumeType',
        'URLList' => 'URLList',
    ];

    public function validate()
    {
        if (\is_array($this->URLList)) {
            Model::validateArray($this->URLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancerType) {
            $res['CancerType'] = $this->cancerType;
        }

        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }

        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }

        if (null !== $this->targetVolumeType) {
            $res['TargetVolumeType'] = $this->targetVolumeType;
        }

        if (null !== $this->URLList) {
            if (\is_array($this->URLList)) {
                $res['URLList'] = [];
                $n1 = 0;
                foreach ($this->URLList as $item1) {
                    $res['URLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CancerType'])) {
            $model->cancerType = $map['CancerType'];
        }

        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }

        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }

        if (isset($map['TargetVolumeType'])) {
            $model->targetVolumeType = $map['TargetVolumeType'];
        }

        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n1 = 0;
                foreach ($map['URLList'] as $item1) {
                    $model->URLList[$n1++] = URLList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}

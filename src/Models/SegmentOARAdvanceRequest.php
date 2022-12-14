<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentOARAdvanceRequest\URLList;
use AlibabaCloud\Tea\Model;

class SegmentOARAdvanceRequest extends Model
{
    /**
     * @example CHEST
     *
     * @var string
     */
    public $bodyPart;

    /**
     * @example true
     *
     * @var bool
     */
    public $contrast;

    /**
     * @example NIFTI
     *
     * @var string
     */
    public $dataFormat;

    /**
     * @var int[]
     */
    public $maskList;

    /**
     * @example 7ff51bfe-e73d-11ea-827d-506b4b3f3cf6
     *
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $orgName;

    /**
     * @var URLList[]
     */
    public $URLList;
    protected $_name = [
        'bodyPart'   => 'BodyPart',
        'contrast'   => 'Contrast',
        'dataFormat' => 'DataFormat',
        'maskList'   => 'MaskList',
        'orgId'      => 'OrgId',
        'orgName'    => 'OrgName',
        'URLList'    => 'URLList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyPart) {
            $res['BodyPart'] = $this->bodyPart;
        }
        if (null !== $this->contrast) {
            $res['Contrast'] = $this->contrast;
        }
        if (null !== $this->dataFormat) {
            $res['DataFormat'] = $this->dataFormat;
        }
        if (null !== $this->maskList) {
            $res['MaskList'] = $this->maskList;
        }
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->orgName) {
            $res['OrgName'] = $this->orgName;
        }
        if (null !== $this->URLList) {
            $res['URLList'] = [];
            if (null !== $this->URLList && \is_array($this->URLList)) {
                $n = 0;
                foreach ($this->URLList as $item) {
                    $res['URLList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SegmentOARAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyPart'])) {
            $model->bodyPart = $map['BodyPart'];
        }
        if (isset($map['Contrast'])) {
            $model->contrast = $map['Contrast'];
        }
        if (isset($map['DataFormat'])) {
            $model->dataFormat = $map['DataFormat'];
        }
        if (isset($map['MaskList'])) {
            if (!empty($map['MaskList'])) {
                $model->maskList = $map['MaskList'];
            }
        }
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['OrgName'])) {
            $model->orgName = $map['OrgName'];
        }
        if (isset($map['URLList'])) {
            if (!empty($map['URLList'])) {
                $model->URLList = [];
                $n              = 0;
                foreach ($map['URLList'] as $item) {
                    $model->URLList[$n++] = null !== $item ? URLList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

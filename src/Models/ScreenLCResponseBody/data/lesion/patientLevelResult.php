<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\ScreenLCResponseBody\data\lesion;

use AlibabaCloud\Dara\Model;

class patientLevelResult extends Model
{
    /**
     * @var string
     */
    public $benignNonCystProb;

    /**
     * @var float
     */
    public $benignProb;

    /**
     * @var float
     */
    public $calcProb;

    /**
     * @var float
     */
    public $cystProb;

    /**
     * @var float
     */
    public $HCCProb;

    /**
     * @var float
     */
    public $malignantNonHCCProb;

    /**
     * @var float
     */
    public $malignantProb;
    protected $_name = [
        'benignNonCystProb' => 'BenignNonCystProb',
        'benignProb' => 'BenignProb',
        'calcProb' => 'CalcProb',
        'cystProb' => 'CystProb',
        'HCCProb' => 'HCCProb',
        'malignantNonHCCProb' => 'MalignantNonHCCProb',
        'malignantProb' => 'MalignantProb',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->benignNonCystProb) {
            $res['BenignNonCystProb'] = $this->benignNonCystProb;
        }

        if (null !== $this->benignProb) {
            $res['BenignProb'] = $this->benignProb;
        }

        if (null !== $this->calcProb) {
            $res['CalcProb'] = $this->calcProb;
        }

        if (null !== $this->cystProb) {
            $res['CystProb'] = $this->cystProb;
        }

        if (null !== $this->HCCProb) {
            $res['HCCProb'] = $this->HCCProb;
        }

        if (null !== $this->malignantNonHCCProb) {
            $res['MalignantNonHCCProb'] = $this->malignantNonHCCProb;
        }

        if (null !== $this->malignantProb) {
            $res['MalignantProb'] = $this->malignantProb;
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
        if (isset($map['BenignNonCystProb'])) {
            $model->benignNonCystProb = $map['BenignNonCystProb'];
        }

        if (isset($map['BenignProb'])) {
            $model->benignProb = $map['BenignProb'];
        }

        if (isset($map['CalcProb'])) {
            $model->calcProb = $map['CalcProb'];
        }

        if (isset($map['CystProb'])) {
            $model->cystProb = $map['CystProb'];
        }

        if (isset($map['HCCProb'])) {
            $model->HCCProb = $map['HCCProb'];
        }

        if (isset($map['MalignantNonHCCProb'])) {
            $model->malignantNonHCCProb = $map['MalignantNonHCCProb'];
        }

        if (isset($map['MalignantProb'])) {
            $model->malignantProb = $map['MalignantProb'];
        }

        return $model;
    }
}

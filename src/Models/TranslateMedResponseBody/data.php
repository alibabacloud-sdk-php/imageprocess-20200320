<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\TranslateMedResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example Neonatal jaundice question how to treat
     *
     * @var string
     */
    public $text;

    /**
     * @example 11
     *
     * @var int
     */
    public $words;
    protected $_name = [
        'text'  => 'Text',
        'words' => 'Words',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->text) {
            $res['Text'] = $this->text;
        }
        if (null !== $this->words) {
            $res['Words'] = $this->words;
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
        if (isset($map['Text'])) {
            $model->text = $map['Text'];
        }
        if (isset($map['Words'])) {
            $model->words = $map['Words'];
        }

        return $model;
    }
}

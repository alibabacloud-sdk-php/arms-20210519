<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class DeletePrometheusAlertRuleRequest extends Model
{
    /**
     * @var int
     */
    public $alertId;
    protected $_name = [
        'alertId' => 'AlertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeletePrometheusAlertRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }

        return $model;
    }
}

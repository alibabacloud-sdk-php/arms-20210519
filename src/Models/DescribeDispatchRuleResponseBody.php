<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\SDK\ARMS\V20210519\Models\DescribeDispatchRuleResponseBody\dispatchRule;
use AlibabaCloud\Tea\Model;

class DescribeDispatchRuleResponseBody extends Model
{
    /**
     * @var dispatchRule
     */
    public $dispatchRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dispatchRule' => 'DispatchRule',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dispatchRule) {
            $res['DispatchRule'] = null !== $this->dispatchRule ? $this->dispatchRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDispatchRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DispatchRule'])) {
            $model->dispatchRule = dispatchRule::fromMap($map['DispatchRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}

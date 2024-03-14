<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\SDK\ARMS\V20210519\Models\SearchTracesResponseBody\traceInfos;
use AlibabaCloud\Tea\Model;

class SearchTracesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var traceInfos[]
     */
    public $traceInfos;
    protected $_name = [
        'requestId'  => 'RequestId',
        'traceInfos' => 'TraceInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->traceInfos) {
            $res['TraceInfos'] = [];
            if (null !== $this->traceInfos && \is_array($this->traceInfos)) {
                $n = 0;
                foreach ($this->traceInfos as $item) {
                    $res['TraceInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTracesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TraceInfos'])) {
            if (!empty($map['TraceInfos'])) {
                $model->traceInfos = [];
                $n                 = 0;
                foreach ($map['TraceInfos'] as $item) {
                    $model->traceInfos[$n++] = null !== $item ? traceInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

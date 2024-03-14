<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class SendCustomIncidentsRequest extends Model
{
    /**
     * @var string
     */
    public $incidents;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'incidents'   => 'Incidents',
        'productType' => 'ProductType',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->incidents) {
            $res['Incidents'] = $this->incidents;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendCustomIncidentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Incidents'])) {
            $model->incidents = $map['Incidents'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}

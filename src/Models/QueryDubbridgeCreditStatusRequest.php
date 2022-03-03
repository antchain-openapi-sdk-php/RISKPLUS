<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class QueryDubbridgeCreditStatusRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 授信申请订单号
    /**
     * @var string
     */
    public $originalOrderNo;

    // 订单号
    /**
     * @var string
     */
    public $orderNo;

    // 三方客户id
    /**
     * @var string
     */
    public $openId;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'originalOrderNo'   => 'original_order_no',
        'orderNo'           => 'order_no',
        'openId'            => 'open_id',
    ];

    public function validate()
    {
        Model::validateRequired('orderNo', $this->orderNo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->originalOrderNo) {
            $res['original_order_no'] = $this->originalOrderNo;
        }
        if (null !== $this->orderNo) {
            $res['order_no'] = $this->orderNo;
        }
        if (null !== $this->openId) {
            $res['open_id'] = $this->openId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDubbridgeCreditStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['original_order_no'])) {
            $model->originalOrderNo = $map['original_order_no'];
        }
        if (isset($map['order_no'])) {
            $model->orderNo = $map['order_no'];
        }
        if (isset($map['open_id'])) {
            $model->openId = $map['open_id'];
        }

        return $model;
    }
}

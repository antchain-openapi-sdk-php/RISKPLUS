<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class BindDubbridgeCustomerBankcardRequest extends Model
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

    // 订单号
    /**
     * @var string
     */
    public $orderNo;

    // 客户编号
    /**
     * @var string
     */
    public $customNo;

    // 银行卡号
    /**
     * @var string
     */
    public $bankCardNo;

    // 渠道描述，具体请见分配
    /**
     * @var string
     */
    public $channelCode;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'orderNo'           => 'order_no',
        'customNo'          => 'custom_no',
        'bankCardNo'        => 'bank_card_no',
        'channelCode'       => 'channel_code',
    ];

    public function validate()
    {
        Model::validateRequired('orderNo', $this->orderNo, true);
        Model::validateRequired('customNo', $this->customNo, true);
        Model::validateRequired('bankCardNo', $this->bankCardNo, true);
        Model::validateRequired('channelCode', $this->channelCode, true);
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
        if (null !== $this->orderNo) {
            $res['order_no'] = $this->orderNo;
        }
        if (null !== $this->customNo) {
            $res['custom_no'] = $this->customNo;
        }
        if (null !== $this->bankCardNo) {
            $res['bank_card_no'] = $this->bankCardNo;
        }
        if (null !== $this->channelCode) {
            $res['channel_code'] = $this->channelCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindDubbridgeCustomerBankcardRequest
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
        if (isset($map['order_no'])) {
            $model->orderNo = $map['order_no'];
        }
        if (isset($map['custom_no'])) {
            $model->customNo = $map['custom_no'];
        }
        if (isset($map['bank_card_no'])) {
            $model->bankCardNo = $map['bank_card_no'];
        }
        if (isset($map['channel_code'])) {
            $model->channelCode = $map['channel_code'];
        }

        return $model;
    }
}
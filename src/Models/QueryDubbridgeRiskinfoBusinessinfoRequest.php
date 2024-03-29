<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class QueryDubbridgeRiskinfoBusinessinfoRequest extends Model
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

    // 渠道号
    /**
     * @var string
     */
    public $channelCode;

    // 客户号
    /**
     * @var string
     */
    public $customerNo;

    // 统一社会信用代码
    /**
     * @var string
     */
    public $socialCreditCode;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'channelCode'       => 'channel_code',
        'customerNo'        => 'customer_no',
        'socialCreditCode'  => 'social_credit_code',
    ];

    public function validate()
    {
        Model::validateRequired('channelCode', $this->channelCode, true);
        Model::validateRequired('customerNo', $this->customerNo, true);
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
        if (null !== $this->channelCode) {
            $res['channel_code'] = $this->channelCode;
        }
        if (null !== $this->customerNo) {
            $res['customer_no'] = $this->customerNo;
        }
        if (null !== $this->socialCreditCode) {
            $res['social_credit_code'] = $this->socialCreditCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDubbridgeRiskinfoBusinessinfoRequest
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
        if (isset($map['channel_code'])) {
            $model->channelCode = $map['channel_code'];
        }
        if (isset($map['customer_no'])) {
            $model->customerNo = $map['customer_no'];
        }
        if (isset($map['social_credit_code'])) {
            $model->socialCreditCode = $map['social_credit_code'];
        }

        return $model;
    }
}

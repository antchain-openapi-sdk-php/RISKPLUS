<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class CountDubheRepayReftrialRequest extends Model
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

    // 授信申请订单号
    /**
     * @var string
     */
    public $originalOrderNo;

    // 产品编号
    /**
     * @var string
     */
    public $prodNo;

    // 借款金额
    /**
     * @var int
     */
    public $applyAmount;

    // 借款期数
    /**
     * @var int
     */
    public $applyPeriod;

    // 还款方式
    /**
     * @var string
     */
    public $repayType;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'orderNo'           => 'order_no',
        'originalOrderNo'   => 'original_order_no',
        'prodNo'            => 'prod_no',
        'applyAmount'       => 'apply_amount',
        'applyPeriod'       => 'apply_period',
        'repayType'         => 'repay_type',
    ];

    public function validate()
    {
        Model::validateRequired('orderNo', $this->orderNo, true);
        Model::validateRequired('originalOrderNo', $this->originalOrderNo, true);
        Model::validateRequired('prodNo', $this->prodNo, true);
        Model::validateRequired('applyAmount', $this->applyAmount, true);
        Model::validateRequired('applyPeriod', $this->applyPeriod, true);
        Model::validateRequired('repayType', $this->repayType, true);
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
        if (null !== $this->originalOrderNo) {
            $res['original_order_no'] = $this->originalOrderNo;
        }
        if (null !== $this->prodNo) {
            $res['prod_no'] = $this->prodNo;
        }
        if (null !== $this->applyAmount) {
            $res['apply_amount'] = $this->applyAmount;
        }
        if (null !== $this->applyPeriod) {
            $res['apply_period'] = $this->applyPeriod;
        }
        if (null !== $this->repayType) {
            $res['repay_type'] = $this->repayType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountDubheRepayReftrialRequest
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
        if (isset($map['original_order_no'])) {
            $model->originalOrderNo = $map['original_order_no'];
        }
        if (isset($map['prod_no'])) {
            $model->prodNo = $map['prod_no'];
        }
        if (isset($map['apply_amount'])) {
            $model->applyAmount = $map['apply_amount'];
        }
        if (isset($map['apply_period'])) {
            $model->applyPeriod = $map['apply_period'];
        }
        if (isset($map['repay_type'])) {
            $model->repayType = $map['repay_type'];
        }

        return $model;
    }
}

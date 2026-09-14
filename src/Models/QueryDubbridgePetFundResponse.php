<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class QueryDubbridgePetFundResponse extends Model {
    protected $_name = [
        'reqMsgId' => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg' => 'result_msg',
        'petAvailableAmount' => 'pet_available_amount',
        'mallAvailableAmount' => 'mall_available_amount',
        'mallFrozenAmount' => 'mall_frozen_amount',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->petAvailableAmount) {
            $res['pet_available_amount'] = $this->petAvailableAmount;
        }
        if (null !== $this->mallAvailableAmount) {
            $res['mall_available_amount'] = $this->mallAvailableAmount;
        }
        if (null !== $this->mallFrozenAmount) {
            $res['mall_frozen_amount'] = $this->mallFrozenAmount;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return QueryDubbridgePetFundResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['req_msg_id'])){
            $model->reqMsgId = $map['req_msg_id'];
        }
        if(isset($map['result_code'])){
            $model->resultCode = $map['result_code'];
        }
        if(isset($map['result_msg'])){
            $model->resultMsg = $map['result_msg'];
        }
        if(isset($map['pet_available_amount'])){
            $model->petAvailableAmount = $map['pet_available_amount'];
        }
        if(isset($map['mall_available_amount'])){
            $model->mallAvailableAmount = $map['mall_available_amount'];
        }
        if(isset($map['mall_frozen_amount'])){
            $model->mallFrozenAmount = $map['mall_frozen_amount'];
        }
        return $model;
    }
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 活体可用金额，PET 账户行 available，单位元，两位小数
    /**
     * @var string
     */
    public $petAvailableAmount;

    // 商城可用金额，未冻结的可用余额，单位：元
    /**
     * @var string
     */
    public $mallAvailableAmount;

    // 商城当前冻结金额，单位：元
    /**
     * @var string
     */
    public $mallFrozenAmount;

}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class CountDubbridgeRepayReftrialResponse extends Model
{
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

    // 还款计划试算结果
    /**
     * @var RepayTrail[]
     */
    public $repayTrailList;
    protected $_name = [
        'reqMsgId'       => 'req_msg_id',
        'resultCode'     => 'result_code',
        'resultMsg'      => 'result_msg',
        'repayTrailList' => 'repay_trail_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
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
        if (null !== $this->repayTrailList) {
            $res['repay_trail_list'] = [];
            if (null !== $this->repayTrailList && \is_array($this->repayTrailList)) {
                $n = 0;
                foreach ($this->repayTrailList as $item) {
                    $res['repay_trail_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountDubbridgeRepayReftrialResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['repay_trail_list'])) {
            if (!empty($map['repay_trail_list'])) {
                $model->repayTrailList = [];
                $n                     = 0;
                foreach ($map['repay_trail_list'] as $item) {
                    $model->repayTrailList[$n++] = null !== $item ? RepayTrail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
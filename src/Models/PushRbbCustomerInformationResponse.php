<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class PushRbbCustomerInformationResponse extends Model
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

    // 返回代码
    /**
     * @var string
     */
    public $resCode;

    // 结果说明
    /**
     * @var string
     */
    public $resMsg;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'resCode'    => 'res_code',
        'resMsg'     => 'res_msg',
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
        if (null !== $this->resCode) {
            $res['res_code'] = $this->resCode;
        }
        if (null !== $this->resMsg) {
            $res['res_msg'] = $this->resMsg;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushRbbCustomerInformationResponse
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
        if (isset($map['res_code'])) {
            $model->resCode = $map['res_code'];
        }
        if (isset($map['res_msg'])) {
            $model->resMsg = $map['res_msg'];
        }

        return $model;
    }
}

<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class SyncUmktRtEventresultResponse extends Model
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

    // 处理是否成功
    /**
     * @var bool
     */
    public $success;

    // 基本圈客结果信息
    /**
     * @var CustomerUmktInfoModel[]
     */
    public $queryResult;
    protected $_name = [
        'reqMsgId'    => 'req_msg_id',
        'resultCode'  => 'result_code',
        'resultMsg'   => 'result_msg',
        'success'     => 'success',
        'queryResult' => 'query_result',
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
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->queryResult) {
            $res['query_result'] = [];
            if (null !== $this->queryResult && \is_array($this->queryResult)) {
                $n = 0;
                foreach ($this->queryResult as $item) {
                    $res['query_result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncUmktRtEventresultResponse
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
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['query_result'])) {
            if (!empty($map['query_result'])) {
                $model->queryResult = [];
                $n                  = 0;
                foreach ($map['query_result'] as $item) {
                    $model->queryResult[$n++] = null !== $item ? CustomerUmktInfoModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}

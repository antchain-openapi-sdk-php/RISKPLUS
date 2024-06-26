<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class QueryQmpTextsmsTemplateRequest extends Model
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

    // 短信类型
    /**
     * @var string
     */
    public $smsType;

    // 行业标签
    /**
     * @var string
     */
    public $tenantIndustry;

    // 页码
    /**
     * @var int
     */
    public $pageNum;

    // 每页记录数量
    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'smsType'           => 'sms_type',
        'tenantIndustry'    => 'tenant_industry',
        'pageNum'           => 'page_num',
        'pageSize'          => 'page_size',
    ];

    public function validate()
    {
        Model::validateRequired('smsType', $this->smsType, true);
        Model::validateRequired('tenantIndustry', $this->tenantIndustry, true);
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
        if (null !== $this->smsType) {
            $res['sms_type'] = $this->smsType;
        }
        if (null !== $this->tenantIndustry) {
            $res['tenant_industry'] = $this->tenantIndustry;
        }
        if (null !== $this->pageNum) {
            $res['page_num'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryQmpTextsmsTemplateRequest
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
        if (isset($map['sms_type'])) {
            $model->smsType = $map['sms_type'];
        }
        if (isset($map['tenant_industry'])) {
            $model->tenantIndustry = $map['tenant_industry'];
        }
        if (isset($map['page_num'])) {
            $model->pageNum = $map['page_num'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}

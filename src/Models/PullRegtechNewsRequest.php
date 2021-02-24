<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AntChain\RISKPLUS\Models;

use AlibabaCloud\Tea\Model;

class PullRegtechNewsRequest extends Model {
    protected $_name = [
        'authToken' => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'newsMaxId' => 'news_max_id',
    ];
    public function validate() {
        Model::validateRequired('newsMaxId', $this->newsMaxId, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->newsMaxId) {
            $res['news_max_id'] = $this->newsMaxId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return PullRegtechNewsRequest
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['auth_token'])){
            $model->authToken = $map['auth_token'];
        }
        if(isset($map['product_instance_id'])){
            $model->productInstanceId = $map['product_instance_id'];
        }
        if(isset($map['news_max_id'])){
            $model->newsMaxId = $map['news_max_id'];
        }
        return $model;
    }
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 表示本地数据库中舆情数据中的最大id
    /**
     * @var string
     */
    public $newsMaxId;

}

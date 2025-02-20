<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT ProductSkuItem
 *
 * @method string getInstanceType() 获取规格类型
BASIC：基础版
PRO ：专业版
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置规格类型
BASIC：基础版
PRO ：专业版
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkuCode() 获取规格代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkuCode(string $SkuCode) 设置规格代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOnSale() 获取是否售卖
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnSale(boolean $OnSale) 设置是否售卖
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNumLimit() 获取topic num限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置topic num限制
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTpsLimit() 获取tps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTpsLimit(integer $TpsLimit) 设置tps
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClientNumLimit() 获取客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxSubscriptionPerClient() 获取单客户端最大订阅数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxSubscriptionPerClient(integer $MaxSubscriptionPerClient) 设置单客户端最大订阅数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthorizationPolicyLimit() 获取授权规则条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizationPolicyLimit(integer $AuthorizationPolicyLimit) 设置授权规则条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPriceTags() 获取计费项信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceTags(array $PriceTags) 设置计费项信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProductSkuItem extends AbstractModel
{
    /**
     * @var string 规格类型
BASIC：基础版
PRO ：专业版
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceType;

    /**
     * @var string 规格代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkuCode;

    /**
     * @var boolean 是否售卖
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnSale;

    /**
     * @var integer topic num限制
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNumLimit;

    /**
     * @var integer tps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TpsLimit;

    /**
     * @var integer 客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientNumLimit;

    /**
     * @var integer 单客户端最大订阅数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxSubscriptionPerClient;

    /**
     * @var integer 授权规则条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizationPolicyLimit;

    /**
     * @var array 计费项信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceTags;

    /**
     * @param string $InstanceType 规格类型
BASIC：基础版
PRO ：专业版
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkuCode 规格代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OnSale 是否售卖
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNumLimit topic num限制
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TpsLimit tps
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClientNumLimit 客户端连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxSubscriptionPerClient 单客户端最大订阅数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthorizationPolicyLimit 授权规则条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PriceTags 计费项信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("OnSale",$param) and $param["OnSale"] !== null) {
            $this->OnSale = $param["OnSale"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }

        if (array_key_exists("MaxSubscriptionPerClient",$param) and $param["MaxSubscriptionPerClient"] !== null) {
            $this->MaxSubscriptionPerClient = $param["MaxSubscriptionPerClient"];
        }

        if (array_key_exists("AuthorizationPolicyLimit",$param) and $param["AuthorizationPolicyLimit"] !== null) {
            $this->AuthorizationPolicyLimit = $param["AuthorizationPolicyLimit"];
        }

        if (array_key_exists("PriceTags",$param) and $param["PriceTags"] !== null) {
            $this->PriceTags = [];
            foreach ($param["PriceTags"] as $key => $value){
                $obj = new PriceTag();
                $obj->deserialize($value);
                array_push($this->PriceTags, $obj);
            }
        }
    }
}

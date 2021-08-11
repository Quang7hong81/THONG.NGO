<?php
/**
 * Copyright (c) 2017 Bitcoin Viet Nam Co., Ltd.
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of this software
 *  and associated documentation files (the "Software"), to deal in the Software without restriction,
 *  including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense,
 *  and/or sell copies of the Software, and to permit persons to whom the Software is furnished to
 *  do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all copies or substantial
 *  portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED,
 *  INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A
 *  PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN
 *  ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH
 *  THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount;

use BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account\Balance;
use BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account\Tier;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Account
 * @package BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount
 */
class Account
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     */
    private $name;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("email")
     */
    private $email;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("verified")
     */
    private $verified;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("residenceVerified")
     */
    private $residenceVerified;

    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("vip")
     */
    private $vip;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("credit")
     */
    private $credit;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("volumeUsed")
     */
    private $volumeUsed;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("volumeLeft")
     */
    private $volumeLeft;

    /**
     * @var Tier
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account\Tier")
     * @Serializer\SerializedName("tier")
     */
    private $tier;

    /**
     * @var Balance[]
     *
     * @Serializer\Type("array<BitcoinVietnam\BitcoinVietnam\Response\Account\GetAccount\Account\Balance>")
     * @Serializer\SerializedName("balances")
     */
    private $balances = [];

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->verified;
    }

    /**
     * @return bool
     */
    public function isResidenceVerified()
    {
        return $this->residenceVerified;
    }

    /**
     * @return bool
     */
    public function isVip()
    {
        return $this->vip;
    }

    /**
     * @return float
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * @return float
     */
    public function getVolumeUsed()
    {
        return $this->volumeUsed;
    }

    /**
     * @return float
     */
    public function getVolumeLeft()
    {
        return $this->volumeLeft;
    }

    /**
     * @return Tier
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * @return Balance[]
     */
    public function getBalances()
    {
        return $this->balances;
    }
}
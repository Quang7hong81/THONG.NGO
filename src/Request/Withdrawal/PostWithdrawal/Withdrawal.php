<?php
/**
 * Copyright (c) 2018 Bitcoin Viet Nam Co., Ltd.
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

/**
 * Created by PhpStorm.
 * User: Thong Ngo
 * Date: 04.02.18
 * Time: 14:36
 */

namespace BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal;

use BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal\Withdrawal\Payout;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Withdrawal
 * @package BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal
 */
class Withdrawal
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("currency")
     */
    private $currency;

    /**
     * @var Payout
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal\Withdrawal\Payout")
     * @Serializer\SerializedName("payout")
     */
    private $payout;

    /**
     * Withdrawal constructor.
     */
    public function __construct()
    {
        $this->payout = new Payout();
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Withdrawal
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Withdrawal
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return Payout
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * @param Payout $payout
     * @return Withdrawal
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;
        return $this;
    }
}

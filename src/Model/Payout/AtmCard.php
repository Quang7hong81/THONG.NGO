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
 * User: alexwinter
 * Date: 23.02.18
 * Time: 10:58
 */

namespace BitcoinVietnam\BitcoinVietnam\Model\Payout;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class AtmCard
 * @package BitcoinVietnam\BitcoinVietnam\Model\Payout
 */
final class AtmCard extends BasePayout
{
    /**
     * Name of the bank (e.g. "Eximbank", "Vietcombank", "VPBank")
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bankName")
     */
    protected $bankName;

    /**
     * Account holder name
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountHolder")
     */
    protected $accountHolder;

    /**
     * ATM card number
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cardNumber")
     */
    protected $cardNumber;

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return AtmCard
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * @param string $accountHolder
     * @return AtmCard
     */
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return AtmCard
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }
}
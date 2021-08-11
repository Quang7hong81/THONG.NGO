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

namespace BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Bank
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Payout
 */
final class Bank extends ContactablePayout implements PayoutInterface
{
    /**
     * Bank name
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bankName")
     */
    protected $bankName;

    /**
     * Bank branch
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bankBranch")
     */
    protected $bankBranch;

    /**
     * Number of bank account
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountNumber")
     */
    protected $accountNumber;

    /**
     * Holder of bank account
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("accountHolder")
     */
    protected $accountHolder;

    /**
     * Swift
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("swift")
     */
    protected $swift;

    /**
     * @return string
     */
    public function getPayoutDataSetter()
    {
        return 'setBank';
    }

    /**
     * @return string
     */
    public function getBankName()
    {
        return $this->bankName;
    }

    /**
     * @param string $bankName
     * @return Bank
     */
    public function setBankName($bankName)
    {
        $this->bankName = $bankName;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankBranch()
    {
        return $this->bankBranch;
    }

    /**
     * @param string $bankBranch
     * @return Bank
     */
    public function setBankBranch($bankBranch)
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * @param string $accountNumber
     * @return Bank
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
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
     * @return Bank
     */
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;
        return $this;
    }

    /**
     * @return string
     */
    public function getSwift()
    {
        return $this->swift;
    }

    /**
     * @param string $swift
     * @return Bank
     */
    public function setSwift($swift)
    {
        $this->swift = $swift;
        return $this;
    }
}
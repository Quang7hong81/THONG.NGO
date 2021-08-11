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
 * Class CashToId
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Payout
 */
final class CashToId extends ContactablePayout implements PayoutInterface
{
    /**
     * Name of recipient
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recipientName")
     */
    protected $recipientName;

    /**
     * ID/passport number of recipient
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recipientId")
     */
    protected $recipientId;

    /**
     * Date of ID/passport issue
     *
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'Y-m-d'>")
     * @Serializer\SerializedName("recipientIdDateOfIssue")
     */
    protected $recipientIdDateOfIssue;

    /**
     * ID/passport place of issue
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("recipientIdPlaceOfIssue")
     */
    protected $recipientIdPlaceOfIssue;

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
     * Bank branch
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("bankLocation")
     */
    protected $bankLocation;

    /**
     * @return string
     */
    public function getPayoutDataSetter()
    {
        return 'setCashToId';
    }

    /**
     * @return string
     */
    public function getRecipientName()
    {
        return $this->recipientName;
    }

    /**
     * @param string $recipientName
     * @return CashToId
     */
    public function setRecipientName($recipientName)
    {
        $this->recipientName = $recipientName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipientId;
    }

    /**
     * @param string $recipientId
     * @return CashToId
     */
    public function setRecipientId($recipientId)
    {
        $this->recipientId = $recipientId;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecipientIdDateOfIssue()
    {
        return $this->recipientIdDateOfIssue;
    }

    /**
     * @param \DateTime $recipientIdDateOfIssue
     * @return CashToId
     */
    public function setRecipientIdDateOfIssue($recipientIdDateOfIssue)
    {
        $this->recipientIdDateOfIssue = $recipientIdDateOfIssue;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecipientIdPlaceOfIssue()
    {
        return $this->recipientIdPlaceOfIssue;
    }

    /**
     * @param string $recipientIdPlaceOfIssue
     * @return CashToId
     */
    public function setRecipientIdPlaceOfIssue($recipientIdPlaceOfIssue)
    {
        $this->recipientIdPlaceOfIssue = $recipientIdPlaceOfIssue;
        return $this;
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
     * @return CashToId
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
     * @return CashToId
     */
    public function setBankBranch($bankBranch)
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @return string
     */
    public function getBankLocation()
    {
        return $this->bankLocation;
    }

    /**
     * @param string $bankLocation
     * @return CashToId
     */
    public function setBankLocation($bankLocation)
    {
        $this->bankLocation = $bankLocation;
        return $this;
    }
}
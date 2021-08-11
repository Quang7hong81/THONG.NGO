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

namespace BitcoinVietnam\BitcoinVietnam\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Order
 * @package BitcoinVietnam\BitcoinVietnam\Model
 */
class Order
{
    /**
     * Order ID
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("id")
     */
    private $id;

    /**
     * Type of order
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     */
    private $type;

    /**
     * Symbol of crypto currency
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("cryptoCurrency")
     */
    private $cryptoCurrency;

    /**
     * Order fees
     *
     * @var Fees
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Fees")
     * @Serializer\SerializedName("fees")
     */
    private $fees;

    /**
     * Exchange rate
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("rate")
     */
    private $rate;

    /**
     * Amount in crypto currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("cryptoAmount")
     */
    private $cryptoAmount;

    /**
     * Amount in fiat currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fiatAmount")
     */
    private $fiatAmount;

    /**
     * Desired amount in fiat currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("desiredFiatAmount")
     */
    private $desiredFiatAmount;

    /**
     * @var Payout
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Payout")
     * @Serializer\SerializedName("payout")
     */
    private $payout;

    /**
     * @var Payment
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Model\Payment")
     * @Serializer\SerializedName("payment")
     */
    private $payment;

    /**
     * Time of order creation
     *
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("createdAt")
     */
    private $created;

    /**
     * Will be true when an unconfirmed transaction has been seen on the blockchain (sell orders)
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("txPending")
     */
    private $txPending = false;

    /**
     * True when paid
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("paid")
     */
    private $paid;

    /**
     * Time of order payment
     *
     * @var \DateTime
     *
     * @Serializer\Type("DateTime")
     * @Serializer\SerializedName("paidAt")
     */
    private $paidAt;

    /**
     * True when open
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("open")
     */
    private $open;

    /**
     * True when cancelled
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cancelled")
     */
    private $cancelled;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getCryptoCurrency()
    {
        return $this->cryptoCurrency;
    }

    /**
     * @return Fees
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return float
     */
    public function getCryptoAmount()
    {
        return $this->cryptoAmount;
    }

    /**
     * @return float
     */
    public function getFiatAmount()
    {
        return $this->fiatAmount;
    }

    /**
     * @return float
     */
    public function getDesiredFiatAmount()
    {
        return $this->desiredFiatAmount;
    }

    /**
     * @return Payout
     */
    public function getPayout()
    {
        return $this->payout;
    }

    /**
     * @return Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return bool
     */
    public function isTxPending()
    {
        return $this->txPending;
    }

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->paid;
    }

    /**
     * @return \DateTime
     */
    public function getPaidAt()
    {
        return $this->paidAt;
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->open;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }
}
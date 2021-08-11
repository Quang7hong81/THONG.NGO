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

namespace BitcoinVietnam\BitcoinVietnam\Request\Order\PatchOrder;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Order
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order\PatchOrder
 */
class Order
{
    /**
     * Payment status
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("paid")
     */
    private $paid;

    /**
     * Order status
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("open")
     */
    private $open;

    /**
     * Cancellation status
     *
     * @var bool
     *
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("cancelled")
     */
    private $cancelled;

    /**
     * Buy or sell rate
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("rate")
     */
    private $rate;

    /**
     * Amount
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("amount")
     */
    private $amount;

    /**
     * @return bool
     */
    public function isPaid()
    {
        return $this->paid;
    }

    /**
     * @param bool $paid
     * @return Order
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOpen()
    {
        return $this->open;
    }

    /**
     * @param bool $open
     * @return Order
     */
    public function setOpen($open)
    {
        $this->open = $open;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param bool $cancelled
     * @return Order
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
        return $this;
    }

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return Order
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
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
     * @return Order
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
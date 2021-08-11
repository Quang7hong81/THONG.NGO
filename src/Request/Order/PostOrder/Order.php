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

namespace BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder;

use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Order
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order
 */
class Order
{
    /**
     * Type (buy or sell)
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
     * Payment amount in crypto currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("cryptoAmount")
     */
    private $cryptoAmount;

    /**
     * Payment amount in fiat currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fiatAmount")
     */
    private $fiatAmount;

    /**
     * Desired payout amount in crypto currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("desiredCryptoAmount")
     */
    private $desiredCryptoAmount;

    /**
     * Desired payout amount in fiat currency
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("desiredFiatAmount")
     */
    private $desiredFiatAmount;

    /**
     * Payment method
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("paymentMethod")
     */
    private $paymentMethod;

    /**
     * @var Payout
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout")
     * @Serializer\SerializedName("payout")
     */
    private $payout;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("serviceProvider")
     */
    private $serviceProvider;

    /**
     * Callback URL
     *
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("callbackUrl")
     */
    private $callbackUrl;

    /**
     * PostOrder constructor.
     */
    public function __construct()
    {
        $this->payout = new Payout();
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return Order
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getCryptoCurrency()
    {
        return $this->cryptoCurrency;
    }

    /**
     * @param string $cryptoCurrency
     * @return Order
     */
    public function setCryptoCurrency($cryptoCurrency)
    {
        $this->cryptoCurrency = $cryptoCurrency;
        return $this;
    }

    /**
     * @return float
     */
    public function getCryptoAmount()
    {
        return $this->cryptoAmount;
    }

    /**
     * @param float $cryptoAmount
     * @return Order
     */
    public function setCryptoAmount($cryptoAmount)
    {
        $this->cryptoAmount = $cryptoAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getFiatAmount()
    {
        return $this->fiatAmount;
    }

    /**
     * @param float $fiatAmount
     * @return Order
     */
    public function setFiatAmount($fiatAmount)
    {
        $this->fiatAmount = $fiatAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDesiredCryptoAmount()
    {
        return $this->desiredCryptoAmount;
    }

    /**
     * @param float $desiredCryptoAmount
     * @return Order
     */
    public function setDesiredCryptoAmount($desiredCryptoAmount)
    {
        $this->desiredCryptoAmount = $desiredCryptoAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getDesiredFiatAmount()
    {
        return $this->desiredFiatAmount;
    }

    /**
     * @param float $desiredFiatAmount
     * @return Order
     */
    public function setDesiredFiatAmount($desiredFiatAmount)
    {
        $this->desiredFiatAmount = $desiredFiatAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param string $paymentMethod
     * @return Order
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
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
     * @return Order
     */
    public function setPayout($payout)
    {
        $this->payout = $payout;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * @param string $serviceProvider
     * @return Order
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
        return $this;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @param string $callbackUrl
     * @return Order
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->callbackUrl = $callbackUrl;
        return $this;
    }
}
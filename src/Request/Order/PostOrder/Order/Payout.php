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

namespace BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order;

use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\AtmCard;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\Bank;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\Crypto;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\CashToId;
use BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\PayoutInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Payout
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder
 */
class Payout
{
    /**
     * @var AtmCard
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\AtmCard")
     * @Serializer\SerializedName("atmCard")
     */
    protected $atmCard;

    /**
     * @var Bank
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\Bank")
     * @Serializer\SerializedName("bank")
     */
    protected $bank;

    /**
     * @var Crypto
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\Crypto")
     * @Serializer\SerializedName("bitcoin")
     */
    protected $crypto;

    /**
     * @var CashToId
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout\CashToId")
     * @Serializer\SerializedName("cashToId")
     */
    protected $cashToId;

    /**
     * @param PayoutInterface $payout
     */
    public function setPayout(PayoutInterface $payout)
    {
        $this->setAtmCard(null);
        $this->setBank(null);
        $this->setCrypto(null);
        $this->setCashToId(null);

        $this->{$payout->getPayoutDataSetter()}($payout);
    }

    /**
     * @return AtmCard
     */
    public function getAtmCard()
    {
        return $this->atmCard;
    }

    /**
     * @param AtmCard $atmCard
     * @return Payout
     */
    public function setAtmCard($atmCard)
    {
        $this->atmCard = $atmCard;
        return $this;
    }

    /**
     * @return Bank
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param Bank $bank
     * @return Payout
     */
    public function setBank($bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @return Crypto
     */
    public function getCrypto()
    {
        return $this->crypto;
    }

    /**
     * @param Crypto $crypto
     * @return Payout
     */
    public function setCrypto($crypto)
    {
        $this->crypto = $crypto;
        return $this;
    }

    /**
     * @return CashToId
     */
    public function getCashToId()
    {
        return $this->cashToId;
    }

    /**
     * @param CashToId $cashToId
     * @return Payout
     */
    public function setCashToId($cashToId)
    {
        $this->cashToId = $cashToId;
        return $this;
    }

    /* DEPRECATED */

    /**
     * @deprecated
     * @return Crypto
     */
    public function getBitcoin()
    {
        return $this->crypto;
    }

    /**
     * @deprecated
     * @param Crypto $bitcoin
     * @return $this
     */
    public function setBitcoin($bitcoin)
    {
        $this->crypto = $bitcoin;
        return $this;
    }
}
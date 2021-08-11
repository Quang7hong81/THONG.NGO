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
 * Class Fees
 * @package BitcoinVietnam\BitcoinVietnam\Model
 */
class Fees
{
    /**
     * Fee rate
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("rate")
     */
    private $rate;

    /**
     * Fixed fee amount
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fixedAmount")
     */
    private $fixed;

    /**
     * Voluntary fee amount
     *
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("voluntaryAmount")
     */
    private $voluntary;

    /**
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     * @return Fees
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
        return $this;
    }

    /**
     * @return float
     */
    public function getFixed()
    {
        return $this->fixed;
    }

    /**
     * @param float $fixed
     * @return Fees
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;
        return $this;
    }

    /**
     * @return float
     */
    public function getVoluntary()
    {
        return $this->voluntary;
    }

    /**
     * @param float $voluntary
     * @return Fees
     */
    public function setVoluntary($voluntary)
    {
        $this->voluntary = $voluntary;
        return $this;
    }
}
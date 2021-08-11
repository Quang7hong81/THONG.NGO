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

namespace BitcoinVietnam\BitcoinVietnam\Response\Prices\GetPrices;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Currency
 *
 * @package BitcoinVietnam\BitcoinVietnam\Response\Prices\GetPrices
 */
class Currency
{
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
     * @Serializer\SerializedName("symbol")
     */
    private $symbol;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("buy")
     */
    private $buy;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("sell")
     */
    private $sell;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fixedFeeBuy")
     */
    private $fixedFeeBuy;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("fixedFeeSell")
     */
    private $fixedFeeSell;

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
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @return float
     */
    public function getBuy()
    {
        return $this->buy;
    }

    /**
     * @return float
     */
    public function getSell()
    {
        return $this->sell;
    }

    /**
     * @return float
     */
    public function getFixedFeeBuy()
    {
        return $this->fixedFeeBuy;
    }

    /**
     * @return float
     */
    public function getFixedFeeSell()
    {
        return $this->fixedFeeSell;
    }
}
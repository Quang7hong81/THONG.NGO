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

/**
 * Class Factory
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order\PostOrder\Order\Payout
 */
class Factory
{
    /**
     * @return AtmCard
     */
    public function atmCard()
    {
        return new AtmCard();
    }

    /**
     * @return Bank
     */
    public function bank()
    {
        return new Bank();
    }

    /**
     * @return Crypto
     */
    public function crypto()
    {
        return new Crypto();
    }

    /**
     * @return CashToId
     */
    public function cashToId()
    {
        return new CashToId();
    }
}
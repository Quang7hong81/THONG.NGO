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

namespace BitcoinVietnam\BitcoinVietnam\Request\Order;

/**
 * Class Factory
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order
 */
class Factory
{
    /**
     * @param string $id
     * @return GetOrder
     */
    public function getOrder($id)
    {
        return new GetOrder((string) $id);
    }

    /**
     * @param bool $open
     * @param bool $cancelled
     * @param string $type
     * @return GetOrders
     */
    public function getOrders($open, $cancelled, $type = null)
    {
        return new GetOrders($open, $cancelled, $type);
    }

    /**
     * @param string $id
     * @return PatchOrder
     */
    public function patchOrder($id)
    {
        return new PatchOrder((string) $id);
    }

    /**
     * @return PostOrder
     */
    public function postOrder()
    {
        return new PostOrder();
    }
}
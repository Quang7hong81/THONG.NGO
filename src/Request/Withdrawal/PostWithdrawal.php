<?php
/**
 * Copyright (c) 2018 Bitcoin Viet Nam Co., Ltd.
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

/**
 * Created by PhpStorm.
 * User: alexwinter
 * Date: 04.02.18
 * Time: 14:25
 */

namespace BitcoinVietnam\BitcoinVietnam\Request\Withdrawal;

use BitcoinVietnam\BitcoinVietnam\Request\RequestInterface;
use BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal\Withdrawal;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class PostWithdrawal
 * @package BitcoinVietnam\BitcoinVietnam\Request\Withdrawal
 */
class PostWithdrawal implements RequestInterface
{
    /**
     * @var Withdrawal
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinVietnam\Request\Withdrawal\PostWithdrawal\Withdrawal")
     * @Serializer\SerializedName("withdrawal")
     */
    private $withdrawal;

    /**
     * PostWithdrawal constructor.
     */
    public function __construct()
    {
        $this->withdrawal = new Withdrawal();
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return '/withdrawal';
    }

    /**
     * @return Withdrawal
     */
    public function getWithdrawal()
    {
        return $this->withdrawal;
    }

    /**
     * @param Withdrawal $withdrawal
     * @return PostWithdrawal
     */
    public function setWithdrawal($withdrawal)
    {
        $this->withdrawal = $withdrawal;
        return $this;
    }
}
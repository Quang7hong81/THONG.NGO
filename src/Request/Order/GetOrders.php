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

use BitcoinVietnam\BitcoinVietnam\Request\RequestInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetOrders
 * @package BitcoinVietnam\BitcoinVietnam\Request\Order
 */
class GetOrders implements RequestInterface
{
    /**
     * @var bool
     *
     * @Serializer\Exclude
     */
    private $open;

    /**
     * @var bool
     *
     * @Serializer\Exclude
     */
    private $cancelled;

    /**
     * @var string
     *
     * @Serializer\Exclude
     */
    private $type;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("limit")
     */
    private $limit;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("offset")
     */
    private $offset;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("sortDirection")
     */
    private $sortDirection;

    /**
     * GetOrders constructor.
     * @param bool $open
     * @param bool $cancelled
     * @param string $type
     */
    public function __construct($open, $cancelled, $type = null)
    {
        $this->open = $open;
        $this->cancelled = $cancelled;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return '/orders?open=' . $this->open . '&cancelled=' . $this->cancelled . ($this->type ? '&type=' . $this->type : '');
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
     * @return GetOrders
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
     * @return GetOrders
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return GetOrders
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     * @return GetOrders
     */
    public function setOffset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

    /**
     * @return string
     */
    public function getSortDirection()
    {
        return $this->sortDirection;
    }

    /**
     * @param string $sortDirection
     * @return GetOrders
     */
    public function setSortDirection($sortDirection)
    {
        $this->sortDirection = $sortDirection;
        return $this;
    }
}
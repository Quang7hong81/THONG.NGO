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

namespace BitcoinVietnam\BitcoinVietnam\Response\Constants\Constraints;

use BitcoinVietnam\BitcoinVietnam\Response\BaseResponse;
use BitcoinVietnam\BitcoinVietnam\Response\Constants\Constraints\GetConstraints\MinVolume;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class GetConstraints
 * @package BitcoinVietnam\BitcoinVietnam\Response\Constants\Constraints
 */
class GetConstraints extends BaseResponse
{
    /**
     * @var MinVolume[]
     *
     * @Serializer\Type("array<string, BitcoinVietnam\BitcoinVietnam\Response\Constants\Constraints\GetConstraints\MinVolume>")
     * @Serializer\SerializedName("minVolumes")
     */
    private $minVolumes = [];

    /**
     * @var string[]
     *
     * @Serializer\Type("array<string>")
     * @Serializer\SerializedName("supportedBanks")
     */
    private $supportedBanks;

    /**
     * @return MinVolume[]
     */
    public function getMinVolumes()
    {
        return $this->minVolumes;
    }

    /**
     * @return \string[]
     */
    public function getSupportedBanks()
    {
        return $this->supportedBanks;
    }
}
<?php

namespace Pyz\Zed\StringReverser\Business\Reverser;

use Generated\Shared\Transfer\StringReverserTransfer;

class StringReverser implements StringReverserInterface
{
    /**
     * @param \Generated\Shared\Transfer\StringReverserTransfer $stringStringReverserTransfer
     *
     * @return \Generated\Shared\Transfer\StringReverserTransfer
     */
    public function reverseString(StringReverserTransfer $stringStringReverserTransfer): StringReverserTransfer
    {
        $reversedString = strrev($stringStringReverserTransfer->getOriginalString());
        $stringStringReverserTransfer->setReversedString($reversedString);

        return $stringStringReverserTransfer;

    }
}

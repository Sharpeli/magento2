<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Model;

use Magento\Sales\Exception\DocumentValidationException;

/**
 * Interface ValidatorInterface
 */
interface ValidatorInterface
{
    /**
     * @param object $entity
     * @return string[]
     * @throws DocumentValidationException
     */
    public function validate($entity);
}

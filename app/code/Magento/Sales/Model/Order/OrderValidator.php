<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Sales\Model\Order;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Exception\DocumentValidationException;

/**
 * Class OrderValidatorRunner
 */
class OrderValidator
{
    /**
     * @var \Magento\Sales\Model\Validator
     */
    private $validator;

    public function __construct(\Magento\Sales\Model\Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * @param OrderInterface $entity
     * @param array $validators
     * @return string[]
     * @throws DocumentValidationException
     */
    public function validate(OrderInterface $entity, array $validators)
    {
        return $this->validator->validate($entity, $validators);
    }
}
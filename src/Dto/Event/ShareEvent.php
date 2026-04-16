<?php
/**
 * User: https://github.com/ldani3l
 * User: Generated based on SignUpEvent structure
 * Date: 16.04.2026
 */

namespace Br33f\Ga4\MeasurementProtocol\Dto\Event;

use Br33f\Ga4\MeasurementProtocol\Dto\Parameter\AbstractParameter;

/**
 * Class ShareEvent
 * @package Br33f\Ga4\MeasurementProtocol\Dto\Event
 *
 * @method string getMethod()
 * @method ShareEvent setMethod(string $method)
 *
 * @method string getContentType()
 * @method ShareEvent setContentType(string $contentType)
 *
 * @method string getItemId()
 * @method ShareEvent setItemId(string $itemId)
 */
class ShareEvent extends AbstractEvent
{
    private $eventName = 'share';

    /**
     * ShareEvent constructor.
     * @param AbstractParameter[] $paramList
     */
    public function __construct(array $paramList = [])
    {
        parent::__construct($this->eventName, $paramList);
    }

    /**
     * @return bool
     */
    public function validate()
    {
        return true;
    }
}

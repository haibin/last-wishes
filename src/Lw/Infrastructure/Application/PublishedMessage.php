<?php

namespace Lw\Infrastructure\Application;

class PublishedMessage
{
    /**
     * @var int
     */
    private $mostRecentPublishedMessageId;

    /**
     * @var int
     */
    private $trackerId;

    /**
     * @var string
     */
    private $typeName;

    /**
     * @param string $aTypeName
     * @param int $aMostRecentPublishedMessageId
     */
    public function __construct($aTypeName, $aMostRecentPublishedMessageId)
    {
        $this->mostRecentPublishedMessageId = $aMostRecentPublishedMessageId;
        $this->typeName = $aTypeName;
    }

    /**
     * @return int
     */
    public function mostRecentPublishedMessageId()
    {
        return $this->mostRecentPublishedMessageId;
    }

    /**
     * @param int $maxId
     */
    public function updateMaxId($maxId)
    {
        $this->mostRecentPublishedMessageId = $maxId;
    }

    /**
     * @return int
     */
    public function trackerId()
    {
        return $this->trackerId;
    }
}

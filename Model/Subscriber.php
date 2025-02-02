<?php
/**
 * Mavenbird Technologies Private Limited
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://mavenbird.com/Mavenbird-Module-License.txt
 *
 * =================================================================
 *
 * @category   Mavenbird
 * @package    Mavenbird_Reindex
 * @author     Mavenbird Team
 * @copyright  Copyright (c) 2018-2024 Mavenbird Technologies Private Limited ( http://mavenbird.com )
 * @license    http://mavenbird.com/Mavenbird-Module-License.txt
 */
namespace Mavenbird\Reindex\Model;

use Mavenbird\Reindex\Api\SubscriberInterface;
use Mavenbird\Reindex\Api\ReindexInterface;

class Subscriber implements SubscriberInterface
{
    /** @var ReindexInterface */
    private $reindexService;

    /**
     * Subscriber constructor.
     * @param ReindexInterface $reindexService
     */
    public function __construct(ReindexInterface $reindexService)
    {
        $this->reindexService = $reindexService;
    }

    /**
     * Process Message
     *
     * @param array $indices
     * @return void
     */
    public function processMessage(array $indices) : void
    {
        $this->reindexService->reindex($indices);
    }
}

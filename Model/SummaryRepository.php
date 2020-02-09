<?php
/**
 * Copyright © 2017 Feedback Company. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Interactivated\TheFeedbackCompany\Model;

use Magento\Backend\Block\Template\Context;
use FeedbackCompany\TheFeedbackCompany\Helper\Reviews as ReviewsHelper;
use Interactivated\TheFeedbackCompany\Api\SummaryRepositoryInterface;
use Magento\Framework\View\Element\Template;

class SummaryRepository extends Template implements SummaryRepositoryInterface
{

    /**
     * @var ReviewsHelper
     */
    public $rev;

    /**
     * Summary constructor.
     * @param Context $context
     * @param ReviewsHelper $revHelper
     * @param array $data
     */
    public function __construct(
        Context $context,
        ReviewsHelper $revHelper,
        array $data = []
    )
    {
        $this->rev = $revHelper;
        parent::__construct($context, $data);
    }

    /**
     * @return mixed
     **/
    public function getFeedbackReview()
    {
        $storeId = $this->_storeManager->getStore()->getId();
        $summaryData = $this->rev->getSummaryData($storeId);
        $value = [
            'status' => $summaryData['status'],
            'type' => $summaryData['type'],
            'name' => $summaryData['name'],
            'link' => $summaryData['link'],
            'total_reviews' => $summaryData['total_reviews'],
            'score' => $summaryData['score'],
            'score_max' => $summaryData['score_max'],
            'percentage' => $summaryData['percentage'],
        ];
        return json_encode($value);
    }
}

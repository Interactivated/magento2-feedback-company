<?php
namespace Interactivated\TheFeedbackCompany\Api;

/**
 * @api
 */

interface  SummaryRepositoryInterface
{
    /**
     * @return string[]
     **/
    public function getFeedbackReview();
}

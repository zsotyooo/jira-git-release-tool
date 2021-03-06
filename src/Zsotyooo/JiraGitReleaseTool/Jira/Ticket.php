<?php

namespace Zsotyooo\JiraGitReleaseTool\Jira;

use Zsotyooo\JiraGitReleaseTool\Config\Config as AppConfig;
use Zsotyooo\JiraGitReleaseTool\Jira\Api\TicketFetcher as JiraTicketFetcher;

/**
 * Ticket entity
 */
class Ticket
{
    private $ticketFetcher;

    private $data;

    private $config;
    
    public function __construct($ticket, $config, $ticketFetcher)
    {
        $this->config = $config;
        $this->ticketFetcher = $ticketFetcher;
        $this->load($ticket);
    }

    /**
     * fetch ticket info
     * 
     * @param  string $ticket
     * @return $this
     */
    public function load($ticket)
    {
        $this->data = $this->ticketFetcher->getData($ticket);
        return $this;
    }

    /**
     * get ticket data
     * 
     * @return Zsotyooo\JiraGitReleaseTool\Jira\TicketData
     */
    public function getData()
    {
        return $this->data;
    }
}
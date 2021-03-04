<?php

/**
 * Renders a list of the newest members
 */
class NewMembersModule extends Gdn_Module
{

    /**
     * WhosOnlineModule constructor.
     *
     * @param string $sender
     */
    public function __construct($sender = '')
    {
        parent::__construct($sender);
        $this->_ApplicationFolder = 'plugins/NewMembers';
    }

    /**
     *
     */
    public function getData()
    {
        $this->setData('NewMembers', ['SiCo' => ['id' => 2]]);
    }

    /**
     * @return string
     */
    public function assetTarget() {
        return 'Panel';
    }

    /**
     * @return string
     */
    public function toString() {
        if (!$this->data('NewMembers')) {
            $this->getData();
        }

        return parent::toString();
    }
}
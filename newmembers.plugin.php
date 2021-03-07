<?php

class NewMembersPlugin extends Gdn_Plugin {

    /**
     * Called on plugin activation
     */
    public function setup()
    {}

    /**
     * Add module to specified pages
     *
     * @param Gdn_Controller $sender Sending controller instance.
     */
    public function base_render_before($sender)
    {
        //$configItem = c('WhosOnline.Location.Show', 'every');
        $controller = $sender->ControllerName;
        //$session = Gdn::session();

        /*// Check if it's visible to users
        if (c('WhosOnline.Hide', true) && !$session->isValid()) {
            return;
        }*/

        $showOnController = [
            'discussionscontroller',
            'categoriescontroller'
        ];

        // Include the module
        if (inArrayI($controller, $showOnController)) {
            $sender->addModule('NewMembersModule');
        }

        // Do we actually need CSS if it can follow the panel styles
        //$sender->addCssFile('newmembers.css', 'plugins/NewMembers');
    }
}
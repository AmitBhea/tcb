<?php

/*
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement ("MSA"), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright  2004-2013 SugarCRM Inc.  All rights reserved.
 */

$viewdefs['Home']['base']['layout']['about'] = array(
    'type' => 'simple',
    'name' => 'about',
    'css_class' => 'row-fluid',
    'components' => array(
        array(
            'layout' => array(
                'type' => 'simple',
                'css_class' => 'main-pane span12',
                'components' => array(
                    array(
                        'view' => 'about-headerpane',
                    ),
                    array(
                        'layout' => array(
                            'type' => 'fluid',
                            'components' => array(
                                array(
                                    'layout' => array(
                                        'type' => 'simple',
                                        'span' => 12,
                                        'components' => array(
                                            array(
                                                'view' => 'about-copyright',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                    array(
                        'layout' => array(
                            'type' => 'fluid',
                            'components' => array(
                                array(
                                    'layout' => array(
                                        'type' => 'simple',
                                        'span' => 4,
                                        'components' => array(
                                            array(
                                                'view' => 'about-resources',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'layout' => array(
                                        'type' => 'simple',
                                        'span' => 4,
                                        'components' => array(
                                            array(
                                                'view' => 'about-source-code',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'layout' => array(
                                        'type' => 'simple',
                                        'span' => 4,
                                        'components' => array(
                                            array(
                                                'view' => 'about-language-packs',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
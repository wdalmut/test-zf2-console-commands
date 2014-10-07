<?php
return array(
   'controllers' => array(
        'invokables' => array(
            'ModuleName\Controller\MyFeature' => 'ModuleName\Controller\MyFeatureController'
        )
   ),
   'console' => array(
        'router' => array(
            'routes' => array(
                'my-route-name' => array(
                    'options' => array(
                        'route'    => 'my-custom-command',
                        'defaults' => array(
                            'controller' => 'ModuleName\Controller\MyFeature',
                            'action'     => 'hello'
                        )
                    )
                ),
            )
        )
    ),
);

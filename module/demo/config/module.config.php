<?php
return array(
    'router' => array(
        'routes' => array(
            'demo.rest.user' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user[/:user_id]',
                    'defaults' => array(
                        'controller' => 'demo\\V1\\Rest\\User\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'demo.rest.user',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'demo\\V1\\Rest\\User\\UserResource' => 'demo\\V1\\Rest\\User\\UserResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'demo\\V1\\Rest\\User\\Controller' => array(
            'listener' => 'demo\\V1\\Rest\\User\\UserResource',
            'route_name' => 'demo.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'demo\\V1\\Rest\\User\\UserEntity',
            'collection_class' => 'demo\\V1\\Rest\\User\\UserCollection',
            'service_name' => 'user',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'demo\\V1\\Rest\\User\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'demo\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.demo.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'demo\\V1\\Rest\\User\\Controller' => array(
                0 => 'application/vnd.demo.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'demo\\V1\\Rest\\User\\UserEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'demo.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'demo\\V1\\Rest\\User\\UserCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'demo.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
        ),
    ),
);

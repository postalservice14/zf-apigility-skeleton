<?php
namespace demo\V1\Rest\User;

class UserResourceFactory
{
    public function __invoke($services)
    {
        return new UserResource();
    }
}

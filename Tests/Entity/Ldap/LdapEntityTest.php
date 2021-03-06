<?php

namespace CarnegieLearning\LdapOrmBundle\Tests\Entity\Ldap;

use CarnegieLearning\LdapOrmBundle\Entity\Ldap\LdapEntity;
use CarnegieLearning\LdapOrmBundle\Entity\Ldap\OrganizationalUnit;

class LdapEntityTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructor()
    {
        // $ou Extends LdapEntity
        $ou = new LdapEntity();

        $this->assertEquals('ldapEntity', $ou->getObjectClass());
    }
}

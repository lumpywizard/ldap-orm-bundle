# UcsfLdapOrm

A Symfony bundle that provides ORM over LDAP.

This code was originally based upon <a href="https://github.com/matgou">Mathieu Goulin</a>'s <a href="https://github.com/matgou/GorgLdapOrmBundle">GorgLdapOrmBundle</a>. We are forever indebted to him for providing an excellent base for the work we've continue at UCSF Identity & Access Management. Originally we forked GorgLdapOrmBundle, but as our development continued to diverge and build new functionality we came to the point where it was time to strike out on our own. The UcsfLdapOrm repo was created as that fresh start.

What's changed and/or been added so far:

* Added the <code>LdapEntity</code> class. This is a Symfony entity which represents the <code>top</code> LDAP object class.
* Added added many subclasses of <code>LdapEntity</code> to describe the object classes from <code>top</code> to  <code>InetOrgPerson</code>.
* Added <code>Repository::filterByComplex()</code> which gives the entity manager/repository the ability to filter with custom constructed, complex boolean logic.
* Removed the dependency upon <a href="https://github.com/r1pp3rj4ck">r1pp3rj4ck</a>'s <a href="https://github.com/r1pp3rj4ck/TwigstringBundle">TwigstringBundle</a> and replaced it with Symfony 2.6+'s ability to use Twig's new-ish string-as-template functionality.

## Installation

* Add to composer.json
 * <code>"ucsf/ldaporm": "dev-master"</code>
* Add the bundle to AppKernel.php
 * <code>new Ucsf\LdapOrmBundle\UcsfLdapOrmBundle()</code>
* Install using composer
 * <code>$ composer update ucsf/ldaporm-bundle</code>

## Documentation

* Configure an LDAP service



## To do

1. ~~Remove need for generic LDAP config~~
2. Configuration documentation
3. Development example
4. Rewrite test suite
5. Remove deprecated search results iterator
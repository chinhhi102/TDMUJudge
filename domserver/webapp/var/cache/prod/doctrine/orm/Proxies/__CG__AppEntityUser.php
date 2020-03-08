<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userid', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_login', '' . "\0" . 'App\\Entity\\User' . "\0" . 'first_login', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_ip_address', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ipAddress', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'App\\Entity\\User' . "\0" . 'teamid', '' . "\0" . 'App\\Entity\\User' . "\0" . 'team', '' . "\0" . 'App\\Entity\\User' . "\0" . 'user_roles'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'userid', '' . "\0" . 'App\\Entity\\User' . "\0" . 'username', '' . "\0" . 'App\\Entity\\User' . "\0" . 'name', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_login', '' . "\0" . 'App\\Entity\\User' . "\0" . 'first_login', '' . "\0" . 'App\\Entity\\User' . "\0" . 'last_ip_address', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'plainPassword', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ipAddress', '' . "\0" . 'App\\Entity\\User' . "\0" . 'enabled', '' . "\0" . 'App\\Entity\\User' . "\0" . 'teamid', '' . "\0" . 'App\\Entity\\User' . "\0" . 'team', '' . "\0" . 'App\\Entity\\User' . "\0" . 'user_roles'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserid()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getUserid();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserid', []);

        return parent::getUserid();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin($lastLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$lastLogin]);

        return parent::setLastLogin($lastLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLoginObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLoginObject', []);

        return parent::getLastLoginObject();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstLogin($firstLogin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstLogin', [$firstLogin]);

        return parent::setFirstLogin($firstLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstLogin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstLogin', []);

        return parent::getFirstLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstLoginObject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstLoginObject', []);

        return parent::getFirstLoginObject();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastIpAddress($lastIpAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastIpAddress', [$lastIpAddress]);

        return parent::setLastIpAddress($lastIpAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastIpAddress', []);

        return parent::getLastIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword($plainPassword): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$plainPassword]);

        return parent::setPlainPassword($plainPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpAddress($ipAddress)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpAddress', [$ipAddress]);

        return parent::setIpAddress($ipAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpAddress', []);

        return parent::getIpAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeamid($teamid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeamid', [$teamid]);

        return parent::setTeamid($teamid);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeamid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeamid', []);

        return parent::getTeamid();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeam(\App\Entity\Team $team = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeam', [$team]);

        return parent::setTeam($team);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeam', []);

        return parent::getTeam();
    }

    /**
     * {@inheritDoc}
     */
    public function getTeamName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeamName', []);

        return parent::getTeamName();
    }

    /**
     * {@inheritDoc}
     */
    public function addUserRole(\App\Entity\Role $role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUserRole', [$role]);

        return parent::addUserRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUserRole(\App\Entity\Role $role)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUserRole', [$role]);

        return parent::removeUserRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserRoles', []);

        return parent::getUserRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoleList(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoleList', []);

        return parent::getRoleList();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

}

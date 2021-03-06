<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Proveedor extends \App\Entity\Proveedor implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'nitproveedor', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'nombreproveedor', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'direccion', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'paginaweb', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'estado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'creado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'actualizado'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'nitproveedor', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'nombreproveedor', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'direccion', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'paginaweb', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'estado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'creado', '' . "\0" . 'App\\Entity\\Proveedor' . "\0" . 'actualizado'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Proveedor $proxy) {
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
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getNitproveedor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNitproveedor', []);

        return parent::getNitproveedor();
    }

    /**
     * {@inheritDoc}
     */
    public function setNitproveedor(string $nitproveedor): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNitproveedor', [$nitproveedor]);

        return parent::setNitproveedor($nitproveedor);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombreproveedor(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombreproveedor', []);

        return parent::getNombreproveedor();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombreproveedor(string $nombreproveedor): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombreproveedor', [$nombreproveedor]);

        return parent::setNombreproveedor($nombreproveedor);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion(string $direccion): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$direccion]);

        return parent::setDireccion($direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono(int $telefono): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaginaweb(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaginaweb', []);

        return parent::getPaginaweb();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaginaweb(string $paginaweb): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaginaweb', [$paginaweb]);

        return parent::setPaginaweb($paginaweb);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', []);

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado(int $estado): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', [$estado]);

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreado(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreado', []);

        return parent::getCreado();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreado(\DateTimeInterface $creado): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreado', [$creado]);

        return parent::setCreado($creado);
    }

    /**
     * {@inheritDoc}
     */
    public function getActualizado(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActualizado', []);

        return parent::getActualizado();
    }

    /**
     * {@inheritDoc}
     */
    public function setActualizado(\DateTimeInterface $actualizado): \App\Entity\Proveedor
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActualizado', [$actualizado]);

        return parent::setActualizado($actualizado);
    }

}

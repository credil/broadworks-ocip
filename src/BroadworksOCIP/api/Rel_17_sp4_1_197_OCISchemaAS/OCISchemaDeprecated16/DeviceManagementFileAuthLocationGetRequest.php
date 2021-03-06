<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryAccessType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceAccessProtocol16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigestHa1Complement;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SignedPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RealmName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Md5Hash;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the address and credentials of the File Repository hosting the requested access device file. Also get the file name and path on the File Repository. The response is either a DeviceManagementFileAuthLocationGetResponse or an ErrorResponse.
 */
class DeviceManagementFileAuthLocationGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\DeviceManagementFileAuthLocationGetResponse';
    public    $elementName = 'DeviceManagementFileAuthLocationGetRequest';
    protected $deviceAccessProtocol;
    protected $deviceAccessMethod;
    protected $deviceAccessURI;
    protected $accessDeviceUserName;
    protected $accessDeviceUserPassword;
    protected $signedPassword;
    protected $macAddress;
    protected $realmName;
    protected $digestHa1Complement;
    protected $digestResponse;

    public function __construct(
         $deviceAccessProtocol = '',
         $deviceAccessMethod = '',
         $deviceAccessURI = '',
         $accessDeviceUserName = null,
         $accessDeviceUserPassword = null,
         $signedPassword = null,
         $macAddress = null,
         $realmName = null,
         $digestHa1Complement = null,
         $digestResponse = null
    ) {
        $this->setDeviceAccessProtocol($deviceAccessProtocol);
        $this->setDeviceAccessMethod($deviceAccessMethod);
        $this->setDeviceAccessURI($deviceAccessURI);
        $this->setAccessDeviceUserName($accessDeviceUserName);
        $this->setAccessDeviceUserPassword($accessDeviceUserPassword);
        $this->setSignedPassword($signedPassword);
        $this->setMacAddress($macAddress);
        $this->setRealmName($realmName);
        $this->setDigestHa1Complement($digestHa1Complement);
        $this->setDigestResponse($digestResponse);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\DeviceManagementFileAuthLocationGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceAccessProtocol($deviceAccessProtocol = null)
    {
        $this->deviceAccessProtocol = ($deviceAccessProtocol InstanceOf DeviceAccessProtocol16)
             ? $deviceAccessProtocol
             : new DeviceAccessProtocol16($deviceAccessProtocol);
        $this->deviceAccessProtocol->setElementName('deviceAccessProtocol');
        return $this;
    }

    /**
     * 
     * @return DeviceAccessProtocol16 $deviceAccessProtocol
     */
    public function getDeviceAccessProtocol()
    {
        return ($this->deviceAccessProtocol)
            ? $this->deviceAccessProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceAccessMethod($deviceAccessMethod = null)
    {
        $this->deviceAccessMethod = ($deviceAccessMethod InstanceOf FileRepositoryAccessType)
             ? $deviceAccessMethod
             : new FileRepositoryAccessType($deviceAccessMethod);
        $this->deviceAccessMethod->setElementName('deviceAccessMethod');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryAccessType $deviceAccessMethod
     */
    public function getDeviceAccessMethod()
    {
        return ($this->deviceAccessMethod)
            ? $this->deviceAccessMethod->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceAccessURI($deviceAccessURI = null)
    {
        $this->deviceAccessURI = ($deviceAccessURI InstanceOf DeviceManagementAccessURI)
             ? $deviceAccessURI
             : new DeviceManagementAccessURI($deviceAccessURI);
        $this->deviceAccessURI->setElementName('deviceAccessURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $deviceAccessURI
     */
    public function getDeviceAccessURI()
    {
        return ($this->deviceAccessURI)
            ? $this->deviceAccessURI->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceUserName($accessDeviceUserName = null)
    {
        $this->accessDeviceUserName = ($accessDeviceUserName InstanceOf UserId)
             ? $accessDeviceUserName
             : new UserId($accessDeviceUserName);
        $this->accessDeviceUserName->setElementName('accessDeviceUserName');
        return $this;
    }

    /**
     * 
     * @return UserId $accessDeviceUserName
     */
    public function getAccessDeviceUserName()
    {
        return ($this->accessDeviceUserName)
            ? $this->accessDeviceUserName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceUserPassword($accessDeviceUserPassword = null)
    {
        $this->accessDeviceUserPassword = ($accessDeviceUserPassword InstanceOf Password)
             ? $accessDeviceUserPassword
             : new Password($accessDeviceUserPassword);
        $this->accessDeviceUserPassword->setElementName('accessDeviceUserPassword');
        return $this;
    }

    /**
     * 
     * @return Password $accessDeviceUserPassword
     */
    public function getAccessDeviceUserPassword()
    {
        return ($this->accessDeviceUserPassword)
            ? $this->accessDeviceUserPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSignedPassword($signedPassword = null)
    {
        $this->signedPassword = ($signedPassword InstanceOf SignedPassword)
             ? $signedPassword
             : new SignedPassword($signedPassword);
        $this->signedPassword->setElementName('signedPassword');
        return $this;
    }

    /**
     * 
     * @return SignedPassword $signedPassword
     */
    public function getSignedPassword()
    {
        return ($this->signedPassword)
            ? $this->signedPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
        $this->macAddress->setElementName('macAddress');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress $macAddress
     */
    public function getMacAddress()
    {
        return ($this->macAddress)
            ? $this->macAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRealmName($realmName = null)
    {
        $this->realmName = ($realmName InstanceOf RealmName)
             ? $realmName
             : new RealmName($realmName);
        $this->realmName->setElementName('realmName');
        return $this;
    }

    /**
     * 
     * @return RealmName $realmName
     */
    public function getRealmName()
    {
        return ($this->realmName)
            ? $this->realmName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigestHa1Complement($digestHa1Complement = null)
    {
        $this->digestHa1Complement = ($digestHa1Complement InstanceOf DigestHa1Complement)
             ? $digestHa1Complement
             : new DigestHa1Complement($digestHa1Complement);
        $this->digestHa1Complement->setElementName('digestHa1Complement');
        return $this;
    }

    /**
     * 
     * @return DigestHa1Complement $digestHa1Complement
     */
    public function getDigestHa1Complement()
    {
        return ($this->digestHa1Complement)
            ? $this->digestHa1Complement->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDigestResponse($digestResponse = null)
    {
        $this->digestResponse = ($digestResponse InstanceOf Md5Hash)
             ? $digestResponse
             : new Md5Hash($digestResponse);
        $this->digestResponse->setElementName('digestResponse');
        return $this;
    }

    /**
     * 
     * @return Md5Hash $digestResponse
     */
    public function getDigestResponse()
    {
        return ($this->digestResponse)
            ? $this->digestResponse->getElementValue()
            : null;
    }
}

<?php

namespace Spinen\Nable\Ncentral;

use Spinen\Nable\Ncentral\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class NcentralClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\ActiveIssuesList $parameters
     * @return ResultInterface|Type\ActiveIssuesListResponse
     * @throws SoapException
     */
    public function activeIssuesList(\Spinen\Nable\Ncentral\Type\ActiveIssuesList $parameters) : \Spinen\Nable\Ncentral\Type\ActiveIssuesListResponse
    {
        return $this->call('activeIssuesList', $parameters);
    }

    /**
     * @param RequestInterface|Type\CustomerAdd $parameters
     * @return ResultInterface|Type\CustomerAddResponse
     * @throws SoapException
     */
    public function customerAdd(\Spinen\Nable\Ncentral\Type\CustomerAdd $parameters) : \Spinen\Nable\Ncentral\Type\CustomerAddResponse
    {
        return $this->call('customerAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrganizationPropertyList $parameters
     * @return ResultInterface|Type\OrganizationPropertyListResponse
     * @throws SoapException
     */
    public function organizationPropertyList(\Spinen\Nable\Ncentral\Type\OrganizationPropertyList $parameters) : \Spinen\Nable\Ncentral\Type\OrganizationPropertyListResponse
    {
        return $this->call('organizationPropertyList', $parameters);
    }

    /**
     * @param RequestInterface|Type\AccessGroupAdd $parameters
     * @return ResultInterface|Type\AccessGroupAddResponse
     * @throws SoapException
     */
    public function accessGroupAdd(\Spinen\Nable\Ncentral\Type\AccessGroupAdd $parameters) : \Spinen\Nable\Ncentral\Type\AccessGroupAddResponse
    {
        return $this->call('accessGroupAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\LastExportReset $parameters
     * @return ResultInterface|Type\LastExportResetResponse
     * @throws SoapException
     */
    public function lastExportReset(\Spinen\Nable\Ncentral\Type\LastExportReset $parameters) : \Spinen\Nable\Ncentral\Type\LastExportResetResponse
    {
        return $this->call('lastExportReset', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserRoleList $parameters
     * @return ResultInterface|Type\UserRoleListResponse
     * @throws SoapException
     */
    public function userRoleList(\Spinen\Nable\Ncentral\Type\UserRoleList $parameters) : \Spinen\Nable\Ncentral\Type\UserRoleListResponse
    {
        return $this->call('userRoleList', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeviceGetStatus $parameters
     * @return ResultInterface|Type\DeviceGetStatusResponse
     * @throws SoapException
     */
    public function deviceGetStatus(\Spinen\Nable\Ncentral\Type\DeviceGetStatus $parameters) : \Spinen\Nable\Ncentral\Type\DeviceGetStatusResponse
    {
        return $this->call('deviceGetStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\PsaCreateCustomTicket $parameters
     * @return ResultInterface|Type\PsaCreateCustomTicketResponse
     * @throws SoapException
     */
    public function psaCreateCustomTicket(\Spinen\Nable\Ncentral\Type\PsaCreateCustomTicket $parameters) : \Spinen\Nable\Ncentral\Type\PsaCreateCustomTicketResponse
    {
        return $this->call('psaCreateCustomTicket', $parameters);
    }

    /**
     * @param RequestInterface|Type\AccessGroupList $parameters
     * @return ResultInterface|Type\AccessGroupListResponse
     * @throws SoapException
     */
    public function accessGroupList(\Spinen\Nable\Ncentral\Type\AccessGroupList $parameters) : \Spinen\Nable\Ncentral\Type\AccessGroupListResponse
    {
        return $this->call('accessGroupList', $parameters);
    }

    /**
     * @param RequestInterface|Type\SOAdd $parameters
     * @return ResultInterface|Type\SOAddResponse
     * @throws SoapException
     */
    public function sOAdd(\Spinen\Nable\Ncentral\Type\SOAdd $parameters) : \Spinen\Nable\Ncentral\Type\SOAddResponse
    {
        return $this->call('SOAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserRoleAdd $parameters
     * @return ResultInterface|Type\UserRoleAddResponse
     * @throws SoapException
     */
    public function userRoleAdd(\Spinen\Nable\Ncentral\Type\UserRoleAdd $parameters) : \Spinen\Nable\Ncentral\Type\UserRoleAddResponse
    {
        return $this->call('userRoleAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\CustomerDelete $parameters
     * @return ResultInterface|Type\CustomerDeleteResponse
     * @throws SoapException
     */
    public function customerDelete(\Spinen\Nable\Ncentral\Type\CustomerDelete $parameters) : \Spinen\Nable\Ncentral\Type\CustomerDeleteResponse
    {
        return $this->call('customerDelete', $parameters);
    }

    /**
     * @param RequestInterface|Type\OrganizationPropertyModify $parameters
     * @return ResultInterface|Type\OrganizationPropertyModifyResponse
     * @throws SoapException
     */
    public function organizationPropertyModify(\Spinen\Nable\Ncentral\Type\OrganizationPropertyModify $parameters) : \Spinen\Nable\Ncentral\Type\OrganizationPropertyModifyResponse
    {
        return $this->call('organizationPropertyModify', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeviceList $parameters
     * @return ResultInterface|Type\DeviceListResponse
     * @throws SoapException
     */
    public function deviceList(\Spinen\Nable\Ncentral\Type\DeviceList $parameters) : \Spinen\Nable\Ncentral\Type\DeviceListResponse
    {
        return $this->call('deviceList', $parameters);
    }

    /**
     * @param RequestInterface|Type\JobStatusList $parameters
     * @return ResultInterface|Type\JobStatusListResponse
     * @throws SoapException
     */
    public function jobStatusList(\Spinen\Nable\Ncentral\Type\JobStatusList $parameters) : \Spinen\Nable\Ncentral\Type\JobStatusListResponse
    {
        return $this->call('jobStatusList', $parameters);
    }

    /**
     * @param RequestInterface|Type\CustomerModify $parameters
     * @return ResultInterface|Type\CustomerModifyResponse
     * @throws SoapException
     */
    public function customerModify(\Spinen\Nable\Ncentral\Type\CustomerModify $parameters) : \Spinen\Nable\Ncentral\Type\CustomerModifyResponse
    {
        return $this->call('customerModify', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeviceAssetInfoExportDevice $parameters
     * @return ResultInterface|Type\DeviceAssetInfoExportDeviceResponse
     * @throws SoapException
     */
    public function deviceAssetInfoExportDevice(\Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDevice $parameters) : \Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDeviceResponse
    {
        return $this->call('deviceAssetInfoExportDevice', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserRoleGet $parameters
     * @return ResultInterface|Type\UserRoleGetResponse
     * @throws SoapException
     */
    public function userRoleGet(\Spinen\Nable\Ncentral\Type\UserRoleGet $parameters) : \Spinen\Nable\Ncentral\Type\UserRoleGetResponse
    {
        return $this->call('userRoleGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\TaskPauseMonitoring $parameters
     * @return ResultInterface|Type\TaskPauseMonitoringResponse
     * @throws SoapException
     */
    public function taskPauseMonitoring(\Spinen\Nable\Ncentral\Type\TaskPauseMonitoring $parameters) : \Spinen\Nable\Ncentral\Type\TaskPauseMonitoringResponse
    {
        return $this->call('taskPauseMonitoring', $parameters);
    }

    /**
     * @param RequestInterface|Type\PsaCredentialsValidate $parameters
     * @return ResultInterface|Type\PsaCredentialsValidateResponse
     * @throws SoapException
     */
    public function psaCredentialsValidate(\Spinen\Nable\Ncentral\Type\PsaCredentialsValidate $parameters) : \Spinen\Nable\Ncentral\Type\PsaCredentialsValidateResponse
    {
        return $this->call('psaCredentialsValidate', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeviceGet $parameters
     * @return ResultInterface|Type\DeviceGetResponse
     * @throws SoapException
     */
    public function deviceGet(\Spinen\Nable\Ncentral\Type\DeviceGet $parameters) : \Spinen\Nable\Ncentral\Type\DeviceGetResponse
    {
        return $this->call('deviceGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\PsaGetCustomTicket $parameters
     * @return ResultInterface|Type\PsaGetCustomTicketResponse
     * @throws SoapException
     */
    public function psaGetCustomTicket(\Spinen\Nable\Ncentral\Type\PsaGetCustomTicket $parameters) : \Spinen\Nable\Ncentral\Type\PsaGetCustomTicketResponse
    {
        return $this->call('psaGetCustomTicket', $parameters);
    }

    /**
     * @param RequestInterface|Type\VersionInfoGet $parameters
     * @return ResultInterface|Type\VersionInfoGetResponse
     * @throws SoapException
     */
    public function versionInfoGet(\Spinen\Nable\Ncentral\Type\VersionInfoGet $parameters) : \Spinen\Nable\Ncentral\Type\VersionInfoGetResponse
    {
        return $this->call('versionInfoGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\AcknowledgeNotification $parameters
     * @return ResultInterface|Type\AcknowledgeNotificationResponse
     * @throws SoapException
     */
    public function acknowledgeNotification(\Spinen\Nable\Ncentral\Type\AcknowledgeNotification $parameters) : \Spinen\Nable\Ncentral\Type\AcknowledgeNotificationResponse
    {
        return $this->call('acknowledgeNotification', $parameters);
    }

    /**
     * @param RequestInterface|Type\UserAdd $parameters
     * @return ResultInterface|Type\UserAddResponse
     * @throws SoapException
     */
    public function userAdd(\Spinen\Nable\Ncentral\Type\UserAdd $parameters) : \Spinen\Nable\Ncentral\Type\UserAddResponse
    {
        return $this->call('userAdd', $parameters);
    }

    /**
     * @param RequestInterface|Type\DevicePropertyModify $parameters
     * @return ResultInterface|Type\DevicePropertyModifyResponse
     * @throws SoapException
     */
    public function devicePropertyModify(\Spinen\Nable\Ncentral\Type\DevicePropertyModify $parameters) : \Spinen\Nable\Ncentral\Type\DevicePropertyModifyResponse
    {
        return $this->call('devicePropertyModify', $parameters);
    }

    /**
     * @param RequestInterface|Type\PsaReopenCustomTicket $parameters
     * @return ResultInterface|Type\PsaReopenCustomTicketResponse
     * @throws SoapException
     */
    public function psaReopenCustomTicket(\Spinen\Nable\Ncentral\Type\PsaReopenCustomTicket $parameters) : \Spinen\Nable\Ncentral\Type\PsaReopenCustomTicketResponse
    {
        return $this->call('psaReopenCustomTicket', $parameters);
    }

    /**
     * @param RequestInterface|Type\TaskResumeMonitoring $parameters
     * @return ResultInterface|Type\TaskResumeMonitoringResponse
     * @throws SoapException
     */
    public function taskResumeMonitoring(\Spinen\Nable\Ncentral\Type\TaskResumeMonitoring $parameters) : \Spinen\Nable\Ncentral\Type\TaskResumeMonitoringResponse
    {
        return $this->call('taskResumeMonitoring', $parameters);
    }

    /**
     * @param RequestInterface|Type\CustomerListChildren $parameters
     * @return ResultInterface|Type\CustomerListChildrenResponse
     * @throws SoapException
     */
    public function customerListChildren(\Spinen\Nable\Ncentral\Type\CustomerListChildren $parameters) : \Spinen\Nable\Ncentral\Type\CustomerListChildrenResponse
    {
        return $this->call('customerListChildren', $parameters);
    }

    /**
     * @param RequestInterface|Type\AccessGroupGet $parameters
     * @return ResultInterface|Type\AccessGroupGetResponse
     * @throws SoapException
     */
    public function accessGroupGet(\Spinen\Nable\Ncentral\Type\AccessGroupGet $parameters) : \Spinen\Nable\Ncentral\Type\AccessGroupGetResponse
    {
        return $this->call('accessGroupGet', $parameters);
    }

    /**
     * @param RequestInterface|Type\DeviceAssetInfoExportDeviceWithSettings $parameters
     * @return ResultInterface|Type\DeviceAssetInfoExportDeviceWithSettingsResponse
     * @throws SoapException
     */
    public function deviceAssetInfoExportDeviceWithSettings(\Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDeviceWithSettings $parameters) : \Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDeviceWithSettingsResponse
    {
        return $this->call('deviceAssetInfoExportDeviceWithSettings', $parameters);
    }

    /**
     * @param RequestInterface|Type\DevicePropertyList $parameters
     * @return ResultInterface|Type\DevicePropertyListResponse
     * @throws SoapException
     */
    public function devicePropertyList(\Spinen\Nable\Ncentral\Type\DevicePropertyList $parameters) : \Spinen\Nable\Ncentral\Type\DevicePropertyListResponse
    {
        return $this->call('devicePropertyList', $parameters);
    }

    /**
     * @param RequestInterface|Type\CustomerList $parameters
     * @return ResultInterface|Type\CustomerListResponse
     * @throws SoapException
     */
    public function customerList(\Spinen\Nable\Ncentral\Type\CustomerList $parameters) : \Spinen\Nable\Ncentral\Type\CustomerListResponse
    {
        return $this->call('customerList', $parameters);
    }

    /**
     * @param RequestInterface|Type\PsaResolveCustomTicket $parameters
     * @return ResultInterface|Type\PsaResolveCustomTicketResponse
     * @throws SoapException
     */
    public function psaResolveCustomTicket(\Spinen\Nable\Ncentral\Type\PsaResolveCustomTicket $parameters) : \Spinen\Nable\Ncentral\Type\PsaResolveCustomTicketResponse
    {
        return $this->call('psaResolveCustomTicket', $parameters);
    }


}


<?php

namespace Spinen\Nable\Ncentral;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Spinen\Nable\Ncentral\Type\AccessGroupAdd;
use Spinen\Nable\Ncentral\Type\AccessGroupAddResponse;
use Spinen\Nable\Ncentral\Type\AccessGroupGet;
use Spinen\Nable\Ncentral\Type\AccessGroupGetResponse;
use Spinen\Nable\Ncentral\Type\AccessGroupList;
use Spinen\Nable\Ncentral\Type\AccessGroupListResponse;
use Spinen\Nable\Ncentral\Type\AcknowledgeNotification;
use Spinen\Nable\Ncentral\Type\AcknowledgeNotificationResponse;
use Spinen\Nable\Ncentral\Type\ActiveIssuesList;
use Spinen\Nable\Ncentral\Type\ActiveIssuesListResponse;
use Spinen\Nable\Ncentral\Type\CustomerAdd;
use Spinen\Nable\Ncentral\Type\CustomerAddResponse;
use Spinen\Nable\Ncentral\Type\CustomerDelete;
use Spinen\Nable\Ncentral\Type\CustomerDeleteResponse;
use Spinen\Nable\Ncentral\Type\CustomerList;
use Spinen\Nable\Ncentral\Type\CustomerListChildren;
use Spinen\Nable\Ncentral\Type\CustomerListChildrenResponse;
use Spinen\Nable\Ncentral\Type\CustomerListResponse;
use Spinen\Nable\Ncentral\Type\CustomerModify;
use Spinen\Nable\Ncentral\Type\CustomerModifyResponse;
use Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDevice;
use Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDeviceResponse;
use Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDeviceWithSettings;
use Spinen\Nable\Ncentral\Type\DeviceAssetInfoExportDeviceWithSettingsResponse;
use Spinen\Nable\Ncentral\Type\DeviceGet;
use Spinen\Nable\Ncentral\Type\DeviceGetResponse;
use Spinen\Nable\Ncentral\Type\DeviceGetStatus;
use Spinen\Nable\Ncentral\Type\DeviceGetStatusResponse;
use Spinen\Nable\Ncentral\Type\DeviceList;
use Spinen\Nable\Ncentral\Type\DeviceListResponse;
use Spinen\Nable\Ncentral\Type\DevicePropertyList;
use Spinen\Nable\Ncentral\Type\DevicePropertyListResponse;
use Spinen\Nable\Ncentral\Type\DevicePropertyModify;
use Spinen\Nable\Ncentral\Type\DevicePropertyModifyResponse;
use Spinen\Nable\Ncentral\Type\JobStatusList;
use Spinen\Nable\Ncentral\Type\JobStatusListResponse;
use Spinen\Nable\Ncentral\Type\LastExportReset;
use Spinen\Nable\Ncentral\Type\LastExportResetResponse;
use Spinen\Nable\Ncentral\Type\OrganizationPropertyList;
use Spinen\Nable\Ncentral\Type\OrganizationPropertyListResponse;
use Spinen\Nable\Ncentral\Type\OrganizationPropertyModify;
use Spinen\Nable\Ncentral\Type\OrganizationPropertyModifyResponse;
use Spinen\Nable\Ncentral\Type\PsaCreateCustomTicket;
use Spinen\Nable\Ncentral\Type\PsaCreateCustomTicketResponse;
use Spinen\Nable\Ncentral\Type\PsaCredentialsValidate;
use Spinen\Nable\Ncentral\Type\PsaCredentialsValidateResponse;
use Spinen\Nable\Ncentral\Type\PsaGetCustomTicket;
use Spinen\Nable\Ncentral\Type\PsaGetCustomTicketResponse;
use Spinen\Nable\Ncentral\Type\PsaReopenCustomTicket;
use Spinen\Nable\Ncentral\Type\PsaReopenCustomTicketResponse;
use Spinen\Nable\Ncentral\Type\PsaResolveCustomTicket;
use Spinen\Nable\Ncentral\Type\PsaResolveCustomTicketResponse;
use Spinen\Nable\Ncentral\Type\SOAdd;
use Spinen\Nable\Ncentral\Type\SOAddResponse;
use Spinen\Nable\Ncentral\Type\TaskPauseMonitoring;
use Spinen\Nable\Ncentral\Type\TaskPauseMonitoringResponse;
use Spinen\Nable\Ncentral\Type\TaskResumeMonitoring;
use Spinen\Nable\Ncentral\Type\TaskResumeMonitoringResponse;
use Spinen\Nable\Ncentral\Type\UserAdd;
use Spinen\Nable\Ncentral\Type\UserAddResponse;
use Spinen\Nable\Ncentral\Type\UserRoleAdd;
use Spinen\Nable\Ncentral\Type\UserRoleAddResponse;
use Spinen\Nable\Ncentral\Type\UserRoleGet;
use Spinen\Nable\Ncentral\Type\UserRoleGetResponse;
use Spinen\Nable\Ncentral\Type\UserRoleList;
use Spinen\Nable\Ncentral\Type\UserRoleListResponse;
use Spinen\Nable\Ncentral\Type\VersionInfoGet;
use Spinen\Nable\Ncentral\Type\VersionInfoGetResponse;

class NcentralClient extends Client
{

    /**
     * @param RequestInterface|ActiveIssuesList $parameters
     *
     * @return ResultInterface|ActiveIssuesListResponse
     * @throws SoapException
     */
    public function activeIssuesList(ActiveIssuesList $parameters) : ActiveIssuesListResponse
    {
        return $this->call('activeIssuesList', $parameters);
    }

    /**
     * @param RequestInterface|CustomerAdd $parameters
     *
     * @return ResultInterface|CustomerAddResponse
     * @throws SoapException
     */
    public function customerAdd(CustomerAdd $parameters): CustomerAddResponse
    {
        return $this->call('customerAdd', $parameters);
    }

    /**
     * @param RequestInterface|OrganizationPropertyList $parameters
     *
     * @return ResultInterface|OrganizationPropertyListResponse
     * @throws SoapException
     */
    public function organizationPropertyList(OrganizationPropertyList $parameters) : OrganizationPropertyListResponse
    {
        return $this->call('organizationPropertyList', $parameters);
    }

    /**
     * @param RequestInterface|AccessGroupAdd $parameters
     *
     * @return ResultInterface|AccessGroupAddResponse
     * @throws SoapException
     */
    public function accessGroupAdd(AccessGroupAdd $parameters) : AccessGroupAddResponse
    {
        return $this->call('accessGroupAdd', $parameters);
    }

    /**
     * @param RequestInterface|LastExportReset $parameters
     *
     * @return ResultInterface|LastExportResetResponse
     * @throws SoapException
     */
    public function lastExportReset(LastExportReset $parameters) : LastExportResetResponse
    {
        return $this->call('lastExportReset', $parameters);
    }

    /**
     * @param RequestInterface|UserRoleList $parameters
     *
     * @return ResultInterface|UserRoleListResponse
     * @throws SoapException
     */
    public function userRoleList(UserRoleList $parameters) : UserRoleListResponse
    {
        return $this->call('userRoleList', $parameters);
    }

    /**
     * @param RequestInterface|DeviceGetStatus $parameters
     *
     * @return ResultInterface|DeviceGetStatusResponse
     * @throws SoapException
     */
    public function deviceGetStatus(DeviceGetStatus $parameters) : DeviceGetStatusResponse
    {
        return $this->call('deviceGetStatus', $parameters);
    }

    /**
     * @param RequestInterface|PsaCreateCustomTicket $parameters
     *
     * @return ResultInterface|PsaCreateCustomTicketResponse
     * @throws SoapException
     */
    public function psaCreateCustomTicket(PsaCreateCustomTicket $parameters) : PsaCreateCustomTicketResponse
    {
        return $this->call('psaCreateCustomTicket', $parameters);
    }

    /**
     * @param RequestInterface|AccessGroupList $parameters
     *
     * @return ResultInterface|AccessGroupListResponse
     * @throws SoapException
     */
    public function accessGroupList(AccessGroupList $parameters) : AccessGroupListResponse
    {
        return $this->call('accessGroupList', $parameters);
    }

    /**
     * @param RequestInterface|SOAdd $parameters
     *
     * @return ResultInterface|SOAddResponse
     * @throws SoapException
     */
    public function sOAdd(SOAdd $parameters) : SOAddResponse
    {
        return $this->call('SOAdd', $parameters);
    }

    /**
     * @param RequestInterface|UserRoleAdd $parameters
     *
     * @return ResultInterface|UserRoleAddResponse
     * @throws SoapException
     */
    public function userRoleAdd(UserRoleAdd $parameters) : UserRoleAddResponse
    {
        return $this->call('userRoleAdd', $parameters);
    }

    /**
     * @param RequestInterface|CustomerDelete $parameters
     *
     * @return ResultInterface|CustomerDeleteResponse
     * @throws SoapException
     */
    public function customerDelete(CustomerDelete $parameters) : CustomerDeleteResponse
    {
        return $this->call('customerDelete', $parameters);
    }

    /**
     * @param RequestInterface|OrganizationPropertyModify $parameters
     *
     * @return ResultInterface|OrganizationPropertyModifyResponse
     * @throws SoapException
     */
    public function organizationPropertyModify(OrganizationPropertyModify $parameters) : OrganizationPropertyModifyResponse
    {
        return $this->call('organizationPropertyModify', $parameters);
    }

    /**
     * @param RequestInterface|DeviceList $parameters
     *
     * @return ResultInterface|DeviceListResponse
     * @throws SoapException
     */
    public function deviceList(DeviceList $parameters) : DeviceListResponse
    {
        return $this->call('deviceList', $parameters);
    }

    /**
     * @param RequestInterface|JobStatusList $parameters
     *
     * @return ResultInterface|JobStatusListResponse
     * @throws SoapException
     */
    public function jobStatusList(JobStatusList $parameters) : JobStatusListResponse
    {
        return $this->call('jobStatusList', $parameters);
    }

    /**
     * @param RequestInterface|CustomerModify $parameters
     *
     * @return ResultInterface|CustomerModifyResponse
     * @throws SoapException
     */
    public function customerModify(CustomerModify $parameters) : CustomerModifyResponse
    {
        return $this->call('customerModify', $parameters);
    }

    /**
     * @param RequestInterface|DeviceAssetInfoExportDevice $parameters
     *
     * @return ResultInterface|DeviceAssetInfoExportDeviceResponse
     * @throws SoapException
     */
    public function deviceAssetInfoExportDevice(DeviceAssetInfoExportDevice $parameters) : DeviceAssetInfoExportDeviceResponse
    {
        return $this->call('deviceAssetInfoExportDevice', $parameters);
    }

    /**
     * @param RequestInterface|UserRoleGet $parameters
     *
     * @return ResultInterface|UserRoleGetResponse
     * @throws SoapException
     */
    public function userRoleGet(UserRoleGet $parameters) : UserRoleGetResponse
    {
        return $this->call('userRoleGet', $parameters);
    }

    /**
     * @param RequestInterface|TaskPauseMonitoring $parameters
     *
     * @return ResultInterface|TaskPauseMonitoringResponse
     * @throws SoapException
     */
    public function taskPauseMonitoring(TaskPauseMonitoring $parameters) : TaskPauseMonitoringResponse
    {
        return $this->call('taskPauseMonitoring', $parameters);
    }

    /**
     * @param RequestInterface|PsaCredentialsValidate $parameters
     *
     * @return ResultInterface|PsaCredentialsValidateResponse
     * @throws SoapException
     */
    public function psaCredentialsValidate(PsaCredentialsValidate $parameters) : PsaCredentialsValidateResponse
    {
        return $this->call('psaCredentialsValidate', $parameters);
    }

    /**
     * @param RequestInterface|DeviceGet $parameters
     *
     * @return ResultInterface|DeviceGetResponse
     * @throws SoapException
     */
    public function deviceGet(DeviceGet $parameters) : DeviceGetResponse
    {
        return $this->call('deviceGet', $parameters);
    }

    /**
     * @param RequestInterface|PsaGetCustomTicket $parameters
     *
     * @return ResultInterface|PsaGetCustomTicketResponse
     * @throws SoapException
     */
    public function psaGetCustomTicket(PsaGetCustomTicket $parameters) : PsaGetCustomTicketResponse
    {
        return $this->call('psaGetCustomTicket', $parameters);
    }

    /**
     * @param RequestInterface|VersionInfoGet $parameters
     *
     * @return ResultInterface|VersionInfoGetResponse
     * @throws SoapException
     */
    public function versionInfoGet(VersionInfoGet $parameters) : VersionInfoGetResponse
    {
        return $this->call('versionInfoGet', $parameters);
    }

    /**
     * @param RequestInterface|AcknowledgeNotification $parameters
     *
     * @return ResultInterface|AcknowledgeNotificationResponse
     * @throws SoapException
     */
    public function acknowledgeNotification(AcknowledgeNotification $parameters) : AcknowledgeNotificationResponse
    {
        return $this->call('acknowledgeNotification', $parameters);
    }

    /**
     * @param RequestInterface|UserAdd $parameters
     *
     * @return ResultInterface|UserAddResponse
     * @throws SoapException
     */
    public function userAdd(UserAdd $parameters) : UserAddResponse
    {
        return $this->call('userAdd', $parameters);
    }

    /**
     * @param RequestInterface|DevicePropertyModify $parameters
     *
     * @return ResultInterface|DevicePropertyModifyResponse
     * @throws SoapException
     */
    public function devicePropertyModify(DevicePropertyModify $parameters) : DevicePropertyModifyResponse
    {
        return $this->call('devicePropertyModify', $parameters);
    }

    /**
     * @param RequestInterface|PsaReopenCustomTicket $parameters
     *
     * @return ResultInterface|PsaReopenCustomTicketResponse
     * @throws SoapException
     */
    public function psaReopenCustomTicket(PsaReopenCustomTicket $parameters) : PsaReopenCustomTicketResponse
    {
        return $this->call('psaReopenCustomTicket', $parameters);
    }

    /**
     * @param RequestInterface|TaskResumeMonitoring $parameters
     *
     * @return ResultInterface|TaskResumeMonitoringResponse
     * @throws SoapException
     */
    public function taskResumeMonitoring(TaskResumeMonitoring $parameters) : TaskResumeMonitoringResponse
    {
        return $this->call('taskResumeMonitoring', $parameters);
    }

    /**
     * @param RequestInterface|CustomerListChildren $parameters
     *
     * @return ResultInterface|CustomerListChildrenResponse
     * @throws SoapException
     */
    public function customerListChildren(CustomerListChildren $parameters) : CustomerListChildrenResponse
    {
        return $this->call('customerListChildren', $parameters);
    }

    /**
     * @param RequestInterface|AccessGroupGet $parameters
     *
     * @return ResultInterface|AccessGroupGetResponse
     * @throws SoapException
     */
    public function accessGroupGet(AccessGroupGet $parameters) : AccessGroupGetResponse
    {
        return $this->call('accessGroupGet', $parameters);
    }

    /**
     * @param RequestInterface|DeviceAssetInfoExportDeviceWithSettings $parameters
     *
     * @return ResultInterface|DeviceAssetInfoExportDeviceWithSettingsResponse
     * @throws SoapException
     */
    public function deviceAssetInfoExportDeviceWithSettings(DeviceAssetInfoExportDeviceWithSettings $parameters) : DeviceAssetInfoExportDeviceWithSettingsResponse
    {
        return $this->call('deviceAssetInfoExportDeviceWithSettings', $parameters);
    }

    /**
     * @param RequestInterface|DevicePropertyList $parameters
     *
     * @return ResultInterface|DevicePropertyListResponse
     * @throws SoapException
     */
    public function devicePropertyList(DevicePropertyList $parameters) : DevicePropertyListResponse
    {
        return $this->call('devicePropertyList', $parameters);
    }

    /**
     * @param RequestInterface|CustomerList $parameters
     *
     * @return ResultInterface|CustomerListResponse
     * @throws SoapException
     */
    public function customerList(CustomerList $parameters) : CustomerListResponse
    {
        return $this->call('customerList', $parameters);
    }

    /**
     * @param RequestInterface|PsaResolveCustomTicket $parameters
     *
     * @return ResultInterface|PsaResolveCustomTicketResponse
     * @throws SoapException
     */
    public function psaResolveCustomTicket(PsaResolveCustomTicket $parameters) : PsaResolveCustomTicketResponse
    {
        return $this->call('psaResolveCustomTicket', $parameters);
    }
}

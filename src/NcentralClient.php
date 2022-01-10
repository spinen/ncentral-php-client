<?php

namespace Spinen\Ncentral;

use Phpro\SoapClient\Client;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Spinen\Ncentral\Type\AccessGroupAdd;
use Spinen\Ncentral\Type\AccessGroupAddResponse;
use Spinen\Ncentral\Type\AccessGroupGet;
use Spinen\Ncentral\Type\AccessGroupGetResponse;
use Spinen\Ncentral\Type\AccessGroupList;
use Spinen\Ncentral\Type\AccessGroupListResponse;
use Spinen\Ncentral\Type\AcknowledgeNotification;
use Spinen\Ncentral\Type\AcknowledgeNotificationResponse;
use Spinen\Ncentral\Type\ActiveIssuesList;
use Spinen\Ncentral\Type\ActiveIssuesListResponse;
use Spinen\Ncentral\Type\CustomerAdd;
use Spinen\Ncentral\Type\CustomerAddResponse;
use Spinen\Ncentral\Type\CustomerDelete;
use Spinen\Ncentral\Type\CustomerDeleteResponse;
use Spinen\Ncentral\Type\CustomerList;
use Spinen\Ncentral\Type\CustomerListChildren;
use Spinen\Ncentral\Type\CustomerListChildrenResponse;
use Spinen\Ncentral\Type\CustomerListResponse;
use Spinen\Ncentral\Type\CustomerModify;
use Spinen\Ncentral\Type\CustomerModifyResponse;
use Spinen\Ncentral\Type\DeviceAssetInfoExportDevice;
use Spinen\Ncentral\Type\DeviceAssetInfoExportDeviceResponse;
use Spinen\Ncentral\Type\DeviceAssetInfoExportDeviceWithSettings;
use Spinen\Ncentral\Type\DeviceAssetInfoExportDeviceWithSettingsResponse;
use Spinen\Ncentral\Type\DeviceGet;
use Spinen\Ncentral\Type\DeviceGetResponse;
use Spinen\Ncentral\Type\DeviceGetStatus;
use Spinen\Ncentral\Type\DeviceGetStatusResponse;
use Spinen\Ncentral\Type\DeviceList;
use Spinen\Ncentral\Type\DeviceListResponse;
use Spinen\Ncentral\Type\DevicePropertyList;
use Spinen\Ncentral\Type\DevicePropertyListResponse;
use Spinen\Ncentral\Type\DevicePropertyModify;
use Spinen\Ncentral\Type\DevicePropertyModifyResponse;
use Spinen\Ncentral\Type\JobStatusList;
use Spinen\Ncentral\Type\JobStatusListResponse;
use Spinen\Ncentral\Type\LastExportReset;
use Spinen\Ncentral\Type\LastExportResetResponse;
use Spinen\Ncentral\Type\OrganizationPropertyList;
use Spinen\Ncentral\Type\OrganizationPropertyListResponse;
use Spinen\Ncentral\Type\OrganizationPropertyModify;
use Spinen\Ncentral\Type\OrganizationPropertyModifyResponse;
use Spinen\Ncentral\Type\PsaCreateCustomTicket;
use Spinen\Ncentral\Type\PsaCreateCustomTicketResponse;
use Spinen\Ncentral\Type\PsaCredentialsValidate;
use Spinen\Ncentral\Type\PsaCredentialsValidateResponse;
use Spinen\Ncentral\Type\PsaGetCustomTicket;
use Spinen\Ncentral\Type\PsaGetCustomTicketResponse;
use Spinen\Ncentral\Type\PsaReopenCustomTicket;
use Spinen\Ncentral\Type\PsaReopenCustomTicketResponse;
use Spinen\Ncentral\Type\PsaResolveCustomTicket;
use Spinen\Ncentral\Type\PsaResolveCustomTicketResponse;
use Spinen\Ncentral\Type\SOAdd;
use Spinen\Ncentral\Type\SOAddResponse;
use Spinen\Ncentral\Type\TaskPauseMonitoring;
use Spinen\Ncentral\Type\TaskPauseMonitoringResponse;
use Spinen\Ncentral\Type\TaskResumeMonitoring;
use Spinen\Ncentral\Type\TaskResumeMonitoringResponse;
use Spinen\Ncentral\Type\UserAdd;
use Spinen\Ncentral\Type\UserAddResponse;
use Spinen\Ncentral\Type\UserRoleAdd;
use Spinen\Ncentral\Type\UserRoleAddResponse;
use Spinen\Ncentral\Type\UserRoleGet;
use Spinen\Ncentral\Type\UserRoleGetResponse;
use Spinen\Ncentral\Type\UserRoleList;
use Spinen\Ncentral\Type\UserRoleListResponse;
use Spinen\Ncentral\Type\VersionInfoGet;
use Spinen\Ncentral\Type\VersionInfoGetResponse;

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

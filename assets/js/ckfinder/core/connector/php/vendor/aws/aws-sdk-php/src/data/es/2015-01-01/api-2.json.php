<?php
// This file was auto-generated from sdk-root/src/data/es/2015-01-01/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2015-01-01', 'endpointPrefix' => 'es', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Elasticsearch Service', 'signatureVersion' => 'v4', 'uid' => 'es-2015-01-01', ], 'operations' => [ 'AddTags' => [ 'name' => 'AddTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-01-01/tags', ], 'input' => [ 'shape' => 'AddTagsRequest', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalException', ], ], ], 'CreateElasticsearchDomain' => [ 'name' => 'CreateElasticsearchDomain', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-01-01/es/domain', ], 'input' => [ 'shape' => 'CreateElasticsearchDomainRequest', ], 'output' => [ 'shape' => 'CreateElasticsearchDomainResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'DisabledOperationException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceAlreadyExistsException', ], [ 'shape' => 'ValidationException', ], ], ], 'DeleteElasticsearchDomain' => [ 'name' => 'DeleteElasticsearchDomain', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/2015-01-01/es/domain/{DomainName}', ], 'input' => [ 'shape' => 'DeleteElasticsearchDomainRequest', ], 'output' => [ 'shape' => 'DeleteElasticsearchDomainResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeElasticsearchDomain' => [ 'name' => 'DescribeElasticsearchDomain', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/es/domain/{DomainName}', ], 'input' => [ 'shape' => 'DescribeElasticsearchDomainRequest', ], 'output' => [ 'shape' => 'DescribeElasticsearchDomainResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeElasticsearchDomainConfig' => [ 'name' => 'DescribeElasticsearchDomainConfig', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/es/domain/{DomainName}/config', ], 'input' => [ 'shape' => 'DescribeElasticsearchDomainConfigRequest', ], 'output' => [ 'shape' => 'DescribeElasticsearchDomainConfigResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeElasticsearchDomains' => [ 'name' => 'DescribeElasticsearchDomains', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-01-01/es/domain-info', ], 'input' => [ 'shape' => 'DescribeElasticsearchDomainsRequest', ], 'output' => [ 'shape' => 'DescribeElasticsearchDomainsResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ValidationException', ], ], ], 'DescribeElasticsearchInstanceTypeLimits' => [ 'name' => 'DescribeElasticsearchInstanceTypeLimits', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/es/instanceTypeLimits/{ElasticsearchVersion}/{InstanceType}', ], 'input' => [ 'shape' => 'DescribeElasticsearchInstanceTypeLimitsRequest', ], 'output' => [ 'shape' => 'DescribeElasticsearchInstanceTypeLimitsResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListDomainNames' => [ 'name' => 'ListDomainNames', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/domain', ], 'output' => [ 'shape' => 'ListDomainNamesResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListElasticsearchInstanceTypes' => [ 'name' => 'ListElasticsearchInstanceTypes', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/es/instanceTypes/{ElasticsearchVersion}', ], 'input' => [ 'shape' => 'ListElasticsearchInstanceTypesRequest', ], 'output' => [ 'shape' => 'ListElasticsearchInstanceTypesResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListElasticsearchVersions' => [ 'name' => 'ListElasticsearchVersions', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/es/versions', ], 'input' => [ 'shape' => 'ListElasticsearchVersionsRequest', ], 'output' => [ 'shape' => 'ListElasticsearchVersionsResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], 'ListTags' => [ 'name' => 'ListTags', 'http' => [ 'method' => 'GET', 'requestUri' => '/2015-01-01/tags/', ], 'input' => [ 'shape' => 'ListTagsRequest', ], 'output' => [ 'shape' => 'ListTagsResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalException', ], ], ], 'RemoveTags' => [ 'name' => 'RemoveTags', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-01-01/tags-removal', ], 'input' => [ 'shape' => 'RemoveTagsRequest', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'InternalException', ], ], ], 'UpdateElasticsearchDomainConfig' => [ 'name' => 'UpdateElasticsearchDomainConfig', 'http' => [ 'method' => 'POST', 'requestUri' => '/2015-01-01/es/domain/{DomainName}/config', ], 'input' => [ 'shape' => 'UpdateElasticsearchDomainConfigRequest', ], 'output' => [ 'shape' => 'UpdateElasticsearchDomainConfigResponse', ], 'errors' => [ [ 'shape' => 'BaseException', ], [ 'shape' => 'InternalException', ], [ 'shape' => 'InvalidTypeException', ], [ 'shape' => 'LimitExceededException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'ValidationException', ], ], ], ], 'shapes' => [ 'ARN' => [ 'type' => 'string', ], 'AccessPoliciesStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'PolicyDocument', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'AddTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ARN', 'TagList', ], 'members' => [ 'ARN' => [ 'shape' => 'ARN', ], 'TagList' => [ 'shape' => 'TagList', ], ], ], 'AdditionalLimit' => [ 'type' => 'structure', 'members' => [ 'LimitName' => [ 'shape' => 'LimitName', ], 'LimitValues' => [ 'shape' => 'LimitValueList', ], ], ], 'AdditionalLimitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'AdditionalLimit', ], ], 'AdvancedOptions' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'AdvancedOptionsStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'AdvancedOptions', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'BaseException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'exception' => true, ], 'Boolean' => [ 'type' => 'boolean', ], 'CreateElasticsearchDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], 'ElasticsearchVersion' => [ 'shape' => 'ElasticsearchVersionString', ], 'ElasticsearchClusterConfig' => [ 'shape' => 'ElasticsearchClusterConfig', ], 'EBSOptions' => [ 'shape' => 'EBSOptions', ], 'AccessPolicies' => [ 'shape' => 'PolicyDocument', ], 'SnapshotOptions' => [ 'shape' => 'SnapshotOptions', ], 'AdvancedOptions' => [ 'shape' => 'AdvancedOptions', ], ], ], 'CreateElasticsearchDomainResponse' => [ 'type' => 'structure', 'members' => [ 'DomainStatus' => [ 'shape' => 'ElasticsearchDomainStatus', ], ], ], 'DeleteElasticsearchDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', 'location' => 'uri', 'locationName' => 'DomainName', ], ], ], 'DeleteElasticsearchDomainResponse' => [ 'type' => 'structure', 'members' => [ 'DomainStatus' => [ 'shape' => 'ElasticsearchDomainStatus', ], ], ], 'DescribeElasticsearchDomainConfigRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', 'location' => 'uri', 'locationName' => 'DomainName', ], ], ], 'DescribeElasticsearchDomainConfigResponse' => [ 'type' => 'structure', 'required' => [ 'DomainConfig', ], 'members' => [ 'DomainConfig' => [ 'shape' => 'ElasticsearchDomainConfig', ], ], ], 'DescribeElasticsearchDomainRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', 'location' => 'uri', 'locationName' => 'DomainName', ], ], ], 'DescribeElasticsearchDomainResponse' => [ 'type' => 'structure', 'required' => [ 'DomainStatus', ], 'members' => [ 'DomainStatus' => [ 'shape' => 'ElasticsearchDomainStatus', ], ], ], 'DescribeElasticsearchDomainsRequest' => [ 'type' => 'structure', 'required' => [ 'DomainNames', ], 'members' => [ 'DomainNames' => [ 'shape' => 'DomainNameList', ], ], ], 'DescribeElasticsearchDomainsResponse' => [ 'type' => 'structure', 'required' => [ 'DomainStatusList', ], 'members' => [ 'DomainStatusList' => [ 'shape' => 'ElasticsearchDomainStatusList', ], ], ], 'DescribeElasticsearchInstanceTypeLimitsRequest' => [ 'type' => 'structure', 'required' => [ 'InstanceType', 'ElasticsearchVersion', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', 'location' => 'querystring', 'locationName' => 'domainName', ], 'InstanceType' => [ 'shape' => 'ESPartitionInstanceType', 'location' => 'uri', 'locationName' => 'InstanceType', ], 'ElasticsearchVersion' => [ 'shape' => 'ElasticsearchVersionString', 'location' => 'uri', 'locationName' => 'ElasticsearchVersion', ], ], ], 'DescribeElasticsearchInstanceTypeLimitsResponse' => [ 'type' => 'structure', 'members' => [ 'LimitsByRole' => [ 'shape' => 'LimitsByRole', ], ], ], 'DisabledOperationException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'DomainId' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'DomainInfo' => [ 'type' => 'structure', 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', ], ], ], 'DomainInfoList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainInfo', ], ], 'DomainName' => [ 'type' => 'string', 'max' => 28, 'min' => 3, 'pattern' => '[a-z][a-z0-9\\-]+', ], 'DomainNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'DomainName', ], ], 'EBSOptions' => [ 'type' => 'structure', 'members' => [ 'EBSEnabled' => [ 'shape' => 'Boolean', ], 'VolumeType' => [ 'shape' => 'VolumeType', ], 'VolumeSize' => [ 'shape' => 'IntegerClass', ], 'Iops' => [ 'shape' => 'IntegerClass', ], ], ], 'EBSOptionsStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'EBSOptions', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'ESPartitionInstanceType' => [ 'type' => 'string', 'enum' => [ 'm3.medium.elasticsearch', 'm3.large.elasticsearch', 'm3.xlarge.elasticsearch', 'm3.2xlarge.elasticsearch', 'm4.large.elasticsearch', 'm4.xlarge.elasticsearch', 'm4.2xlarge.elasticsearch', 'm4.4xlarge.elasticsearch', 'm4.10xlarge.elasticsearch', 't2.micro.elasticsearch', 't2.small.elasticsearch', 't2.medium.elasticsearch', 'r3.large.elasticsearch', 'r3.xlarge.elasticsearch', 'r3.2xlarge.elasticsearch', 'r3.4xlarge.elasticsearch', 'r3.8xlarge.elasticsearch', 'i2.xlarge.elasticsearch', 'i2.2xlarge.elasticsearch', 'd2.xlarge.elasticsearch', 'd2.2xlarge.elasticsearch', 'd2.4xlarge.elasticsearch', 'd2.8xlarge.elasticsearch', 'c4.large.elasticsearch', 'c4.xlarge.elasticsearch', 'c4.2xlarge.elasticsearch', 'c4.4xlarge.elasticsearch', 'c4.8xlarge.elasticsearch', 'r4.large.elasticsearch', 'r4.xlarge.elasticsearch', 'r4.2xlarge.elasticsearch', 'r4.4xlarge.elasticsearch', 'r4.8xlarge.elasticsearch', 'r4.16xlarge.elasticsearch', ], ], 'ElasticsearchClusterConfig' => [ 'type' => 'structure', 'members' => [ 'InstanceType' => [ 'shape' => 'ESPartitionInstanceType', ], 'InstanceCount' => [ 'shape' => 'IntegerClass', ], 'DedicatedMasterEnabled' => [ 'shape' => 'Boolean', ], 'ZoneAwarenessEnabled' => [ 'shape' => 'Boolean', ], 'DedicatedMasterType' => [ 'shape' => 'ESPartitionInstanceType', ], 'DedicatedMasterCount' => [ 'shape' => 'IntegerClass', ], ], ], 'ElasticsearchClusterConfigStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'ElasticsearchClusterConfig', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'ElasticsearchDomainConfig' => [ 'type' => 'structure', 'members' => [ 'ElasticsearchVersion' => [ 'shape' => 'ElasticsearchVersionStatus', ], 'ElasticsearchClusterConfig' => [ 'shape' => 'ElasticsearchClusterConfigStatus', ], 'EBSOptions' => [ 'shape' => 'EBSOptionsStatus', ], 'AccessPolicies' => [ 'shape' => 'AccessPoliciesStatus', ], 'SnapshotOptions' => [ 'shape' => 'SnapshotOptionsStatus', ], 'AdvancedOptions' => [ 'shape' => 'AdvancedOptionsStatus', ], ], ], 'ElasticsearchDomainStatus' => [ 'type' => 'structure', 'required' => [ 'DomainId', 'DomainName', 'ARN', 'ElasticsearchClusterConfig', ], 'members' => [ 'DomainId' => [ 'shape' => 'DomainId', ], 'DomainName' => [ 'shape' => 'DomainName', ], 'ARN' => [ 'shape' => 'ARN', ], 'Created' => [ 'shape' => 'Boolean', ], 'Deleted' => [ 'shape' => 'Boolean', ], 'Endpoint' => [ 'shape' => 'ServiceUrl', ], 'Processing' => [ 'shape' => 'Boolean', ], 'ElasticsearchVersion' => [ 'shape' => 'ElasticsearchVersionString', ], 'ElasticsearchClusterConfig' => [ 'shape' => 'ElasticsearchClusterConfig', ], 'EBSOptions' => [ 'shape' => 'EBSOptions', ], 'AccessPolicies' => [ 'shape' => 'PolicyDocument', ], 'SnapshotOptions' => [ 'shape' => 'SnapshotOptions', ], 'AdvancedOptions' => [ 'shape' => 'AdvancedOptions', ], ], ], 'ElasticsearchDomainStatusList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ElasticsearchDomainStatus', ], ], 'ElasticsearchInstanceTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ESPartitionInstanceType', ], ], 'ElasticsearchVersionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ElasticsearchVersionString', ], ], 'ElasticsearchVersionStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'ElasticsearchVersionString', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'ElasticsearchVersionString' => [ 'type' => 'string', ], 'ErrorMessage' => [ 'type' => 'string', ], 'InstanceCountLimits' => [ 'type' => 'structure', 'members' => [ 'MinimumInstanceCount' => [ 'shape' => 'MinimumInstanceCount', ], 'MaximumInstanceCount' => [ 'shape' => 'MaximumInstanceCount', ], ], ], 'InstanceLimits' => [ 'type' => 'structure', 'members' => [ 'InstanceCountLimits' => [ 'shape' => 'InstanceCountLimits', ], ], ], 'InstanceRole' => [ 'type' => 'string', ], 'IntegerClass' => [ 'type' => 'integer', ], 'InternalException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, ], 'InvalidTypeException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'LimitExceededException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'LimitName' => [ 'type' => 'string', ], 'LimitValue' => [ 'type' => 'string', ], 'LimitValueList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LimitValue', ], ], 'Limits' => [ 'type' => 'structure', 'members' => [ 'StorageTypes' => [ 'shape' => 'StorageTypeList', ], 'InstanceLimits' => [ 'shape' => 'InstanceLimits', ], 'AdditionalLimits' => [ 'shape' => 'AdditionalLimitList', ], ], ], 'LimitsByRole' => [ 'type' => 'map', 'key' => [ 'shape' => 'InstanceRole', ], 'value' => [ 'shape' => 'Limits', ], ], 'ListDomainNamesResponse' => [ 'type' => 'structure', 'members' => [ 'DomainNames' => [ 'shape' => 'DomainInfoList', ], ], ], 'ListElasticsearchInstanceTypesRequest' => [ 'type' => 'structure', 'required' => [ 'ElasticsearchVersion', ], 'members' => [ 'ElasticsearchVersion' => [ 'shape' => 'ElasticsearchVersionString', 'location' => 'uri', 'locationName' => 'ElasticsearchVersion', ], 'DomainName' => [ 'shape' => 'DomainName', 'location' => 'querystring', 'locationName' => 'domainName', ], 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListElasticsearchInstanceTypesResponse' => [ 'type' => 'structure', 'members' => [ 'ElasticsearchInstanceTypes' => [ 'shape' => 'ElasticsearchInstanceTypeList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListElasticsearchVersionsRequest' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListElasticsearchVersionsResponse' => [ 'type' => 'structure', 'members' => [ 'ElasticsearchVersions' => [ 'shape' => 'ElasticsearchVersionList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ARN', ], 'members' => [ 'ARN' => [ 'shape' => 'ARN', 'location' => 'querystring', 'locationName' => 'arn', ], ], ], 'ListTagsResponse' => [ 'type' => 'structure', 'members' => [ 'TagList' => [ 'shape' => 'TagList', ], ], ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, ], 'MaximumInstanceCount' => [ 'type' => 'integer', ], 'MinimumInstanceCount' => [ 'type' => 'integer', ], 'NextToken' => [ 'type' => 'string', ], 'OptionState' => [ 'type' => 'string', 'enum' => [ 'RequiresIndexDocuments', 'Processing', 'Active', ], ], 'OptionStatus' => [ 'type' => 'structure', 'required' => [ 'CreationDate', 'UpdateDate', 'State', ], 'members' => [ 'CreationDate' => [ 'shape' => 'UpdateTimestamp', ], 'UpdateDate' => [ 'shape' => 'UpdateTimestamp', ], 'UpdateVersion' => [ 'shape' => 'UIntValue', ], 'State' => [ 'shape' => 'OptionState', ], 'PendingDeletion' => [ 'shape' => 'Boolean', ], ], ], 'PolicyDocument' => [ 'type' => 'string', ], 'RemoveTagsRequest' => [ 'type' => 'structure', 'required' => [ 'ARN', 'TagKeys', ], 'members' => [ 'ARN' => [ 'shape' => 'ARN', ], 'TagKeys' => [ 'shape' => 'StringList', ], ], ], 'ResourceAlreadyExistsException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 409, ], 'exception' => true, ], 'ServiceUrl' => [ 'type' => 'string', ], 'SnapshotOptions' => [ 'type' => 'structure', 'members' => [ 'AutomatedSnapshotStartHour' => [ 'shape' => 'IntegerClass', ], ], ], 'SnapshotOptionsStatus' => [ 'type' => 'structure', 'required' => [ 'Options', 'Status', ], 'members' => [ 'Options' => [ 'shape' => 'SnapshotOptions', ], 'Status' => [ 'shape' => 'OptionStatus', ], ], ], 'StorageSubTypeName' => [ 'type' => 'string', ], 'StorageType' => [ 'type' => 'structure', 'members' => [ 'StorageTypeName' => [ 'shape' => 'StorageTypeName', ], 'StorageSubTypeName' => [ 'shape' => 'StorageSubTypeName', ], 'StorageTypeLimits' => [ 'shape' => 'StorageTypeLimitList', ], ], ], 'StorageTypeLimit' => [ 'type' => 'structure', 'members' => [ 'LimitName' => [ 'shape' => 'LimitName', ], 'LimitValues' => [ 'shape' => 'LimitValueList', ], ], ], 'StorageTypeLimitList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageTypeLimit', ], ], 'StorageTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'StorageType', ], ], 'StorageTypeName' => [ 'type' => 'string', ], 'String' => [ 'type' => 'string', ], 'StringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'Tag' => [ 'type' => 'structure', 'required' => [ 'Key', 'Value', ], 'members' => [ 'Key' => [ 'shape' => 'TagKey', ], 'Value' => [ 'shape' => 'TagValue', ], ], ], 'TagKey' => [ 'type' => 'string', 'max' => 128, 'min' => 1, ], 'TagList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Tag', ], ], 'TagValue' => [ 'type' => 'string', 'max' => 256, 'min' => 0, ], 'UIntValue' => [ 'type' => 'integer', 'min' => 0, ], 'UpdateElasticsearchDomainConfigRequest' => [ 'type' => 'structure', 'required' => [ 'DomainName', ], 'members' => [ 'DomainName' => [ 'shape' => 'DomainName', 'location' => 'uri', 'locationName' => 'DomainName', ], 'ElasticsearchClusterConfig' => [ 'shape' => 'ElasticsearchClusterConfig', ], 'EBSOptions' => [ 'shape' => 'EBSOptions', ], 'SnapshotOptions' => [ 'shape' => 'SnapshotOptions', ], 'AdvancedOptions' => [ 'shape' => 'AdvancedOptions', ], 'AccessPolicies' => [ 'shape' => 'PolicyDocument', ], ], ], 'UpdateElasticsearchDomainConfigResponse' => [ 'type' => 'structure', 'required' => [ 'DomainConfig', ], 'members' => [ 'DomainConfig' => [ 'shape' => 'ElasticsearchDomainConfig', ], ], ], 'UpdateTimestamp' => [ 'type' => 'timestamp', ], 'ValidationException' => [ 'type' => 'structure', 'members' => [], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'VolumeType' => [ 'type' => 'string', 'enum' => [ 'standard', 'gp2', 'io1', ], ], ],];

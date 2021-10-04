<?php
// This file was auto-generated from sdk-root/src/data/batch/2016-08-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-08-10', 'endpointPrefix' => 'batch', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceAbbreviation' => 'AWS Batch', 'serviceFullName' => 'AWS Batch', 'serviceId' => 'Batch', 'signatureVersion' => 'v4', 'uid' => 'batch-2016-08-10', ], 'operations' => [ 'CancelJob' => [ 'name' => 'CancelJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/canceljob', ], 'input' => [ 'shape' => 'CancelJobRequest', ], 'output' => [ 'shape' => 'CancelJobResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'CreateComputeEnvironment' => [ 'name' => 'CreateComputeEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/createcomputeenvironment', ], 'input' => [ 'shape' => 'CreateComputeEnvironmentRequest', ], 'output' => [ 'shape' => 'CreateComputeEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'CreateJobQueue' => [ 'name' => 'CreateJobQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/createjobqueue', ], 'input' => [ 'shape' => 'CreateJobQueueRequest', ], 'output' => [ 'shape' => 'CreateJobQueueResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DeleteComputeEnvironment' => [ 'name' => 'DeleteComputeEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/deletecomputeenvironment', ], 'input' => [ 'shape' => 'DeleteComputeEnvironmentRequest', ], 'output' => [ 'shape' => 'DeleteComputeEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DeleteJobQueue' => [ 'name' => 'DeleteJobQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/deletejobqueue', ], 'input' => [ 'shape' => 'DeleteJobQueueRequest', ], 'output' => [ 'shape' => 'DeleteJobQueueResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DeregisterJobDefinition' => [ 'name' => 'DeregisterJobDefinition', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/deregisterjobdefinition', ], 'input' => [ 'shape' => 'DeregisterJobDefinitionRequest', ], 'output' => [ 'shape' => 'DeregisterJobDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DescribeComputeEnvironments' => [ 'name' => 'DescribeComputeEnvironments', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/describecomputeenvironments', ], 'input' => [ 'shape' => 'DescribeComputeEnvironmentsRequest', ], 'output' => [ 'shape' => 'DescribeComputeEnvironmentsResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DescribeJobDefinitions' => [ 'name' => 'DescribeJobDefinitions', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/describejobdefinitions', ], 'input' => [ 'shape' => 'DescribeJobDefinitionsRequest', ], 'output' => [ 'shape' => 'DescribeJobDefinitionsResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DescribeJobQueues' => [ 'name' => 'DescribeJobQueues', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/describejobqueues', ], 'input' => [ 'shape' => 'DescribeJobQueuesRequest', ], 'output' => [ 'shape' => 'DescribeJobQueuesResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'DescribeJobs' => [ 'name' => 'DescribeJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/describejobs', ], 'input' => [ 'shape' => 'DescribeJobsRequest', ], 'output' => [ 'shape' => 'DescribeJobsResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'ListJobs' => [ 'name' => 'ListJobs', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/listjobs', ], 'input' => [ 'shape' => 'ListJobsRequest', ], 'output' => [ 'shape' => 'ListJobsResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'RegisterJobDefinition' => [ 'name' => 'RegisterJobDefinition', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/registerjobdefinition', ], 'input' => [ 'shape' => 'RegisterJobDefinitionRequest', ], 'output' => [ 'shape' => 'RegisterJobDefinitionResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'SubmitJob' => [ 'name' => 'SubmitJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/submitjob', ], 'input' => [ 'shape' => 'SubmitJobRequest', ], 'output' => [ 'shape' => 'SubmitJobResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'TerminateJob' => [ 'name' => 'TerminateJob', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/terminatejob', ], 'input' => [ 'shape' => 'TerminateJobRequest', ], 'output' => [ 'shape' => 'TerminateJobResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'UpdateComputeEnvironment' => [ 'name' => 'UpdateComputeEnvironment', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/updatecomputeenvironment', ], 'input' => [ 'shape' => 'UpdateComputeEnvironmentRequest', ], 'output' => [ 'shape' => 'UpdateComputeEnvironmentResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], 'UpdateJobQueue' => [ 'name' => 'UpdateJobQueue', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/updatejobqueue', ], 'input' => [ 'shape' => 'UpdateJobQueueRequest', ], 'output' => [ 'shape' => 'UpdateJobQueueResponse', ], 'errors' => [ [ 'shape' => 'ClientException', ], [ 'shape' => 'ServerException', ], ], ], ], 'shapes' => [ 'ArrayJobDependency' => [ 'type' => 'string', 'enum' => [ 'N_TO_N', 'SEQUENTIAL', ], ], 'ArrayJobStatusSummary' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'Integer', ], ], 'ArrayProperties' => [ 'type' => 'structure', 'members' => [ 'size' => [ 'shape' => 'Integer', ], ], ], 'ArrayPropertiesDetail' => [ 'type' => 'structure', 'members' => [ 'statusSummary' => [ 'shape' => 'ArrayJobStatusSummary', ], 'size' => [ 'shape' => 'Integer', ], 'index' => [ 'shape' => 'Integer', ], ], ], 'ArrayPropertiesSummary' => [ 'type' => 'structure', 'members' => [ 'size' => [ 'shape' => 'Integer', ], 'index' => [ 'shape' => 'Integer', ], ], ], 'AttemptContainerDetail' => [ 'type' => 'structure', 'members' => [ 'containerInstanceArn' => [ 'shape' => 'String', ], 'taskArn' => [ 'shape' => 'String', ], 'exitCode' => [ 'shape' => 'Integer', ], 'reason' => [ 'shape' => 'String', ], 'logStreamName' => [ 'shape' => 'String', ], 'networkInterfaces' => [ 'shape' => 'NetworkInterfaceList', ], ], ], 'AttemptDetail' => [ 'type' => 'structure', 'members' => [ 'container' => [ 'shape' => 'AttemptContainerDetail', ], 'startedAt' => [ 'shape' => 'Long', ], 'stoppedAt' => [ 'shape' => 'Long', ], 'statusReason' => [ 'shape' => 'String', ], ], ], 'AttemptDetails' => [ 'type' => 'list', 'member' => [ 'shape' => 'AttemptDetail', ], ], 'Boolean' => [ 'type' => 'boolean', ], 'CEState' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'CEStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'UPDATING', 'DELETING', 'DELETED', 'VALID', 'INVALID', ], ], 'CEType' => [ 'type' => 'string', 'enum' => [ 'MANAGED', 'UNMANAGED', ], ], 'CRAllocationStrategy' => [ 'type' => 'string', 'enum' => [ 'BEST_FIT', 'BEST_FIT_PROGRESSIVE', 'SPOT_CAPACITY_OPTIMIZED', ], ], 'CRType' => [ 'type' => 'string', 'enum' => [ 'EC2', 'SPOT', ], ], 'CancelJobRequest' => [ 'type' => 'structure', 'required' => [ 'jobId', 'reason', ], 'members' => [ 'jobId' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'String', ], ], ], 'CancelJobResponse' => [ 'type' => 'structure', 'members' => [], ], 'ClientException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ComputeEnvironmentDetail' => [ 'type' => 'structure', 'required' => [ 'computeEnvironmentName', 'computeEnvironmentArn', 'ecsClusterArn', ], 'members' => [ 'computeEnvironmentName' => [ 'shape' => 'String', ], 'computeEnvironmentArn' => [ 'shape' => 'String', ], 'ecsClusterArn' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'CEType', ], 'state' => [ 'shape' => 'CEState', ], 'status' => [ 'shape' => 'CEStatus', ], 'statusReason' => [ 'shape' => 'String', ], 'computeResources' => [ 'shape' => 'ComputeResource', ], 'serviceRole' => [ 'shape' => 'String', ], ], ], 'ComputeEnvironmentDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComputeEnvironmentDetail', ], ], 'ComputeEnvironmentOrder' => [ 'type' => 'structure', 'required' => [ 'order', 'computeEnvironment', ], 'members' => [ 'order' => [ 'shape' => 'Integer', ], 'computeEnvironment' => [ 'shape' => 'String', ], ], ], 'ComputeEnvironmentOrders' => [ 'type' => 'list', 'member' => [ 'shape' => 'ComputeEnvironmentOrder', ], ], 'ComputeResource' => [ 'type' => 'structure', 'required' => [ 'type', 'minvCpus', 'maxvCpus', 'instanceTypes', 'subnets', 'instanceRole', ], 'members' => [ 'type' => [ 'shape' => 'CRType', ], 'allocationStrategy' => [ 'shape' => 'CRAllocationStrategy', ], 'minvCpus' => [ 'shape' => 'Integer', ], 'maxvCpus' => [ 'shape' => 'Integer', ], 'desiredvCpus' => [ 'shape' => 'Integer', ], 'instanceTypes' => [ 'shape' => 'StringList', ], 'imageId' => [ 'shape' => 'String', ], 'subnets' => [ 'shape' => 'StringList', ], 'securityGroupIds' => [ 'shape' => 'StringList', ], 'ec2KeyPair' => [ 'shape' => 'String', ], 'instanceRole' => [ 'shape' => 'String', ], 'tags' => [ 'shape' => 'TagsMap', ], 'placementGroup' => [ 'shape' => 'String', ], 'bidPercentage' => [ 'shape' => 'Integer', ], 'spotIamFleetRole' => [ 'shape' => 'String', ], 'launchTemplate' => [ 'shape' => 'LaunchTemplateSpecification', ], ], ], 'ComputeResourceUpdate' => [ 'type' => 'structure', 'members' => [ 'minvCpus' => [ 'shape' => 'Integer', ], 'maxvCpus' => [ 'shape' => 'Integer', ], 'desiredvCpus' => [ 'shape' => 'Integer', ], ], ], 'ContainerDetail' => [ 'type' => 'structure', 'members' => [ 'image' => [ 'shape' => 'String', ], 'vcpus' => [ 'shape' => 'Integer', ], 'memory' => [ 'shape' => 'Integer', ], 'command' => [ 'shape' => 'StringList', ], 'jobRoleArn' => [ 'shape' => 'String', ], 'volumes' => [ 'shape' => 'Volumes', ], 'environment' => [ 'shape' => 'EnvironmentVariables', ], 'mountPoints' => [ 'shape' => 'MountPoints', ], 'readonlyRootFilesystem' => [ 'shape' => 'Boolean', ], 'ulimits' => [ 'shape' => 'Ulimits', ], 'privileged' => [ 'shape' => 'Boolean', ], 'user' => [ 'shape' => 'String', ], 'exitCode' => [ 'shape' => 'Integer', ], 'reason' => [ 'shape' => 'String', ], 'containerInstanceArn' => [ 'shape' => 'String', ], 'taskArn' => [ 'shape' => 'String', ], 'logStreamName' => [ 'shape' => 'String', ], 'instanceType' => [ 'shape' => 'String', ], 'networkInterfaces' => [ 'shape' => 'NetworkInterfaceList', ], 'resourceRequirements' => [ 'shape' => 'ResourceRequirements', ], 'linuxParameters' => [ 'shape' => 'LinuxParameters', ], ], ], 'ContainerOverrides' => [ 'type' => 'structure', 'members' => [ 'vcpus' => [ 'shape' => 'Integer', ], 'memory' => [ 'shape' => 'Integer', ], 'command' => [ 'shape' => 'StringList', ], 'instanceType' => [ 'shape' => 'String', ], 'environment' => [ 'shape' => 'EnvironmentVariables', ], 'resourceRequirements' => [ 'shape' => 'ResourceRequirements', ], ], ], 'ContainerProperties' => [ 'type' => 'structure', 'members' => [ 'image' => [ 'shape' => 'String', ], 'vcpus' => [ 'shape' => 'Integer', ], 'memory' => [ 'shape' => 'Integer', ], 'command' => [ 'shape' => 'StringList', ], 'jobRoleArn' => [ 'shape' => 'String', ], 'volumes' => [ 'shape' => 'Volumes', ], 'environment' => [ 'shape' => 'EnvironmentVariables', ], 'mountPoints' => [ 'shape' => 'MountPoints', ], 'readonlyRootFilesystem' => [ 'shape' => 'Boolean', ], 'privileged' => [ 'shape' => 'Boolean', ], 'ulimits' => [ 'shape' => 'Ulimits', ], 'user' => [ 'shape' => 'String', ], 'instanceType' => [ 'shape' => 'String', ], 'resourceRequirements' => [ 'shape' => 'ResourceRequirements', ], 'linuxParameters' => [ 'shape' => 'LinuxParameters', ], ], ], 'ContainerSummary' => [ 'type' => 'structure', 'members' => [ 'exitCode' => [ 'shape' => 'Integer', ], 'reason' => [ 'shape' => 'String', ], ], ], 'CreateComputeEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'computeEnvironmentName', 'type', 'serviceRole', ], 'members' => [ 'computeEnvironmentName' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'CEType', ], 'state' => [ 'shape' => 'CEState', ], 'computeResources' => [ 'shape' => 'ComputeResource', ], 'serviceRole' => [ 'shape' => 'String', ], ], ], 'CreateComputeEnvironmentResponse' => [ 'type' => 'structure', 'members' => [ 'computeEnvironmentName' => [ 'shape' => 'String', ], 'computeEnvironmentArn' => [ 'shape' => 'String', ], ], ], 'CreateJobQueueRequest' => [ 'type' => 'structure', 'required' => [ 'jobQueueName', 'priority', 'computeEnvironmentOrder', ], 'members' => [ 'jobQueueName' => [ 'shape' => 'String', ], 'state' => [ 'shape' => 'JQState', ], 'priority' => [ 'shape' => 'Integer', ], 'computeEnvironmentOrder' => [ 'shape' => 'ComputeEnvironmentOrders', ], ], ], 'CreateJobQueueResponse' => [ 'type' => 'structure', 'required' => [ 'jobQueueName', 'jobQueueArn', ], 'members' => [ 'jobQueueName' => [ 'shape' => 'String', ], 'jobQueueArn' => [ 'shape' => 'String', ], ], ], 'DeleteComputeEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'computeEnvironment', ], 'members' => [ 'computeEnvironment' => [ 'shape' => 'String', ], ], ], 'DeleteComputeEnvironmentResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeleteJobQueueRequest' => [ 'type' => 'structure', 'required' => [ 'jobQueue', ], 'members' => [ 'jobQueue' => [ 'shape' => 'String', ], ], ], 'DeleteJobQueueResponse' => [ 'type' => 'structure', 'members' => [], ], 'DeregisterJobDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'jobDefinition', ], 'members' => [ 'jobDefinition' => [ 'shape' => 'String', ], ], ], 'DeregisterJobDefinitionResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeComputeEnvironmentsRequest' => [ 'type' => 'structure', 'members' => [ 'computeEnvironments' => [ 'shape' => 'StringList', ], 'maxResults' => [ 'shape' => 'Integer', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeComputeEnvironmentsResponse' => [ 'type' => 'structure', 'members' => [ 'computeEnvironments' => [ 'shape' => 'ComputeEnvironmentDetailList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeJobDefinitionsRequest' => [ 'type' => 'structure', 'members' => [ 'jobDefinitions' => [ 'shape' => 'StringList', ], 'maxResults' => [ 'shape' => 'Integer', ], 'jobDefinitionName' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'String', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeJobDefinitionsResponse' => [ 'type' => 'structure', 'members' => [ 'jobDefinitions' => [ 'shape' => 'JobDefinitionList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeJobQueuesRequest' => [ 'type' => 'structure', 'members' => [ 'jobQueues' => [ 'shape' => 'StringList', ], 'maxResults' => [ 'shape' => 'Integer', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeJobQueuesResponse' => [ 'type' => 'structure', 'members' => [ 'jobQueues' => [ 'shape' => 'JobQueueDetailList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'DescribeJobsRequest' => [ 'type' => 'structure', 'required' => [ 'jobs', ], 'members' => [ 'jobs' => [ 'shape' => 'StringList', ], ], ], 'DescribeJobsResponse' => [ 'type' => 'structure', 'members' => [ 'jobs' => [ 'shape' => 'JobDetailList', ], ], ], 'Device' => [ 'type' => 'structure', 'required' => [ 'hostPath', ], 'members' => [ 'hostPath' => [ 'shape' => 'String', ], 'containerPath' => [ 'shape' => 'String', ], 'permissions' => [ 'shape' => 'DeviceCgroupPermissions', ], ], ], 'DeviceCgroupPermission' => [ 'type' => 'string', 'enum' => [ 'READ', 'WRITE', 'MKNOD', ], ], 'DeviceCgroupPermissions' => [ 'type' => 'list', 'member' => [ 'shape' => 'DeviceCgroupPermission', ], ], 'DevicesList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Device', ], ], 'EnvironmentVariables' => [ 'type' => 'list', 'member' => [ 'shape' => 'KeyValuePair', ], ], 'Host' => [ 'type' => 'structure', 'members' => [ 'sourcePath' => [ 'shape' => 'String', ], ], ], 'Integer' => [ 'type' => 'integer', ], 'JQState' => [ 'type' => 'string', 'enum' => [ 'ENABLED', 'DISABLED', ], ], 'JQStatus' => [ 'type' => 'string', 'enum' => [ 'CREATING', 'UPDATING', 'DELETING', 'DELETED', 'VALID', 'INVALID', ], ], 'JobDefinition' => [ 'type' => 'structure', 'required' => [ 'jobDefinitionName', 'jobDefinitionArn', 'revision', 'type', ], 'members' => [ 'jobDefinitionName' => [ 'shape' => 'String', ], 'jobDefinitionArn' => [ 'shape' => 'String', ], 'revision' => [ 'shape' => 'Integer', ], 'status' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'String', ], 'parameters' => [ 'shape' => 'ParametersMap', ], 'retryStrategy' => [ 'shape' => 'RetryStrategy', ], 'containerProperties' => [ 'shape' => 'ContainerProperties', ], 'timeout' => [ 'shape' => 'JobTimeout', ], 'nodeProperties' => [ 'shape' => 'NodeProperties', ], ], ], 'JobDefinitionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobDefinition', ], ], 'JobDefinitionType' => [ 'type' => 'string', 'enum' => [ 'container', 'multinode', ], ], 'JobDependency' => [ 'type' => 'structure', 'members' => [ 'jobId' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'ArrayJobDependency', ], ], ], 'JobDependencyList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobDependency', ], ], 'JobDetail' => [ 'type' => 'structure', 'required' => [ 'jobName', 'jobId', 'jobQueue', 'status', 'startedAt', 'jobDefinition', ], 'members' => [ 'jobName' => [ 'shape' => 'String', ], 'jobId' => [ 'shape' => 'String', ], 'jobQueue' => [ 'shape' => 'String', ], 'status' => [ 'shape' => 'JobStatus', ], 'attempts' => [ 'shape' => 'AttemptDetails', ], 'statusReason' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'Long', ], 'retryStrategy' => [ 'shape' => 'RetryStrategy', ], 'startedAt' => [ 'shape' => 'Long', ], 'stoppedAt' => [ 'shape' => 'Long', ], 'dependsOn' => [ 'shape' => 'JobDependencyList', ], 'jobDefinition' => [ 'shape' => 'String', ], 'parameters' => [ 'shape' => 'ParametersMap', ], 'container' => [ 'shape' => 'ContainerDetail', ], 'nodeDetails' => [ 'shape' => 'NodeDetails', ], 'nodeProperties' => [ 'shape' => 'NodeProperties', ], 'arrayProperties' => [ 'shape' => 'ArrayPropertiesDetail', ], 'timeout' => [ 'shape' => 'JobTimeout', ], ], ], 'JobDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobDetail', ], ], 'JobQueueDetail' => [ 'type' => 'structure', 'required' => [ 'jobQueueName', 'jobQueueArn', 'state', 'priority', 'computeEnvironmentOrder', ], 'members' => [ 'jobQueueName' => [ 'shape' => 'String', ], 'jobQueueArn' => [ 'shape' => 'String', ], 'state' => [ 'shape' => 'JQState', ], 'status' => [ 'shape' => 'JQStatus', ], 'statusReason' => [ 'shape' => 'String', ], 'priority' => [ 'shape' => 'Integer', ], 'computeEnvironmentOrder' => [ 'shape' => 'ComputeEnvironmentOrders', ], ], ], 'JobQueueDetailList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobQueueDetail', ], ], 'JobStatus' => [ 'type' => 'string', 'enum' => [ 'SUBMITTED', 'PENDING', 'RUNNABLE', 'STARTING', 'RUNNING', 'SUCCEEDED', 'FAILED', ], ], 'JobSummary' => [ 'type' => 'structure', 'required' => [ 'jobId', 'jobName', ], 'members' => [ 'jobId' => [ 'shape' => 'String', ], 'jobName' => [ 'shape' => 'String', ], 'createdAt' => [ 'shape' => 'Long', ], 'status' => [ 'shape' => 'JobStatus', ], 'statusReason' => [ 'shape' => 'String', ], 'startedAt' => [ 'shape' => 'Long', ], 'stoppedAt' => [ 'shape' => 'Long', ], 'container' => [ 'shape' => 'ContainerSummary', ], 'arrayProperties' => [ 'shape' => 'ArrayPropertiesSummary', ], 'nodeProperties' => [ 'shape' => 'NodePropertiesSummary', ], ], ], 'JobSummaryList' => [ 'type' => 'list', 'member' => [ 'shape' => 'JobSummary', ], ], 'JobTimeout' => [ 'type' => 'structure', 'members' => [ 'attemptDurationSeconds' => [ 'shape' => 'Integer', ], ], ], 'KeyValuePair' => [ 'type' => 'structure', 'members' => [ 'name' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], ], 'LaunchTemplateSpecification' => [ 'type' => 'structure', 'members' => [ 'launchTemplateId' => [ 'shape' => 'String', ], 'launchTemplateName' => [ 'shape' => 'String', ], 'version' => [ 'shape' => 'String', ], ], ], 'LinuxParameters' => [ 'type' => 'structure', 'members' => [ 'devices' => [ 'shape' => 'DevicesList', ], ], ], 'ListJobsRequest' => [ 'type' => 'structure', 'members' => [ 'jobQueue' => [ 'shape' => 'String', ], 'arrayJobId' => [ 'shape' => 'String', ], 'multiNodeJobId' => [ 'shape' => 'String', ], 'jobStatus' => [ 'shape' => 'JobStatus', ], 'maxResults' => [ 'shape' => 'Integer', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'ListJobsResponse' => [ 'type' => 'structure', 'required' => [ 'jobSummaryList', ], 'members' => [ 'jobSummaryList' => [ 'shape' => 'JobSummaryList', ], 'nextToken' => [ 'shape' => 'String', ], ], ], 'Long' => [ 'type' => 'long', ], 'MountPoint' => [ 'type' => 'structure', 'members' => [ 'containerPath' => [ 'shape' => 'String', ], 'readOnly' => [ 'shape' => 'Boolean', ], 'sourceVolume' => [ 'shape' => 'String', ], ], ], 'MountPoints' => [ 'type' => 'list', 'member' => [ 'shape' => 'MountPoint', ], ], 'NetworkInterface' => [ 'type' => 'structure', 'members' => [ 'attachmentId' => [ 'shape' => 'String', ], 'ipv6Address' => [ 'shape' => 'String', ], 'privateIpv4Address' => [ 'shape' => 'String', ], ], ], 'NetworkInterfaceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'NetworkInterface', ], ], 'NodeDetails' => [ 'type' => 'structure', 'members' => [ 'nodeIndex' => [ 'shape' => 'Integer', ], 'isMainNode' => [ 'shape' => 'Boolean', ], ], ], 'NodeOverrides' => [ 'type' => 'structure', 'members' => [ 'numNodes' => [ 'shape' => 'Integer', ], 'nodePropertyOverrides' => [ 'shape' => 'NodePropertyOverrides', ], ], ], 'NodeProperties' => [ 'type' => 'structure', 'required' => [ 'numNodes', 'mainNode', 'nodeRangeProperties', ], 'members' => [ 'numNodes' => [ 'shape' => 'Integer', ], 'mainNode' => [ 'shape' => 'Integer', ], 'nodeRangeProperties' => [ 'shape' => 'NodeRangeProperties', ], ], ], 'NodePropertiesSummary' => [ 'type' => 'structure', 'members' => [ 'isMainNode' => [ 'shape' => 'Boolean', ], 'numNodes' => [ 'shape' => 'Integer', ], 'nodeIndex' => [ 'shape' => 'Integer', ], ], ], 'NodePropertyOverride' => [ 'type' => 'structure', 'required' => [ 'targetNodes', ], 'members' => [ 'targetNodes' => [ 'shape' => 'String', ], 'containerOverrides' => [ 'shape' => 'ContainerOverrides', ], ], ], 'NodePropertyOverrides' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodePropertyOverride', ], ], 'NodeRangeProperties' => [ 'type' => 'list', 'member' => [ 'shape' => 'NodeRangeProperty', ], ], 'NodeRangeProperty' => [ 'type' => 'structure', 'required' => [ 'targetNodes', ], 'members' => [ 'targetNodes' => [ 'shape' => 'String', ], 'container' => [ 'shape' => 'ContainerProperties', ], ], ], 'ParametersMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'RegisterJobDefinitionRequest' => [ 'type' => 'structure', 'required' => [ 'jobDefinitionName', 'type', ], 'members' => [ 'jobDefinitionName' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'JobDefinitionType', ], 'parameters' => [ 'shape' => 'ParametersMap', ], 'containerProperties' => [ 'shape' => 'ContainerProperties', ], 'nodeProperties' => [ 'shape' => 'NodeProperties', ], 'retryStrategy' => [ 'shape' => 'RetryStrategy', ], 'timeout' => [ 'shape' => 'JobTimeout', ], ], ], 'RegisterJobDefinitionResponse' => [ 'type' => 'structure', 'required' => [ 'jobDefinitionName', 'jobDefinitionArn', 'revision', ], 'members' => [ 'jobDefinitionName' => [ 'shape' => 'String', ], 'jobDefinitionArn' => [ 'shape' => 'String', ], 'revision' => [ 'shape' => 'Integer', ], ], ], 'ResourceRequirement' => [ 'type' => 'structure', 'required' => [ 'value', 'type', ], 'members' => [ 'value' => [ 'shape' => 'String', ], 'type' => [ 'shape' => 'ResourceType', ], ], ], 'ResourceRequirements' => [ 'type' => 'list', 'member' => [ 'shape' => 'ResourceRequirement', ], ], 'ResourceType' => [ 'type' => 'string', 'enum' => [ 'GPU', ], ], 'RetryStrategy' => [ 'type' => 'structure', 'members' => [ 'attempts' => [ 'shape' => 'Integer', ], ], ], 'ServerException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'String' => [ 'type' => 'string', ], 'StringList' => [ 'type' => 'list', 'member' => [ 'shape' => 'String', ], ], 'SubmitJobRequest' => [ 'type' => 'structure', 'required' => [ 'jobName', 'jobQueue', 'jobDefinition', ], 'members' => [ 'jobName' => [ 'shape' => 'String', ], 'jobQueue' => [ 'shape' => 'String', ], 'arrayProperties' => [ 'shape' => 'ArrayProperties', ], 'dependsOn' => [ 'shape' => 'JobDependencyList', ], 'jobDefinition' => [ 'shape' => 'String', ], 'parameters' => [ 'shape' => 'ParametersMap', ], 'containerOverrides' => [ 'shape' => 'ContainerOverrides', ], 'nodeOverrides' => [ 'shape' => 'NodeOverrides', ], 'retryStrategy' => [ 'shape' => 'RetryStrategy', ], 'timeout' => [ 'shape' => 'JobTimeout', ], ], ], 'SubmitJobResponse' => [ 'type' => 'structure', 'required' => [ 'jobName', 'jobId', ], 'members' => [ 'jobName' => [ 'shape' => 'String', ], 'jobId' => [ 'shape' => 'String', ], ], ], 'TagsMap' => [ 'type' => 'map', 'key' => [ 'shape' => 'String', ], 'value' => [ 'shape' => 'String', ], ], 'TerminateJobRequest' => [ 'type' => 'structure', 'required' => [ 'jobId', 'reason', ], 'members' => [ 'jobId' => [ 'shape' => 'String', ], 'reason' => [ 'shape' => 'String', ], ], ], 'TerminateJobResponse' => [ 'type' => 'structure', 'members' => [], ], 'Ulimit' => [ 'type' => 'structure', 'required' => [ 'hardLimit', 'name', 'softLimit', ], 'members' => [ 'hardLimit' => [ 'shape' => 'Integer', ], 'name' => [ 'shape' => 'String', ], 'softLimit' => [ 'shape' => 'Integer', ], ], ], 'Ulimits' => [ 'type' => 'list', 'member' => [ 'shape' => 'Ulimit', ], ], 'UpdateComputeEnvironmentRequest' => [ 'type' => 'structure', 'required' => [ 'computeEnvironment', ], 'members' => [ 'computeEnvironment' => [ 'shape' => 'String', ], 'state' => [ 'shape' => 'CEState', ], 'computeResources' => [ 'shape' => 'ComputeResourceUpdate', ], 'serviceRole' => [ 'shape' => 'String', ], ], ], 'UpdateComputeEnvironmentResponse' => [ 'type' => 'structure', 'members' => [ 'computeEnvironmentName' => [ 'shape' => 'String', ], 'computeEnvironmentArn' => [ 'shape' => 'String', ], ], ], 'UpdateJobQueueRequest' => [ 'type' => 'structure', 'required' => [ 'jobQueue', ], 'members' => [ 'jobQueue' => [ 'shape' => 'String', ], 'state' => [ 'shape' => 'JQState', ], 'priority' => [ 'shape' => 'Integer', ], 'computeEnvironmentOrder' => [ 'shape' => 'ComputeEnvironmentOrders', ], ], ], 'UpdateJobQueueResponse' => [ 'type' => 'structure', 'members' => [ 'jobQueueName' => [ 'shape' => 'String', ], 'jobQueueArn' => [ 'shape' => 'String', ], ], ], 'Volume' => [ 'type' => 'structure', 'members' => [ 'host' => [ 'shape' => 'Host', ], 'name' => [ 'shape' => 'String', ], ], ], 'Volumes' => [ 'type' => 'list', 'member' => [ 'shape' => 'Volume', ], ], ],];

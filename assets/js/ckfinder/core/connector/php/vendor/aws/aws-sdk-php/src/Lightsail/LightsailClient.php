<?php
namespace Aws\Lightsail;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Lightsail** service.
 * @method \Aws\Result allocateStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateStaticIpAsync(array $args = [])
 * @method \Aws\Result attachStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachStaticIpAsync(array $args = [])
 * @method \Aws\Result closeInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeInstancePublicPortsAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainEntryAsync(array $args = [])
 * @method \Aws\Result createInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceSnapshotAsync(array $args = [])
 * @method \Aws\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Aws\Result createInstancesFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesFromSnapshotAsync(array $args = [])
 * @method \Aws\Result createKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyPairAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainEntryAsync(array $args = [])
 * @method \Aws\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Aws\Result deleteInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyPairAsync(array $args = [])
 * @method \Aws\Result detachStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachStaticIpAsync(array $args = [])
 * @method \Aws\Result downloadDefaultKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDefaultKeyPairAsync(array $args = [])
 * @method \Aws\Result getActiveNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActiveNamesAsync(array $args = [])
 * @method \Aws\Result getBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlueprintsAsync(array $args = [])
 * @method \Aws\Result getBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBundlesAsync(array $args = [])
 * @method \Aws\Result getDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAsync(array $args = [])
 * @method \Aws\Result getDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainsAsync(array $args = [])
 * @method \Aws\Result getInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAsync(array $args = [])
 * @method \Aws\Result getInstanceAccessDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAccessDetailsAsync(array $args = [])
 * @method \Aws\Result getInstanceMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceMetricDataAsync(array $args = [])
 * @method \Aws\Result getInstancePortStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancePortStatesAsync(array $args = [])
 * @method \Aws\Result getInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceSnapshotAsync(array $args = [])
 * @method \Aws\Result getInstanceSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceSnapshotsAsync(array $args = [])
 * @method \Aws\Result getInstanceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceStateAsync(array $args = [])
 * @method \Aws\Result getInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancesAsync(array $args = [])
 * @method \Aws\Result getKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPairAsync(array $args = [])
 * @method \Aws\Result getKeyPairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPairsAsync(array $args = [])
 * @method \Aws\Result getOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationAsync(array $args = [])
 * @method \Aws\Result getOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationsAsync(array $args = [])
 * @method \Aws\Result getOperationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationsForResourceAsync(array $args = [])
 * @method \Aws\Result getRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegionsAsync(array $args = [])
 * @method \Aws\Result getStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStaticIpAsync(array $args = [])
 * @method \Aws\Result getStaticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStaticIpsAsync(array $args = [])
 * @method \Aws\Result importKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyPairAsync(array $args = [])
 * @method \Aws\Result isVpcPeered(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isVpcPeeredAsync(array $args = [])
 * @method \Aws\Result openInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openInstancePublicPortsAsync(array $args = [])
 * @method \Aws\Result peerVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise peerVpcAsync(array $args = [])
 * @method \Aws\Result putInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInstancePublicPortsAsync(array $args = [])
 * @method \Aws\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Aws\Result releaseStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseStaticIpAsync(array $args = [])
 * @method \Aws\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Aws\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Aws\Result unpeerVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unpeerVpcAsync(array $args = [])
 * @method \Aws\Result updateDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainEntryAsync(array $args = [])
 */
class LightsailClient extends AwsClient {}

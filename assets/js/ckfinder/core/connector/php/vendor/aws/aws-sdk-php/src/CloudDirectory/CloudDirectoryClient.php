<?php
namespace Aws\CloudDirectory;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon CloudDirectory** service.
 * @method \Aws\Result addFacetToObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addFacetToObjectAsync(array $args = [])
 * @method \Aws\Result applySchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applySchemaAsync(array $args = [])
 * @method \Aws\Result attachObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachObjectAsync(array $args = [])
 * @method \Aws\Result attachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachPolicyAsync(array $args = [])
 * @method \Aws\Result attachToIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachToIndexAsync(array $args = [])
 * @method \Aws\Result attachTypedLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachTypedLinkAsync(array $args = [])
 * @method \Aws\Result batchRead(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchReadAsync(array $args = [])
 * @method \Aws\Result batchWrite(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchWriteAsync(array $args = [])
 * @method \Aws\Result createDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDirectoryAsync(array $args = [])
 * @method \Aws\Result createFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFacetAsync(array $args = [])
 * @method \Aws\Result createIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createIndexAsync(array $args = [])
 * @method \Aws\Result createObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createObjectAsync(array $args = [])
 * @method \Aws\Result createSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSchemaAsync(array $args = [])
 * @method \Aws\Result createTypedLinkFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTypedLinkFacetAsync(array $args = [])
 * @method \Aws\Result deleteDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDirectoryAsync(array $args = [])
 * @method \Aws\Result deleteFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFacetAsync(array $args = [])
 * @method \Aws\Result deleteObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteObjectAsync(array $args = [])
 * @method \Aws\Result deleteSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSchemaAsync(array $args = [])
 * @method \Aws\Result deleteTypedLinkFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTypedLinkFacetAsync(array $args = [])
 * @method \Aws\Result detachFromIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachFromIndexAsync(array $args = [])
 * @method \Aws\Result detachObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachObjectAsync(array $args = [])
 * @method \Aws\Result detachPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachPolicyAsync(array $args = [])
 * @method \Aws\Result detachTypedLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachTypedLinkAsync(array $args = [])
 * @method \Aws\Result disableDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableDirectoryAsync(array $args = [])
 * @method \Aws\Result enableDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableDirectoryAsync(array $args = [])
 * @method \Aws\Result getDirectory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDirectoryAsync(array $args = [])
 * @method \Aws\Result getFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getFacetAsync(array $args = [])
 * @method \Aws\Result getObjectInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getObjectInformationAsync(array $args = [])
 * @method \Aws\Result getSchemaAsJson(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getSchemaAsJsonAsync(array $args = [])
 * @method \Aws\Result getTypedLinkFacetInformation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getTypedLinkFacetInformationAsync(array $args = [])
 * @method \Aws\Result listAppliedSchemaArns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAppliedSchemaArnsAsync(array $args = [])
 * @method \Aws\Result listAttachedIndices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAttachedIndicesAsync(array $args = [])
 * @method \Aws\Result listDevelopmentSchemaArns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDevelopmentSchemaArnsAsync(array $args = [])
 * @method \Aws\Result listDirectories(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDirectoriesAsync(array $args = [])
 * @method \Aws\Result listFacetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFacetAttributesAsync(array $args = [])
 * @method \Aws\Result listFacetNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFacetNamesAsync(array $args = [])
 * @method \Aws\Result listIncomingTypedLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIncomingTypedLinksAsync(array $args = [])
 * @method \Aws\Result listIndex(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listIndexAsync(array $args = [])
 * @method \Aws\Result listObjectAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectAttributesAsync(array $args = [])
 * @method \Aws\Result listObjectChildren(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectChildrenAsync(array $args = [])
 * @method \Aws\Result listObjectParentPaths(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectParentPathsAsync(array $args = [])
 * @method \Aws\Result listObjectParents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectParentsAsync(array $args = [])
 * @method \Aws\Result listObjectPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listObjectPoliciesAsync(array $args = [])
 * @method \Aws\Result listOutgoingTypedLinks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listOutgoingTypedLinksAsync(array $args = [])
 * @method \Aws\Result listPolicyAttachments(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPolicyAttachmentsAsync(array $args = [])
 * @method \Aws\Result listPublishedSchemaArns(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listPublishedSchemaArnsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTypedLinkFacetAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypedLinkFacetAttributesAsync(array $args = [])
 * @method \Aws\Result listTypedLinkFacetNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTypedLinkFacetNamesAsync(array $args = [])
 * @method \Aws\Result lookupPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise lookupPolicyAsync(array $args = [])
 * @method \Aws\Result publishSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise publishSchemaAsync(array $args = [])
 * @method \Aws\Result putSchemaFromJson(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putSchemaFromJsonAsync(array $args = [])
 * @method \Aws\Result removeFacetFromObject(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeFacetFromObjectAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateFacetAsync(array $args = [])
 * @method \Aws\Result updateObjectAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateObjectAttributesAsync(array $args = [])
 * @method \Aws\Result updateSchema(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSchemaAsync(array $args = [])
 * @method \Aws\Result updateTypedLinkFacet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTypedLinkFacetAsync(array $args = [])
 */
class CloudDirectoryClient extends AwsClient {}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/photos/library/v1/photos_library.proto

namespace Google\Photos\Library\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of a media item (such as a photo or video) in Google Photos.
 *
 * Generated from protobuf message <code>google.photos.library.v1.MediaItem</code>
 */
class MediaItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Identifier for the media item. This is a persistent identifier that can be
     * used between sessions to identify this media item.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Description of the media item. This is shown to the user in the item's
     * info section in the Google Photos app.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Google Photos URL for the media item. This link is available to
     * the user only if they're signed in.
     *
     * Generated from protobuf field <code>string product_url = 3;</code>
     */
    private $product_url = '';
    /**
     * A URL to the media item's bytes. This shouldn't be used directly to access
     * the media item. For example, `'=w2048-h1024'` will set the dimensions of a
     * media item of type photo to have a width of 2048 px and height of 1024 px.
     *
     * Generated from protobuf field <code>string base_url = 4;</code>
     */
    private $base_url = '';
    /**
     * MIME type of the media item. For example, `image/jpeg`.
     *
     * Generated from protobuf field <code>string mime_type = 5;</code>
     */
    private $mime_type = '';
    /**
     * Metadata related to the media item, such as, height, width, or
     * creation time.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.MediaMetadata media_metadata = 6;</code>
     */
    private $media_metadata = null;
    /**
     * Information about the user who created this media item.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ContributorInfo contributor_info = 7;</code>
     */
    private $contributor_info = null;
    /**
     * Filename of the media item. This is shown to the user in the item's info
     * section in the Google Photos app.
     *
     * Generated from protobuf field <code>string filename = 8;</code>
     */
    private $filename = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Identifier for the media item. This is a persistent identifier that can be
     *           used between sessions to identify this media item.
     *     @type string $description
     *           Description of the media item. This is shown to the user in the item's
     *           info section in the Google Photos app.
     *     @type string $product_url
     *           Google Photos URL for the media item. This link is available to
     *           the user only if they're signed in.
     *     @type string $base_url
     *           A URL to the media item's bytes. This shouldn't be used directly to access
     *           the media item. For example, `'=w2048-h1024'` will set the dimensions of a
     *           media item of type photo to have a width of 2048 px and height of 1024 px.
     *     @type string $mime_type
     *           MIME type of the media item. For example, `image/jpeg`.
     *     @type \Google\Photos\Library\V1\MediaMetadata $media_metadata
     *           Metadata related to the media item, such as, height, width, or
     *           creation time.
     *     @type \Google\Photos\Library\V1\ContributorInfo $contributor_info
     *           Information about the user who created this media item.
     *     @type string $filename
     *           Filename of the media item. This is shown to the user in the item's info
     *           section in the Google Photos app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Photos\Library\V1\PhotosLibrary::initOnce();
        parent::__construct($data);
    }

    /**
     * Identifier for the media item. This is a persistent identifier that can be
     * used between sessions to identify this media item.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Identifier for the media item. This is a persistent identifier that can be
     * used between sessions to identify this media item.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Description of the media item. This is shown to the user in the item's
     * info section in the Google Photos app.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Description of the media item. This is shown to the user in the item's
     * info section in the Google Photos app.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Google Photos URL for the media item. This link is available to
     * the user only if they're signed in.
     *
     * Generated from protobuf field <code>string product_url = 3;</code>
     * @return string
     */
    public function getProductUrl()
    {
        return $this->product_url;
    }

    /**
     * Google Photos URL for the media item. This link is available to
     * the user only if they're signed in.
     *
     * Generated from protobuf field <code>string product_url = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProductUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_url = $var;

        return $this;
    }

    /**
     * A URL to the media item's bytes. This shouldn't be used directly to access
     * the media item. For example, `'=w2048-h1024'` will set the dimensions of a
     * media item of type photo to have a width of 2048 px and height of 1024 px.
     *
     * Generated from protobuf field <code>string base_url = 4;</code>
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->base_url;
    }

    /**
     * A URL to the media item's bytes. This shouldn't be used directly to access
     * the media item. For example, `'=w2048-h1024'` will set the dimensions of a
     * media item of type photo to have a width of 2048 px and height of 1024 px.
     *
     * Generated from protobuf field <code>string base_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_url = $var;

        return $this;
    }

    /**
     * MIME type of the media item. For example, `image/jpeg`.
     *
     * Generated from protobuf field <code>string mime_type = 5;</code>
     * @return string
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * MIME type of the media item. For example, `image/jpeg`.
     *
     * Generated from protobuf field <code>string mime_type = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkString($var, True);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Metadata related to the media item, such as, height, width, or
     * creation time.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.MediaMetadata media_metadata = 6;</code>
     * @return \Google\Photos\Library\V1\MediaMetadata
     */
    public function getMediaMetadata()
    {
        return $this->media_metadata;
    }

    /**
     * Metadata related to the media item, such as, height, width, or
     * creation time.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.MediaMetadata media_metadata = 6;</code>
     * @param \Google\Photos\Library\V1\MediaMetadata $var
     * @return $this
     */
    public function setMediaMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Library\V1\MediaMetadata::class);
        $this->media_metadata = $var;

        return $this;
    }

    /**
     * Information about the user who created this media item.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ContributorInfo contributor_info = 7;</code>
     * @return \Google\Photos\Library\V1\ContributorInfo
     */
    public function getContributorInfo()
    {
        return $this->contributor_info;
    }

    /**
     * Information about the user who created this media item.
     *
     * Generated from protobuf field <code>.google.photos.library.v1.ContributorInfo contributor_info = 7;</code>
     * @param \Google\Photos\Library\V1\ContributorInfo $var
     * @return $this
     */
    public function setContributorInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Photos\Library\V1\ContributorInfo::class);
        $this->contributor_info = $var;

        return $this;
    }

    /**
     * Filename of the media item. This is shown to the user in the item's info
     * section in the Google Photos app.
     *
     * Generated from protobuf field <code>string filename = 8;</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Filename of the media item. This is shown to the user in the item's info
     * section in the Google Photos app.
     *
     * Generated from protobuf field <code>string filename = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename = $var;

        return $this;
    }

}


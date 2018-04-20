<?php

namespace LaxCorp\CatalogHostingBundle\Model;

use JMS\Serializer\Annotation as Serializer;
use LaxCorp\CatalogHostingBundle\Util\ConvertUtil;

/**
 * @inheritdoc
 */
class Version
{

    /**
     * @var string
     *
     * @Serializer\SerializedName("branch")
     * @Serializer\Type("string")
     */
    private $branch;

    /**
     * @var int
     *
     * @Serializer\SerializedName("revision")
     * @Serializer\Type("integer")
     */
    private $revision;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("revisionAt")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getRevisionAtAccessor",setter="setRevisionAtAccessor")
     */
    private $revisionAt;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("deployAt")
     * @Serializer\Type("integer")
     * @Serializer\Accessor(getter="getDeployAtAccessor",setter="setDeployAtAccessor")
     */
    private $deployAt;

    /**
     * @return string
     */
    public function getBranch()
    {
        return $this->branch;
    }

    /**
     * @inheritdoc
     */
    public function setBranch($branch)
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * @inheritdoc
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * @return string
     */
    public function getRevisionAt()
    {
        return $this->revisionAt;
    }

    /**
     * @inheritdoc
     */
    public function getRevisionAtAccessor()
    {
        return ConvertUtil::dateLong($this->revisionAt);
    }

    /**
     * @inheritdoc
     */
    public function setRevisionAt($revisionAt)
    {
        $this->revisionAt = $revisionAt;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setRevisionAtAccessor($revisionAt)
    {
        $this->revisionAt = ConvertUtil::longDate($revisionAt);

        return $this;
    }

    /**
     * @return string
     */
    public function getDeployAt()
    {
        return $this->deployAt;
    }

    /**
     * @inheritdoc
     */
    public function getDeployAtAccessor()
    {
        return ConvertUtil::dateLong($this->deployAt);
    }

    /**
     * @param string $deployAt
     *
     * @return Version
     */
    public function setDeployAt($deployAt)
    {
        $this->deployAt = $deployAt;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function setDeployAtAccessor($deployAt)
    {
        $this->deployAt = ConvertUtil::longDate($deployAt);

        return $this;
    }

}

<?php
/**
 * The Opencode Support package
 *
 * @package     Opencode/Support
 * @copyright   2019 (c) Douglas Alves
 * @author      Douglas Alves <https://github.com/alvesdouglaz/>
 * @link        https://github.com/alvesdouglaz/opencode-Support
 * @license     https://github.com/alvesdouglaz/opencode-Support/blob/master/LICENSE Apache-2.0
 * @version     1.0.0
 */

namespace Opencode\Support\Auth\Access
{

    use Opencode\Contracts\Auth\Access\ResourceAcl as ResourceAclContract;

    /**
     * Resource Support to Acl
     *
     * @package     Opencode/Support
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    class ResourceAcl implements ResourceAclContract
    {
        /** @var string*/
        private $name;

        /** @var string*/
        private $owner;

        /**
         * ResourceAcl constructor.
         *
         * @param string|null $name
         * @param string|null $owner
         */
        public function __construct(string $name = null, string $owner = null)
        {
            $this->name = $name;
            $this->owner = $owner;

            return $this;
        }

        /**
         * @return string
         */
        public function getName() : string
        {
            return $this->name;
        }

        /**
         * @param string $name
         * @return ResourceAcl
         */
        public function setName(string $name) : ResourceAcl
        {
            $this->name = $name;
            return $this;
        }

        /**
         * @return string
         */
        public function getOwner() : string
        {
            return $this->owner;
        }

        /**
         * @param string $owner
         * @return ResourceAcl
         */
        public function setOwner(string $owner): ResourceAcl
        {
            $this->owner = $owner;
            return $this;
        }
    }
}
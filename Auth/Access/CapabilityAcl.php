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

    use Opencode\Contracts\Auth\Access\CapabilityAcl as CapabilityAclContract;

    /**
     * Capability Support to Acl
     *
     * @package     Opencode/Support
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    abstract class CapabilityAcl implements CapabilityAclContract
    {
        private $name;

        /**
         * CapabilityAcl constructor.
         *
         * @param string|null $name
         */
        public function __construct(string $name = null)
        {
            $this->name = $name;
            return $this;
        }

        /**
         * Return the capability name
         *
         * @return string
         */
        public function getName(): string
        {
            return $this->name;
        }

        /**
         * Set the capability name
         * @param string $name
         * @return CapabilityAcl
         */
        public function setName(string $name) : CapabilityAcl
        {
            $this->name = $name;
            return $this;
        }
    }
}
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

    use Opencode\Contracts\Auth\Access\RoleAcl as RoleAclContract;

    /**
     * Role Support to Acl
     *
     * @package     Opencode/Support
     * @author      Douglas Alves <https://github.com/alvesdouglaz/>
     * @since       1.0.0
     */
    abstract class RoleAcl implements RoleAclContract
    {
        /** @var string */
        private $name;

        /** @var  RoleAcl */
        private $parent;

        /** @var array */
        private $capabilities = [];

        /**
         * RoleAcl constructor.
         *
         * @param string|null $name
         * @return RoleAcl
         */
        public function __construct(string $name = null)
        {
            $this->name = $name;
            return $this;
        }

        /**
         * Add new capabilities
         *
         * @param array $capabilities
         * @return RoleAcl
         */
        public function addCapabilities(array $capabilities) : RoleAcl
        {
            $this->capabilities = array_merge($this->capabilities, $capabilities);

            return $this;
        }

        /**
         * @return array
         */
        public function capabilities() : array
        {
            return $this->capabilities;
        }
    }
}
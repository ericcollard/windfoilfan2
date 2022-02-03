<?php

namespace App\Role;

/***
 * Class UserRole
 * @package App\Role
 */
class UserRole {

    const ROLE_ADMIN = 'ROLE_ADMIN';
    const ROLE_EDITOR = 'ROLE_EDITOR';
    const ROLE_CONTRIBUTOR = 'ROLE_CONTRIBUTOR';
    const ROLE_VISITOR = 'ROLE_VISITOR';

    /**
     * @var array
     */
    protected static $roleHierarchy = [
        self::ROLE_ADMIN => [
            self::ROLE_EDITOR,
            self::ROLE_CONTRIBUTOR,
            self::ROLE_VISITOR,
        ],
        self::ROLE_EDITOR => [
            self::ROLE_CONTRIBUTOR,
            self::ROLE_VISITOR,
        ],
        self::ROLE_CONTRIBUTOR => [
            self::ROLE_VISITOR
        ],
        self::ROLE_VISITOR => []
    ];

    /**
     * @param string $role
     * @return array
     */
    public static function getAllowedRoles(string $role): array
    {
        if (isset(self::$roleHierarchy[$role])) {
            return self::$roleHierarchy[$role];
        }

        return [];
    }

    /***
     * @return array
     */
    public static function getRoleList(): array
    {
        return [
            static::ROLE_ADMIN =>'Admin',
            static::ROLE_EDITOR => 'Editor',
            static::ROLE_CONTRIBUTOR => 'Contributor',
            static::ROLE_VISITOR => 'Visitor',

        ];
    }

}

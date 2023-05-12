<?php

namespace Logotel\ChallengeMidDev\Challenge08;

class ACL {
    private $roles = [];
    private $permissions = [];
    private $users = [];
  
    function __construct() {
      // Constructor code here
    }
  
    function addRole($role) {
      // Add a new role
    }
  
    function editRole($role) {
      // Edit an existing role
    }
  
    function deleteRole($role) {
      // Delete an existing role
    }
  
    function addPermission($permission) {
      // Add a new permission
    }
  
    function editPermission($permission) {
      // Edit an existing permission
    }
  
    function deletePermission($permission) {
      // Delete an existing permission
    }
  
    function assignRoleToUser($user, $role) {
      // Assign a role to a user
    }
  
    function checkAccess($user, $permission) {
      // Check whether a user has access to a certain permission
    }
}
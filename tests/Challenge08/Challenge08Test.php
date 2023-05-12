<?php

namespace Logotel\ChallengeMidDev\Tests\Challenge08;

use Logotel\ChallengeMidDev\Challenge08\ACL;
use PHPUnit\Framework\TestCase;

class Challenge08Test extends TestCase
{

    private $acl;

    protected function setUp() : void {
        $this->acl = new ACL();
    }

    public function testAddRole() {
        $this->acl->addRole('admin');
        $this->assertContains('admin', $this->acl->getRoles());
    }

    public function testEditRole() {
        $this->acl->addRole('admin');
        $this->acl->editRole('admin', 'superadmin');
        $this->assertContains('superadmin', $this->acl->getRoles());
    }

    public function testDeleteRole() {
        $this->acl->addRole('admin');
        $this->acl->deleteRole('admin');
        $this->assertNotContains('admin', $this->acl->getRoles());
    }

    public function testAddPermission() {
        $this->acl->addPermission('edit_page');
        $this->assertContains('edit_page', $this->acl->getPermissions());
    }

    public function testEditPermission() {
        $this->acl->addPermission('edit_page');
        $this->acl->editPermission('edit_page', 'delete_page');
        $this->assertContains('delete_page', $this->acl->getPermissions());
    }

    public function testDeletePermission() {
        $this->acl->addPermission('edit_page');
        $this->acl->deletePermission('edit_page');
        $this->assertNotContains('edit_page', $this->acl->getPermissions());
    }

    public function testAssignRoleToUser() {
        $this->acl->addRole('admin');
        $this->acl->assignRoleToUser('user1', 'admin');
        $this->assertContains('admin', $this->acl->getUserRoles('user1'));
    }

    public function testCheckAccess() {
        $this->acl->addRole('admin');
        $this->acl->addPermission('edit_page');
        $this->acl->assignRoleToUser('user1', 'admin');
        $this->acl->assignPermissionToRole('edit_page', 'admin');
        $this->assertTrue($this->acl->checkAccess('user1', 'edit_page'));
        $this->assertFalse($this->acl->checkAccess('user2', 'edit_page'));
    }
    
}
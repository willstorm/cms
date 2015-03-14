<?php
namespace Cms\CoreBundle\DataFixtures\ORM;

use Cms\CoreBundle\Entity\Role;
use Cms\CoreBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $role = new Role();
        $role->setCode('super')
             ->setName('Super Usuário');

        $user = new User();
        $user->setName('Administrador')
             ->setEmail('contato@agenciamilagro.com.br')
             ->setPassword('a12345@')
             ->setRole($role)
             ->setActive(true);

        $manager->persist($role);
        $manager->persist($user);
        $manager->flush();
    }
}
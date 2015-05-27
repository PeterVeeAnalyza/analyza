<?php

namespace App\Model;

use Nette,
    Nette\Security\Passwords;

/**
 * Users management.
 */
class UserManager extends Nette\Object implements Nette\Security\IAuthenticator {

    /** @var Kdyby\Doctrine\EntityManager */
    private $database;

    public function __construct(\Kdyby\Doctrine\EntityManager $database) {
        $this->database = $database;
    }

    /**
     * Performs an authentication.
     * @return Nette\Security\Identity
     * @throws Nette\Security\AuthenticationException
     */
    public function authenticate(array $credentials) {
        list($name, $password) = $credentials;

        $row = $this->database->getDao(\App\Model\Users::getClassName())->findOneBy(array('name' => $name));

        if (!$row) {
            throw new Nette\Security\AuthenticationException('Byly zadanĂ© ĹˇpatnĂ© Ăşdaje !', self::IDENTITY_NOT_FOUND);
        } elseif (!Passwords::verify($password, $row->getPassword())) {
            throw new Nette\Security\AuthenticationException('Byly zadanĂ© ĹˇpatnĂ© Ăşdaje !', self::INVALID_CREDENTIAL);
        } elseif (Passwords::needsRehash($row->getPassword())) {
            $row->setPassword(Passwords::hash($password));
            $this->database->flush();
        }


        return new Nette\Security\Identity($row->getId(), [], []);
    }

}

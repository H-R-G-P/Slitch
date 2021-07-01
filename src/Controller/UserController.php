<?php


namespace App\Controller;

use App\Entity\Users;
use App\Repository\UsersRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\User;

/**
 * Class UserController
 * @Route("/user")
 * @package App\Controller
 */
class UserController extends AbstractController
{
    /**
     * @Route("/register", name="user_register", methods={"POST"})
     */
    public function register() : Response
    {
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        // Init data
        $data = [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
        ];

        // Validate Email
        if (empty($data['email']))
        {
            $data['email_err'] = 'Please enter email';
        }
        else
        {
            // Check email
            if ($this->getDoctrine()
                ->getRepository(Users::class)
                ->findBy(['email' => $data['email']])
            )
            {
                $data['email_err'] = 'Email is already taken';
            }
        }

        // Validate name
        if (empty($data['name']))
        {
            $data['name_err'] = 'Please enter name';
        }

        // Validate Password
        if (empty($data['password']))
        {
            $data['password_err'] = 'Please enter password';
        }
        elseif (strlen($data['password']) < 6)
        {
            $data['password_err'] = 'Password must be at least 6 characters';
        }

        // Validate Confirm Password
        if (empty($data['confirm_password']))
        {
            $data['confirm_password_err'] = 'Please confirm password';
        }
        else
        {
            if ($data['password'] !== $data['confirm_password'])
            {
                $data['confirm_password_err'] = 'Password do not match';
            }
        }

        // Make sure errors are empty
        if (empty($data['email_err']) &&
            empty($data['name_err']) &&
            empty($data['password_err']) &&
            empty($data['confirm_password_err']))
        {
            // Validated
            // Hash Password
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            // Register User
            $entityManager = $this->getDoctrine()->getManager();

            $user = new Users();
            $user->setName($data['name']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setCreatedAt(new \DateTime());

            $entityManager->persist($user);
            $entityManager->flush();
//                Helper::flash('register_success', 'You are Registered and can log in');
            return $this->redirectToRoute('user_login');
        }
        else
        {
            // Load view with errors
            return $this->render('user/register.html.twig', $data);
        }
    }

    /**
     * @Route("/register", name="user_register_form", methods={"GET"})
     */
    public function formRegister() : Response
    {
        $data = [
            'name' => '',
            'email' => '',
            'password' => '',
            'confirm_password' => '',
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
        ];

        return $this->render('user/register.html.twig', $data);
    }

    /**
     * @Route("/login", name="user_login", methods={"POST"})
     */
    public function login() : Response
    {
        return new Response();
    }

    /**
     * @Route("/login", name="user_login_form", methods={"GET"})
     */
    public function formLogin() : Response
    {
        return new Response();
    }

    /**
     * @Route("/logout", name="user_logout", methods={"GET"})
     */
    public function logout() : Response
    {
        return new Response();
    }
}
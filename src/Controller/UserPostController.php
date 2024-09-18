<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\UserRepository;

class UserPostController extends AbstractController
{
    #[Route('/user/post', name: 'app_user_post')]
    public function index(UserRepository $userRepository): Response
    {
        $genderStats = $userRepository->countByGender();

        return $this->render('user_post/index.html.twig', [
            'genderStats' => $genderStats,
        ]);
    }
}

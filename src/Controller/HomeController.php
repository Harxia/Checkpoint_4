<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ResumeRepository;
use App\Repository\ExperienceRepository;
use App\Repository\EducationRepository;
use App\Repository\SchoolRepository;
use App\Repository\ContactRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ResumeRepository $resumeRepository,
        ExperienceRepository $experienceRepository,
        EducationRepository $educationRepository,
        SchoolRepository $schoolRepository,
        ContactRepository $contactRepository
    ): Response {
        return $this->render('home/index.html.twig', [
            'resume' => $resumeRepository->findOneBy(['id' => 1]),
            'experience' => $experienceRepository->findOneBy(['id' => 1]),
            'education' => $educationRepository->findOneBy(['id' => 1]),
            'school' => $schoolRepository->findOneBy(['id' => 1]),
            'contact' => $contactRepository->findOneBy(['id' => 1]),
        ]);
    }
}

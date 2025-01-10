<?php

namespace App\Controller;

use App\Config\StatusType;
use App\Document\Project;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class ProjectController extends AbstractController
{
    #[Route('/project', name: 'app_project')]
    public function index(DocumentManager $dm): HttpFoundationResponse
    {
        $project = (new Project)
                 ->setName("ProjectManagment")
                 ->setDescription("Test Random Data")
                 ->setState(StatusType::PENDING);

        $dm->persist($project);
        $dm ->flush();

        return new HttpFoundationResponse("okk");
    }
}

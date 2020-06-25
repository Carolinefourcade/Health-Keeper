<?php


namespace App\Controller;


use App\Entity\MedicalRecord;
use App\Form\AnnoyanceType;
use App\Form\AnnoyanceZoneType;
use App\Form\MedicalType;
use App\Form\PainIntensityType;
use App\Repository\AnnoyanceRepository;
use App\Repository\AnnoyanceZoneRepository;
use App\Repository\PainIntensityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/medical", name="medical")
 *
 */
class MedicalRecordController extends AbstractController
{
    /**
     * @Route("/", name="_record")
     *
     * @return Response
     */

    public function index (): Response {

        $medicalRecord = new MedicalRecord();
        $formMedical = $this->createForm(MedicalType::class);


        return $this->render('medical/index.html.twig', [
            'form' => $formMedical->createView(),

        ]);

    }
}

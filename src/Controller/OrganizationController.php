<?php
/**
 * Created by PhpStorm.
 * User: sagbo
 * Date: 6/30/21
 * Time: 9:50 AM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Yaml\Yaml;

class OrganizationController extends ApiController
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function home(){
        $value = Yaml::parseFile('../config/org/organizations.yaml');
        //dd(array($value["organizations"])[0]);

        return $this->render("home.html.twig", [
            'test' => array($value["organizations"])[0]
        ]);
    }

    /**
     * @Route("/delete-org/{id}", name="delete_org_route", methods={"GET"})
     */
    public function deleteOrg($id){
        $value = Yaml::parseFile('../config/org/organizations.yaml');
        unset($value["organizations"][$id]);
        $yaml = Yaml::dump($value,8, 8);

        file_put_contents('../config/org/organizations.yaml', $yaml);

        return $this->redirectToRoute("home");
    }


    /**
     * @Route("/org/update-view/{id}", name="update_org_route", methods={"GET"})
     */
    public function updateViewOrg($id){
        $value = Yaml::parseFile('../config/org/organizations.yaml');
        //dd($value);
        return $this->render("home.html.twig", [
            'test' => $value['organizations']
        ]);
    }
}
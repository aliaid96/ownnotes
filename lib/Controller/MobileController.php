<?php
 namespace OCA\OwnNotes\Controller;

 use OCP\IRequest;
 use OCP\AppFramework\Http\TemplateResponse;
 use OCP\AppFramework\Controller;

 class MobileController extends Controller {

     public function __construct($AppName, IRequest $request){
         parent::__construct($AppName, $request);
     }
     /**
      * @NoAdminRequired
      * @NoCSRFRequired
      */
     public function index() {
         return new TemplateResponse('ownnotes', 'mobiles');
     }

 }

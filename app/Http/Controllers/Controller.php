<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Api Softmotriz",
 *      description="rutas de api para consumir",
 *      @OA\Contact(
 *          email="harveympv@hotmail.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url="http://localhost/Softmotriz/public",
 *      description=" API Server"
 * )

 * @OA\PathItem(
 *      path="/api/Schooling",
 * )
 
 *
 * @OA\Tag(
 *     name="Schooling",
 *     description="CRUD Escolaridad"
 * )
  * @OA\Tag(
 *     name="BloodType",
 *     description="CRUD Tipo de Sangre"
 * )
   * @OA\Tag(
 *     name="Conventions",
 *     description="CRUD Convenios"
 * )
   * @OA\Tag(
 *     name="DocumentType",
 *     description="CRUD Tipo de Documento"
 * )
   * @OA\Tag(
 *     name="ExaminationStatus",
 *     description="CRUD Estado Examen"
 * )
   * @OA\Tag(
 *     name="MaritalStatus",
 *     description="CRUD Estado Civil"
 * )
      * @OA\Get(
        *     tags={"Schooling"},
        *     path="/api/Schooling",
        *     summary="Mostrar todos los niveles de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Post(
        *     tags={"Schooling"},
        *     path="/api/Schooling",
        *     summary="Registrar nivel de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Put(
        *     tags={"Schooling"},
        *     path="/api/Schoolings/{Schooling_id}",
        *     summary="Actualizar nombre de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Delete(
        *     tags={"Schooling"},
        *     path="/api/Schoolings/{Schooling_id}",
        *     summary="Eliminar nivel de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Get(
        *     tags={"Schooling"},
        *     path="/api/Schoolings/{Schooling_id}",
        *     summary="Mostrar nivel de escolaridad por ID",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
    * @OA\Get(
        *     tags={"BloodType"},
        *     path="/api/BloodType",
        *     summary="Mostrar todos los niveles de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Post(
        *     tags={"BloodType"},
        *     path="/api/BloodType",
        *     summary="Registrar nivel de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Put(
        *     tags={"BloodType"},
        *     path="/api/BloodType/{BloodType_id}",
        *     summary="Actualizar nombre de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Delete(
        *     tags={"BloodType"},
        *     path="/api/BloodType/{BloodType_id}",
        *     summary="Eliminar nivel de escolaridad",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Get(
        *     tags={"BloodType"},
        *     path="/api/BloodType/{BloodType_id}",
        *     summary="Mostrar nivel de escolaridad por ID",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
  * @OA\Get(
    *     tags={"Conventions"},
    *     path="/api/Conventions",
    *     summary="Mostrar todos los niveles de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"Conventions"},
    *     path="/api/Conventions",
    *     summary="Registrar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"Conventions"},
    *     path="/api/Conventions/{Conventionsid}",
    *     summary="Actualizar nombre de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"Conventions"},
    *     path="/api/Conventions/{Conventions_id}",
    *     summary="Eliminar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"Conventions"},
    *     path="/api/Conventions/{Conventions_id}",
    *     summary="Mostrar nivel de escolaridad por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )


    * @OA\Get(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType",
    *     summary="Mostrar todos los niveles de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType",
    *     summary="Registrar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType/{DocumentType_id}",
    *     summary="Actualizar nombre de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType/{DocumentType_id}",
    *     summary="Eliminar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType/{DocumentType_id}",
    *     summary="Mostrar nivel de escolaridad por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )


    * @OA\Get(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus",
    *     summary="Mostrar todos los niveles de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus",
    *     summary="Registrar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus/{ExaminationStatus_id}",
    *     summary="Actualizar nombre de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus/{ExaminationStatus_id}",
    *     summary="Eliminar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus/{ExaminationStatus_id}",
    *     summary="Mostrar nivel de escolaridad por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )


    * @OA\Get(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus",
    *     summary="Mostrar todos los niveles de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus",
    *     summary="Registrar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus/{MaritalStatus_id}",
    *     summary="Actualizar nombre de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus/{MaritalStatus_id}",
    *     summary="Eliminar nivel de escolaridad",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus/{MaritalStatus_id}",
    *     summary="Mostrar nivel de escolaridad por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
 
*/
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

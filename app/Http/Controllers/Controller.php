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
 *      url="https://apis.softmotriz.com",
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
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *              required={"level_schooling"},
        *              @OA\Property(property="level_schooling", type="string", format="email", example="Primaria"),
        *          )
        *     ),
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )      
        * )
        * @OA\Put(
        *     tags={"Schooling"},
        *     path="/api/Schoolings/{Schooling_id}",
        *     summary="Actualizar nombre de escolaridad",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *              required={"level_schooling"},
        *              @OA\Property(property="level_schooling", type="string", format="email", example="Primaria"),
        *          )
        *     ),
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
        *     summary="Mostrar todos los tipo de sangre",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Post(
        *     tags={"BloodType"},
        *     path="/api/BloodType",
        *     summary="Registrar tipo de sangre",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *              required={"type"},
        *              @OA\Property(property="type", type="string", format="email", example="O+"),
        *          )
        *     ),
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Put(
        *     tags={"BloodType"},
        *     path="/api/BloodType/{BloodType_id}",
        *     summary="Actualizar tipo de sangre",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *              required={"type"},
        *              @OA\Property(property="type", type="string", format="email", example="A-"),
        *          )
        *     ),
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Delete(
        *     tags={"BloodType"},
        *     path="/api/BloodType/{BloodType_id}",
        *     summary="Eliminar tipo de sangre",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
        * @OA\Get(
        *     tags={"BloodType"},
        *     path="/api/BloodType/{BloodType_id}",
        *     summary="Mostrar tipo de sangre por ID",
        *     @OA\Response(
        *         response=200,
        *         description="Mostrar todos los usuarios."
        *     )
        * )
  * @OA\Get(
    *     tags={"Conventions"},
    *     path="/api/Conventions",
    *     summary="Mostrar todos los convenios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"Conventions"},
    *     path="/api/Conventions",
    *     summary="Registrar los convenios",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *              required={"company_name"},
        *              @OA\Property(property="company_name", type="string", format="text", example="HACHE"),
        *              @OA\Property(property="nit", type="string", format="text", example="12345678"),
        *                @OA\Property(property="address", type="string", format="text", example="mf k rosas"),
        *                @OA\Property(property="department", type="string", format="text", example="Nariño"),
        *                @OA\Property(property="city", type="string", format="text", example="Pasto"),
        *                @OA\Property(property="phone", type="string", format="text", example="3225785525"),
        *                @OA\Property(property="representative", type="string", format="text", example="Kira"),
        *                @OA\Property(property="state", type="string", format="text", example="Activo"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"Conventions"},
    *     path="/api/Conventions/{Conventionsid}",
    *     summary="Actualizar los convenios",
          *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *              required={"level_schooling"},
        *             @OA\Property(property="company_name", type="string", format="text", example="HACHE"),
        *              @OA\Property(property="nit", type="string", format="text", example="12345678"),
        *                @OA\Property(property="address", type="string", format="text", example="mf k rosas"),
        *                @OA\Property(property="department", type="string", format="text", example="Nariño"),
        *                @OA\Property(property="city", type="string", format="text", example="Pasto"),
        *                @OA\Property(property="phone", type="string", format="text", example="3225785525"),
        *                @OA\Property(property="representative", type="string", format="text", example="Kira"),
        *                @OA\Property(property="state", type="string", format="text", example="Activo"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"Conventions"},
    *     path="/api/Conventions/{Conventions_id}",
    *     summary="Eliminar los convenios",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"Conventions"},
    *     path="/api/Conventions/{Conventions_id}",
    *     summary="Mostrar los convenios por  ID",
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
    *     summary="Registrar tipo de documento",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *                required={"type"},
        *              @OA\Property(property="type", type="string", format="email", example="CC"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType/{DocumentType_id}",
    *     summary="Actualizar tipo de documento",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
       *                required={"type"},
        *              @OA\Property(property="type", type="string", format="email", example="CC"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType/{DocumentType_id}",
    *     summary="Eliminar tipo de documento",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"DocumentType"},
    *     path="/api/DocumentType/{DocumentType_id}",
    *     summary="Mostrar tipo de documento por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )


    * @OA\Get(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus",
    *     summary="Mostrar todos los estados de examen",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus",
    *     summary="Registrar estados de examen",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *                required={"state"},
        *              @OA\Property(property="state", type="string", format="email", example="Aprobado"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus/{ExaminationStatus_id}",
    *     summary="Actualizar estados de examen",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *                required={"state"},
        *              @OA\Property(property="state", type="string", format="email", example="Aprobado"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus/{ExaminationStatus_id}",
    *     summary="Eliminar estados de examen",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"ExaminationStatus"},
    *     path="/api/ExaminationStatus/{ExaminationStatus_id}",
    *     summary="Mostrar estados de examen por ID",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )


    * @OA\Get(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus",
    *     summary="Mostrar estado civil",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Post(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus",
    *     summary="Registrar estado civil",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *                required={"state"},
        *              @OA\Property(property="state", type="string", format="email", example="Casado"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
     * @OA\Put(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus/{MaritalStatus_id}",
    *     summary="Actualizar estado civil",
        *     @OA\RequestBody(
        *          required=true,
        *          description="dato enviar por formulario",
        *          @OA\JsonContent(
        *                required={"state"},
        *              @OA\Property(property="state", type="string", format="email", example="Casado"),
        *          )
        *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Delete(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus/{MaritalStatus_id}",
    *     summary="Eliminar estado civil",
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar todos los usuarios."
    *     )
    * )
    * @OA\Get(
    *     tags={"MaritalStatus"},
    *     path="/api/MaritalStatus/{MaritalStatus_id}",
    *     summary="Mostrar estado civil por ID",
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

<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\UserRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'fieldName' => 'id',
   'type' => 'integer',
   'id' => true,
   'columnName' => 'id',
  ));
$metadata->mapField(array(
   'columnName' => 'nombre_completo',
   'fieldName' => 'nombreCompleto',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'username',
   'fieldName' => 'username',
   'type' => 'string',
   'length' => '50',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'email',
   'fieldName' => 'email',
   'type' => 'string',
   'length' => 255,
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'contrasenya',
   'fieldName' => 'contrasenya',
   'type' => 'string',
   'length' => '50',
  ));
$metadata->mapField(array(
   'columnName' => 'fecha_registro',
   'fieldName' => 'fechaRegistro',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'ciudad',
   'fieldName' => 'ciudad',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'rol',
   'fieldName' => 'rol',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'creditos',
   'fieldName' => 'creditos',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'imagen',
   'fieldName' => 'imagen',
   'type' => 'integer',
  ));
$metadata->mapField(array(
   'columnName' => 'sexo',
   'fieldName' => 'sexo',
   'type' => 'string',
   'length' => '10',
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
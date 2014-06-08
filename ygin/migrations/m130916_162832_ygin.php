<?php

class m130916_162832_ygin extends CDbMigration {
  public function safeUp() {
    
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='20', `id_parameter`='63', `id_parameter_type`=11, `sequence`=1, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_object', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='name', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД объекта в виде строки. Например для новостей ИД будет равен ygin-news  Префикс ygin зарезервирован для системных объектов, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='20' AND `da_object_parameters`.`id_parameter`='63'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='21', `id_parameter`='74', `id_parameter_type`=11, `sequence`=6, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_parameter', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='field_name/caption; id_object', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД свойства объекта в виде строки. Например для заголовка новостей ИД будет равен ygin-news-title  Префикс ygin зарезервирован для системных свойств, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='21' AND `da_object_parameters`.`id_parameter`='74'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='63', `id_parameter`='400', `id_parameter_type`=11, `sequence`=1, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_object_view', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='name; id_object; view', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД представления объекта в виде строки. Обычно имеет имя ygin-news-view-main  Префикс ygin зарезервирован для системных представлений, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='63' AND `da_object_parameters`.`id_parameter`='400'");
    $this->execute("UPDATE `da_object_parameters` SET `sequence`=1 WHERE `da_object_parameters`.`id_object`='63' AND `da_object_parameters`.`id_parameter`='406'");
    $this->execute("UPDATE `da_object_parameters` SET `sequence`=2 WHERE `da_object_parameters`.`id_object`='63' AND `da_object_parameters`.`id_parameter`='400'");
    $this->execute("UPDATE `da_object_parameters` SET `sequence`=3 WHERE `da_object_parameters`.`id_object`='63' AND `da_object_parameters`.`id_parameter`='410'");
    $this->execute("UPDATE `da_object_parameters` SET `sequence`=4 WHERE `da_object_parameters`.`id_object`='63' AND `da_object_parameters`.`id_parameter`='411'");
    $this->execute("UPDATE `da_object_parameters` SET `sequence`=5 WHERE `da_object_parameters`.`id_object`='63' AND `da_object_parameters`.`id_parameter`='401'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='66', `id_parameter`='415', `id_parameter_type`=11, `sequence`=1, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_object_view_column', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='field_name/caption; id_object_view', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД колонки представления. Например для заголовка новости ИД будет равен ygin-news-view-main-title    Префикс ygin зарезервирован для системных колонок, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='66' AND `da_object_parameters`.`id_parameter`='415'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='27', `id_parameter`='109', `id_parameter_type`=11, `sequence`=8, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_reference', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='name;-; reference', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД справочника. Например ygin-shop-reference-orderStatus  Префикс ygin зарезервирован для системных справочников, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='27' AND `da_object_parameters`.`id_parameter`='109'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='28', `id_parameter`='111', `id_parameter_type`=11, `sequence`=1, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_reference_element_instance', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='value; id_reference', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД элемента справочника. Например ygin-shop-reference-orderStatus-new  Префикс ygin зарезервирован для системных справочников, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='28' AND `da_object_parameters`.`id_parameter`='111'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='30', `id_parameter`='116', `id_parameter_type`=11, `sequence`=8, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_system_parameter', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='name;-;parameter', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД системного параметра. Например ygin-parameter-phone   Префикс ygin зарезервирован для системных параметров, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='30' AND `da_object_parameters`.`id_parameter`='116'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='51', `id_parameter`='267', `id_parameter_type`=11, `sequence`=1, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_job', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='name;-;job', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД задачи планировщика. Например для отправки уведомлений это будет ygin-job-sendMail   Префикс ygin зарезервирован для системных задач, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='51' AND `da_object_parameters`.`id_parameter`='267'");
    $this->execute("UPDATE `da_object_parameters` SET `id_object`='80', `id_parameter`='338', `id_parameter_type`=11, `sequence`=1, `widget`='backend.backend.objectParameter.autoPrimaryKey.AutoPrimaryKeyWidget', `caption`='id', `field_name`='id_php_script_type', `add_parameter`='1', `default_value`=NULL, `not_null`=1, `sql_parameter`='description; -; php', `is_unique`=0, `group_type`=0, `need_locale`=0, `search`=0, `is_additional`=0, `hint`='Уникальный ИД пхп обработчика. Например для модуля новостей это будет ygin-news-module-last  Префикс ygin зарезервирован для системных обработчиков, вместо него необходимо использовать название проекта или компании.', `visible`=1 WHERE `da_object_parameters`.`id_object`='80' AND `da_object_parameters`.`id_parameter`='338'");

    $path = dirname(__FILE__)."/../../assets/";
    @HFile::removeDirectoryRecursive($path, false, false, false, array(".gitignore"));
  }

  public function safeDown() {
    echo get_class($this)." does not support migration down.\n";
    return false;
  }
}
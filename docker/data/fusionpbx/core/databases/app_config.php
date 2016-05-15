<?php

	//application details
		$apps[$x]['name'] = "Databases";
		$apps[$x]['uuid'] = "8d229b6d-1383-fcec-74c6-4ce1682479e2";
		$apps[$x]['category'] = "Core";
		$apps[$x]['subcategory'] = "";
		$apps[$x]['version'] = "";
		$apps[$x]['license'] = "Mozilla Public License 1.1";
		$apps[$x]['url'] = "http://www.fusionpbx.com";
		$apps[$x]['description']['en-us'] = "Stored database connection information.";
		$apps[$x]['description']['es-cl'] = "Información de conexiones a bases de datos";
		$apps[$x]['description']['de-de'] = "";
		$apps[$x]['description']['de-ch'] = "";
		$apps[$x]['description']['de-at'] = "";
		$apps[$x]['description']['fr-fr'] = "Information de connexions au BDD";
		$apps[$x]['description']['fr-ca'] = "";
		$apps[$x]['description']['fr-ch'] = "";
		$apps[$x]['description']['pt-pt'] = "Armazena informações de conexão com a base de dados.";
		$apps[$x]['description']['pt-br'] = "";

	//permission details
		$y = 0;
		$apps[$x]['permissions'][$y]['name'] = "database_view";
		$apps[$x]['permissions'][$y]['menu']['uuid'] = "ebbd754d-ca74-d5b1-a77e-9206ba3ecc3f";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "database_add";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "database_edit";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";
		$y++;
		$apps[$x]['permissions'][$y]['name'] = "database_delete";
		$apps[$x]['permissions'][$y]['groups'][] = "superadmin";

	//schema details
		$y = 0; //table array index
		$z = 0; //field array index
		$apps[$x]['db'][$y]['table'] = "v_databases";
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "id";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "database_connection_id";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "serial";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "integer";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "INT NOT NULL AUTO_INCREMENT PRIMARY KEY";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "database_connection_uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['pgsql'] = "uuid";
		$apps[$x]['db'][$y]['fields'][$z]['type']['sqlite'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['type']['mysql'] = "char(36)";
		$apps[$x]['db'][$y]['fields'][$z]['key']['type'] = "primary";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name'] = "v_id";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "";
		$apps[$x]['db'][$y]['fields'][$z]['deprecated'] = "true";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_driver";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the database driver.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_type";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_type";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Select the database type.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_host";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_host";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the host name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_port";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_port";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the port number.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_name";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_name";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the database name.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_username";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_username";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the database username.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_password";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_password";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the database password.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_path";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_path";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the database file path.";
		$z++;
		$apps[$x]['db'][$y]['fields'][$z]['name']['text'] = "database_description";
		$apps[$x]['db'][$y]['fields'][$z]['name']['deprecated'] = "db_description";
		$apps[$x]['db'][$y]['fields'][$z]['type'] = "text";
		$apps[$x]['db'][$y]['fields'][$z]['description']['en-us'] = "Enter the description.";
		$z++;
?>
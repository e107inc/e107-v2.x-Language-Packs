<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */
define("ADSTAT_LAN_1", "Este plugin registrar todas las visitas a su sitio, y construir pantallas de estadísticas detalladas sobre la base de la información recogida.");
define("ADSTAT_LAN_2", "El registrador de estadísticas se ha instalado correctamente. Para activar, por favor vaya a la pantalla de configuración y haga clic en Activar. <br /><B>Debe establecer los permisos en la carpeta e107_plugins/log/  a 777 (chmod 777)</ b>");
define("ADSTAT_LAN_3", "Registro de estadística");
define("ADSTAT_LAN_4", "Activar registro de estadística");
define("ADSTAT_LAN_5", "Tipos de estadística");
define("ADSTAT_LAN_6", "Navegadores");
define("ADSTAT_LAN_7", "Sistemas operativos");
define("ADSTAT_LAN_8", "Resoluciones de pantalla / profundidades");
define("ADSTAT_LAN_9", "Países/dominios visitados de");
define("ADSTAT_LAN_10", "Enlaces origen");
define("ADSTAT_LAN_11", "Consultas de búsqueda");
define("ADSTAT_LAN_12", "Reposición de estadísticas");
define("ADSTAT_LAN_13", "Esto borrará las estadísticas de todos los tiempos - cuidado! Elimina las estadísticas al final de ayer. Hay una opción de menú separado para eliminar los datos histórica seleccionada");
define("ADSTAT_LAN_14", "Recuento de páginas");
define("ADSTAT_LAN_16", "Configuración de estadística del sitio");
define("ADSTAT_LAN_18", "Permitir el acceso a la página principal de la estadística para ...");
define("ADSTAT_LAN_19", "Visitantes recientes");
define("ADSTAT_LAN_20", "Contar las visitas de administración");
define("ADSTAT_LAN_21", "Número máximo de registros para mostrar en la página de estadísticas");
define("ADSTAT_LAN_22", "Ejecución de rutina de actualización");
define("ADSTAT_LAN_23", "Se han detectado los registros desde una versión anterior de e107, actualizarlos aquí");
define("ADSTAT_LAN_24", "Ir a la secuencia de actualización");
define("ADSTAT_LAN_26", "Eliminar entradas de página");
define("ADSTAT_LAN_27", "Si sus estadísticas tienen páginas incorrectas, puede eliminarlos aquí");
define("ADSTAT_LAN_28", "Abrir la página");
define("ADSTAT_LAN_29", "Nombre de la página");
define("ADSTAT_LAN_30", "Compruebe para eliminar");
define("ADSTAT_LAN_31", "Retire las páginas seleccionadas");
define("ADSTAT_LAN_32", "Vaciar página");
define("ADSTAT_LAN_35", "Opciones");
define("ADSTAT_LAN_36", "Exportación de datos");
define("ADSTAT_LAN_38", "Hay que configurar la carpeta e107_plugins/log/logs para tener permiso de escritura");
define("ADSTAT_LAN_39", "Funciones de registro de Estadísticas");
define("ADSTAT_LAN_40", "Exportar datos de registro");
define("ADSTAT_LAN_41", "Sececión de data");
define("ADSTAT_LAN_42", "Un solo Dia");
define("ADSTAT_LAN_43", "Diario durante un mes");
define("ADSTAT_LAN_44", "Mensual durante un año");
define("ADSTAT_LAN_45", "Todo el tiempo");
define("ADSTAT_LAN_46", "Fecha:");
define("ADSTAT_LAN_47", "Fecha no válida elegido");
define("ADSTAT_LAN_48", "mensual y Todo el tiempo");
define("ADSTAT_LAN_49", "Solo Todo el tiempo");
define("ADSTAT_LAN_50", "Ninguna");
define("ADSTAT_LAN_51", "Datos resultantes");
define("ADSTAT_LAN_52", "Datos de la página");
define("ADSTAT_LAN_53", "No hay selección posible");
define("ADSTAT_LAN_54", "La selección de tipo no es válido");
define("ADSTAT_LAN_55", "Comilla simple");
define("ADSTAT_LAN_56", "Comilla doble");
define("ADSTAT_LAN_57", "Coma");
define("ADSTAT_LAN_58", "Pipe (|)");
define("ADSTAT_LAN_59", "Separador CSV, comillas");
define("ADSTAT_LAN_60", "Despojar a la dirección del sitio de las direcciones URL");
define("ADSTAT_LAN_61", "(Si se selecciona, solo da referencia de la página)");
define("ADSTAT_LAN_62", "De todos los tiempos (detallado)");
define("ADSTAT_LAN_63", "Los conjuntos de datos disponibles");
define("ADSTAT_LAN_64", "Registros de la base de datos:");
define("ADSTAT_LAN_65", "Cadena de filtro del base de datos:");
define("ADSTAT_LAN_66", "Mostrar Conjuntos de Datos");
define("ADSTAT_LAN_67", "Generate a CSV (Comma Separated Variable) file of historical statistics which meets the specified criteria");
define("ADSTAT_LAN_68", "Mostrar las entradas de bases de datos estadísticas que en realidad existen y cumplir con los criterios de selección");
define("ADSTAT_LAN_69", "Eliminar los datos históricos");
define("ADSTAT_LAN_70", "Borrar datos anteriores a:");
define("ADSTAT_LAN_71", "Eliminar Datos");
define("ADSTAT_LAN_72", "Confirmar la eliminación de datos anteriores a primer día de:");
define("ADSTAT_LAN_74", "(Lista de entradas de datos que se va a eliminar más adelante)");
define("ADSTAT_LAN_75", "Registros para su eliminación");
define("ADSTAT_LAN_76", "¡Precaución! Una vez eliminados, los datos no se pueden recuperar. Por favor, haga su copia de seguridad o exportar la base de datos de primera");
define("ADSTAT_LAN_77", "Registros borrados:");
define("ADSTAT_LAN_78", "Mostrar el mes anterior, así como para el mes en curso no página de estadísticas de acceso");
define("ADSTAT_LAN_79", "Sólo se utiliza si las estadísticas mensuales recogidos");
define("ADSTAT_LAN_80", "Se suprimen las siguientes páginas:");
define("ADSTAT_LAN_81", "Estadísticas superados:");
define("ADSTAT_LAN_82", "Los siguientes valores se establecen:");
define("ADSTAT_LAN_83", "Siguientes entradas de identificación de registro quitados:");
define("ADSTAT_LAN_84", "Este procedimiento se sobreponen a los resúmenes estadísticos de registro en su base de datos. (Archivos de registro bruto se dejan sin modificar) Una vez reemplazado, los datos no se pueden recuperar. Por favor, copia de seguridad o exportar su base de datos de primero");
define("ADSTAT_LAN_85", "Se han encontrado archivos [x] log. Haga clic en el botón de abajo para procesar estos archivos.");
define("ADSTAT_LAN_86", "Visitantes total");


?>
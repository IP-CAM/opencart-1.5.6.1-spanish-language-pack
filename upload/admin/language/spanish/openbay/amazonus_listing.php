<?php
//Headings
$_['lang_title'] = 'Nuevo Listado Amazon';
$_['lang_openbay'] = 'OpenBay Pro';
$_['lang_amazonus'] = 'Amazon US';

//Buttons
$_['button_search'] = 'Busqueda';
$_['button_new'] = 'Crear Nuevo Producto';
$_['button_return'] = 'Regresar a los productos';
$_['button_amazonus_price'] = "Obtener precio de Amazon";
$_['button_list'] = "Listar en Amazon";

//Text
$_['text_view_on_amazonus'] = 'Ver en Amazon US';
$_['text_list'] = 'Listar';
$_['text_new'] = 'Nuevo';
$_['text_used_like_new'] = 'Usado - Como nuevo';
$_['text_used_very_good'] = 'Usado - Muy bueno';
$_['text_used_good'] = 'Usado - Bueno';
$_['text_used_acceptable'] = 'Usado - Aceptable';
$_['text_collectible_like_new'] = 'Coleccionable - Como nuevo';
$_['text_collectible_very_good'] = 'Coleccionable - Muy bueno';
$_['text_collectible_good'] = 'Coleccionable - Bueno';
$_['text_collectible_acceptable'] = 'Coleccionable - Aceptable';
$_['text_refurbished'] = 'Restaurado';
$_['text_product_sent'] = 'El producto fue exitosamente enviado a Amazon US.';
$_['text_product_not_sent'] = 'El producto no fue enviado para Amazon US. Reazón: %s';
$_['lang_no_results'] = 'No fueron encontrados resultados';
$_['lang_not_in_catalog'] = 'O, si este no esta en el catalogo&nbsp;&nbsp;&nbsp;';

//Table columns
$_['column_image'] = 'Imagen';
$_['column_asin'] = 'ASIN';
$_['column_name'] = 'Nombre';
$_['column_price'] = 'Precio';
$_['column_action'] = 'Acción';

//Entry
$_['entry_sku'] = 'SKU:';
$_['entry_condition'] = 'Condición:';
$_['entry_condition_note'] = 'Nota de la Condición:';
$_['entry_price'] = 'Precio:';
$_['entry_sale_price'] = 'Precio de Venta:';
$_['entry_quantity'] = 'Cantidad:';
$_['entry_start_selling'] = 'Disponible desde la Fecha:';
$_['entry_restock_date'] = 'Fecha para rellenar el stock:';
$_['entry_country_of_origin'] = 'País de Origen:';
$_['entry_release_date'] = 'Fecha de liberación:';
$_['entry_from'] = 'Fecha desde';
$_['entry_to'] = 'Fecha hasta';

//Form placeholders
$_['lang_placeholder_search'] = 'Introducir el nombre de producto, UPC, EAN, ISBN o ASIN';
$_['lang_placeholder_condition'] = 'Usar el campo para describir la condición de tus productos.';

//Help
$_['help_sku'] = "ID unico del prodcuto asignado al mercader";
$_['help_restock_date'] = "Esta es la fecha en la cual te sera posible enviar cualquier petición de regreso a los clientes. Esta fecha no debe ser mayor que 30 días desde que fue listado o la orden fue recivida puede ser automaticamente cancelada.";
$_['help_sale_price'] = "El precio de venta debe tener una fecha de inicio y fin";

//Errors
$_['error_text_missing'] = 'Tu debes entrar algunos detalles de la busqueda';
$_['error_data_missing'] = 'Los datos requeridos estan faltantes';
$_['error_missing_asin'] = 'ASIN es requerido';
$_['error_marketplace_missing'] = 'Por favor selecciona un mercado';
$_['error_condition_missing'] = "Por favor selecciona una condición";
$_['error_fetch'] = 'No se pudieron obtener los datos';
$_['error_amazonus_price'] = 'No se pudo obtener el precio desde Amazon US';
$_['error_stock'] = 'No puedes listar artículos con existencia menor a uno en el stock';
$_['error_sku'] = 'Debes Introducir un SKU para el artículo';
$_['error_price'] = 'Debes Introducir un precio para el artículo';

//Tabs
$_['tab_required_info'] = 'Información Requirida';
$_['tab_additional_info'] = 'Opciones adicionales';

//Tab headers
$_['item_links_header_text'] = 'Enlaces del Artículo';
$_['quick_listing_header_text'] = 'Listado Rapido';
$_['advanced_listing_header_text'] = 'Listado Avanzado';
$_['saved_header_text'] = 'Guardar listados';
$_['lang_tab_main'] = 'Principal';

//Tabs
$_['item_links_tab_text'] = 'Enlaces del artículo';
$_['quick_listing_tab_text'] = 'Listado Rapido';
$_['advanced_listing_tab_text'] = 'Listado Avanzado';
$_['saved_tab_text'] = 'Guardar listados';

//Errors
$_['text_error_connecting'] = 'Cuidado: Hubo un problema conectantdo al API de  Welford Media. Por favor checa tu extensión de  OpenBay Pro Amazon US. Si los problemas persisten contacta al soporte de Welford.';

// Quick/advanced listing tabs
$_['quick_listing_description'] = 'Usar este metodo para encontrar todos los productos que ya existen en el catalogo de Amazon US. El Matching se por usar el id Estandar del producto (ASIN, ISBN, UPS, EAN)';
$_['advanced_listing_description'] = 'Use this method to create new listings on Amazon US.';
$_['listing_row_text'] = 'Listando para el producto:';
$_['already_saved_text'] = 'Este producto ya esta guardado en tus listas. Click en editar si lo quieres revisar.';
$_['save_button_text'] = 'Guardar';
$_['save_upload_button_text'] = 'Guardar y Subir';
$_['saved_listings_button_text'] = 'Ver listados guardados';
$_['cancel_button_text'] = 'Cancelar';
$_['field_required_text'] = 'Este campo es obligatorio!';
$_['not_saved_text'] = 'Listados no fueron guardados. Checar tus entradas.';
$_['chars_over_limit_text'] = 'caracteres sobre el limite.';
$_['minimum_length_text'] = 'La longitud minima es';
$_['characters_text'] = 'caracteres';
$_['delete_confirm_text'] = 'Estas seguro?';
$_['clear_image_text'] = 'Limpiar';
$_['browse_image_text'] = 'Buscar';
$_['category_selector_field_text'] = 'Categoría de Amazon:';

//Item links tab
$_['item_links_description'] = 'Aquí tu puedes agregar y editar los enlaces del producto que ya existen en Amazon artículos sin lstar desde OpenCart. Esto te permitira el control del stock entre mercados habilitados. Si tienes instalado openStock - te permitira enlazar opciones de articulos de manera individual hacia los SKUs de Amazon. (Subir productos de Opencart hacia  Amazon automaticamente agregara enlaces)';
$_['new_link_table_name'] = 'Nuevo enlace';
$_['new_link_product_column'] = 'Producto';
$_['new_link_sku_column'] = 'SKU';
$_['new_link_amazonus_sku_column'] = 'SKU del producto de Amazon';
$_['new_link_action_column'] = 'Acción';
$_['item_links_table_name'] = 'Enlaces del artículo';


//Market places
$_['marketplaces_field_text'] = 'Mercado';
$_['marketplaces_help'] = 'En las configuraciones de la extensión de Amazon US puedes seleccionar un mercado por default.';
$_['text_germany'] = 'Alemania';
$_['text_france'] = 'Francia';
$_['text_italy'] = 'Italia';
$_['text_spain'] = 'España';
$_['text_united_kingdom'] = 'Reino Unido';


//Saved listings tab
$_['saved_listings_description'] = 'Esta es la lista de listado de productos que esta guardados localmente y estan listos para subir a Amazon. Click para subir y publicar.';
$_['actions_edit_text'] = 'Editar';
$_['actions_remove_text'] = 'Remover';
$_['upload_button_text'] = 'Subir';
$_['name_column_text'] = 'Nombre';
$_['model_column_text'] = 'Modelo';
$_['sku_column_text'] = 'SKU';
$_['amazonus_sku_column_text'] = 'SKU del producto de Amazon';
$_['actions_column_text'] = 'Acción';
$_['saved_localy_text'] = 'Listados guardados localmente.';
$_['uploaded_alert_text'] = 'Listado(s) Guardado(s) Subido(s)!';
$_['upload_failed'] = 'Fallo la subida del producto con SKU : "%s". Razón: "%s" Sl proceso de subida fue cancelado.';

//Item links
$_['links_header_text'] = 'Enlace de los artículos';
$_['links_desc1_text'] = 'Enlazar tus artículos te permitira controlar tu stock en Amazon US.<br /> Por cada artículo que es actualizado en el stock local(El stock disponible en tu tienda) serán actualizados los listados de tu Amazonus';
$_['links_desc2_text'] = 'Tu puedes enlazar artículos de manera manual introduciendo el SKU de Amazon o cargar todos los productos no enlazados  y entonces introducir los SKUs de amazon. (Subir productos de Opencart hacia  Amazon automaticamente agregara enlaces)';
$_['links_load_btn_text'] = 'Cargar';
$_['links_new_link_text'] = 'Nuevo Enlace';
$_['links_autocomplete_product_text'] = 'Producto<span class="help">(usar el autocompletar)</span>';
$_['links_amazonus_sku_text'] = 'SKU del artículo de Amazon';
$_['links_action_text'] = 'Acción';
$_['links_add_text'] = 'Agregar';
$_['links_add_sku_tooltip'] = 'Agregar otro SKU';
$_['links_remove_text'] = 'Remover';
$_['links_linked_items_text'] = 'Artículos enlazados';
$_['links_unlinked_items_text'] = 'Artículos no enlazados';
$_['links_name_text'] = 'Nombre';
$_['links_model_text'] = 'Modelo';
$_['links_sku_text'] = 'SKU';
$_['links_amazonus_sku_text'] = 'SKU del artículo de Amazon';
$_['links_sku_empty_warning'] = 'El SKU de Amazon no puede estar vacio!';
$_['links_name_empty_warning'] = 'El nombre del Producto no puede estar vacio!';
$_['links_product_warning'] = 'El producto no existe. Por favor usa el autocompletar.';
$_['option_default'] = '-- Seleccionar Opción --';
$_['lang_error_load_nodes'] = 'Imposible de cargar los nodos de busqueda';

//Listing edit page
$_['text_edit_heading'] = 'Vista General del listado';
$_['text_has_saved_listings'] = 'Este producto tiene uno o mas listados guardados localmente.';
$_['text_product_links'] = 'Enlaces del Producto';
$_['button_create_new_listing'] = "Crear nuevo Listado";
$_['button_remove_links'] = "Remover enlaces";
$_['button_saved_listings'] = "Ver listados guardados";
$_['column_name'] = 'Nombre del Producto';
$_['column_model'] = 'Modelo';
$_['column_combination'] = 'Combinación';
$_['column_sku'] = 'SKU';
$_['column_amazonus_sku'] = 'SKU del artículo de Amazon';

//Messages
$_['text_links_removed'] = 'Enlaces del producto de Amazon borrados';
?>
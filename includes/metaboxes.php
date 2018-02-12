<?php 


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


function quizbook_agregar_metaboxes(){

	add_meta_box( 'quizbook_meta_box', 'Respuestas', 'quizbook_metaboxes','quiz', 'normal','high',null );

}

add_action('add_meta_boxes','quizbook_agregar_metaboxes');

/*
* Muetra el contenido HTML del Metaboxes
*/

function quizbook_metaboxes($post){ 

	wp_nonce_field( basename(__FILE__), 'quizbook_nonce');

?>

<table class="form-table">
	<tr>
		<th class="row-title">
			<h2>Añade las respuestas Aqui</h2>			
		</th>
	</tr>
	<tr>
		<th class="row-title">
			<label for="respuesta_1">a)</label>
		</th>
		<td>
			<input value= "<?php echo esc_attr( get_post_meta( $post->ID, 'qb_respuesta_1',true ) ); ?>" type="text" id="respuesta_1" name = "qb_respuesta_1" class="regular-text">
		</td>
	</tr>
	<tr>
		<th class="row-title">
			<label for="respuesta_2">b)</label>
		</th>
		<td>
			<input value= "<?php echo esc_attr( get_post_meta( $post->ID, 'qb_respuesta_2',true ) ); ?>" type="text" id="respuesta_2" name = "qb_respuesta_2" class="regular-text">
		</td>
	</tr>
	<tr>
		<th class="row-title">
			<label for="respuesta_3">c)</label>
		</th>
		<td>
			<input value= "<?php echo esc_attr( get_post_meta( $post->ID, 'qb_respuesta_3',true ) ); ?>" type="text" id="respuesta_3" name = "qb_respuesta_3" class="regular-text">
		</td>
	</tr>
	<tr>
		<th class="row-title">
			<label for="respuesta_4">d)</label>
		</th>
		<td>
			<input value= "<?php echo esc_attr( get_post_meta( $post->ID, 'qb_respuesta_4',true ) ); ?>" type="text" id="respuesta_4" name = "qb_respuesta_4" class="regular-text">
		</td>
	</tr>
	<tr>
		<th class="row-title">
			<label for="respuesta_5">e)</label>
		</th>
		<td>
			<input value= "<?php echo esc_attr( get_post_meta( $post->ID, 'qb_respuesta_5',true ) ); ?>" type="text" id="respuesta_5" name = "qb_respuesta_5" class="regular-text">
		</td>
	</tr>
	<tr>
		<th class="row-title">
			<label for="respuesta_correcta">Respuesta correcta</label>
		</th>
		<td>
			<?php $respuesta = esc_html( get_post_meta( $post->ID, 'quizbook_correcta',true ) ); ?>
			<select name="quizbook_correcta" id="respuesta_correcta" class="postbox">
				<option value="">Elige la respuesta correcta</option>
				<option <?php selected( $respuesta, 'qb_respuesta:a' ); ?> value="qb_respuesta:a">a</option>
				<option <?php selected( $respuesta, 'qb_respuesta:b' ); ?> value="qb_respuesta:b">b</option>
				<option <?php selected( $respuesta, 'qb_respuesta:c' ); ?> value="qb_respuesta:c">c</option>
				<option <?php selected( $respuesta, 'qb_respuesta:d' ); ?> value="qb_respuesta:d">d</option>
				<option <?php selected( $respuesta, 'qb_respuesta:e' ); ?> value="qb_respuesta:e">e</option>																
			</select>
		</td>
	</tr>	
</table>

	<?php
}

/*
* al save post, se le debe de pasar 3 parámetros
*
*/

function quizbook_guardar_metaboxes($post_id,$post,$update){

	if (!isset($_POST['quizbook_nonce']) || !wp_verify_nonce( $_POST['quizbook_nonce'], basename(__FILE__) )) {
		return $post_id;
	}

	if (!current_user_can( 'edit_post', $post_id)) {
		return $post_id;
	}
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	$respuesta_1 = $respuesta_2 = $respuesta_3 = $respuesta_4 = $respuesta_5 = $correcta = '';

	if (isset($_POST['qb_respuesta_1'])) {
		$respuesta_1 = sanitize_text_field( $_POST['qb_respuesta_1'] );
		
	}
	update_post_meta($post_id,'qb_respuesta_1',$respuesta_1);



	if (isset($_POST['qb_respuesta_2'])) {
		$respuesta_2 = sanitize_text_field( $_POST['qb_respuesta_2'] );
		
	}
	update_post_meta($post_id,'qb_respuesta_2',$respuesta_2);	


	if (isset($_POST['qb_respuesta_3'])) {
		$respuesta_3 = sanitize_text_field( $_POST['qb_respuesta_3'] );
		
	}
	update_post_meta($post_id,'qb_respuesta_3',$respuesta_3);


	if (isset($_POST['qb_respuesta_4'])) {
		$respuesta_4 = sanitize_text_field( $_POST['qb_respuesta_4'] );
		
	}
	update_post_meta($post_id,'qb_respuesta_4',$respuesta_4);


	if (isset($_POST['qb_respuesta_5'])) {
		$respuesta_5 = sanitize_text_field( $_POST['qb_respuesta_5'] );
		
	}

	update_post_meta($post_id,'qb_respuesta_5',$respuesta_5);			

	if (isset($_POST['quizbook_correcta'])) {
		$correcta = sanitize_text_field( $_POST['quizbook_correcta'] );
		
	}
	update_post_meta($post_id,'quizbook_correcta',$correcta);		

}

add_action( 'save_post', 'quizbook_guardar_metaboxes', 10, 3);

/*
* Metaboxes CMB2
*/

function quizbook_campos_quiz() {
	$prefix = 'info_quiz_';

	$metabox_eventos = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Metaboxes CMB 2 to quiz', 'cmb2' ),
		'object_types'  => array( 'quiz'), // Post type
	) );

	$metabox_eventos->add_field( array(
	  'name'       => __( 'Titulo servicios', 'cmb2' ),
	  'desc'       => __( 'Mes de la quiz', 'cmb2' ),
	  'id'         => $prefix . 'servicios_titulo',
	  'type'       => 'text',
	) ); 

	$metabox_eventos->add_field( array(
		'name'    => 'contenido servicios',
		'desc'    => 'field description (optional)',
		'id'      => 'servicios_contenido',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 	

	$metabox_eventos->add_field( array(
		'name'    => 'Imagen servicio empeñar',
		'desc'    => 'field description (optional)',
		'id'      => 'img_servicio_empenar',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 

	$metabox_eventos->add_field( array(
		'name'    => 'Imagen servicio comprar',
		'desc'    => 'field description (optional)',
		'id'      => 'img_servicio_comprar',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 	

}

add_action( 'cmb2_admin_init', 'quizbook_campos_quiz');

?>
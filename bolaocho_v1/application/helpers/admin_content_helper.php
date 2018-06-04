<?php
/*
 *  Helper para administrar paginas web por secciones
 *
 *  Fecha:	6/12/2017
 * 	Autor:	Oswaldo Vázquez
*/

	//guarda 1 sola imagen en bd.
	function upload_image_manual($pagina, $seccion, $nombre_seccion = "", $img){
		$directorio = "img/fondos/";
		$name = '';
		if(is_numeric($seccion)){
			if($img["name"] != ''){
				$target_file = $directorio . basename($img["name"]);
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$name = $directorio . $nombre_seccion. "_seccion_" .rand(1,100). $seccion. "." . $imageFileType;
				if(!move_uploaded_file($img["tmp_name"], $name))
					$name = '';
			}
			return $name;
		}
	}

		//guarda 1 sola imagen en bd.
	function upload_image($pagina, $seccion, $nombre_seccion = "", $directorio){
		$name = '';
		$datos = array('background_img' => '', 'css' => '', 'text' => '');
		if(is_numeric($seccion)){
			if(isset($_FILES)){
				if($_FILES["back_img"]["name"] != ''){
					$target_file = $directorio . basename($_FILES["back_img"]["name"]);
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					$name = $directorio . $nombre_seccion. "_seeccion_".$seccion. "." . $imageFileType;
					if(move_uploaded_file($_FILES["back_img"]["tmp_name"], $name)){
						echo "si";
					} else {
						echo "no";
					}
				}
			}
			$datos['background_img'] =  $name;
			$datos['text'] = $_POST['description'];
			return $datos;
		}
	}

	//guarda 1 sola imagen en bd.
	function upload_image_new($pagina, $seccion, $nombre_seccion = "", $directorio){
		$name = '';
		$datos = array('background_img' => '', 'css' => '', 'text' => '');
		if(is_numeric($seccion)){
			if(isset($_FILES) && !empty($_FILES)){
				if($_FILES["back_img"]["name"] != ''){
					$name_clean = str_replace(" ", "_", basename($_FILES["back_img"]["name"] ));
					$target_file = $directorio . $name_clean;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					$name = $directorio . $nombre_seccion.'_'. $name_clean;
					if(move_uploaded_file($_FILES["back_img"]["tmp_name"], $name)){
						//echo "si";
					} else {
						//echo "no";
					}
				}
			}
			if(isset($_POST['back_img']) && $_POST['back_img'] != ''){
				$name = $_POST['back_img'];
				$name_clean = str_replace("img/fondos/", "",$_POST['back_img']);
				$name_clean = str_replace(" ", "_", $name_clean);
				$name_clean = str_replace($nombre_seccion.'_', '', $name_clean);
			}

			$datos['nombre'] =  $nombre_seccion.'_'. $name_clean;
			$datos['background_img'] =  $name;
			$datos['css'] = $_POST['img_title'];
			$datos['text'] = $_POST['img_desc'];
			$datos['html'] = $_POST['img_url'];
			return $datos;
		}
	}

	//guarda multiples imagenes en bd
	function upload_multiple_images($pagina, $seccion, $nombre_seccion = "", $directorio){
		if(is_numeric($seccion)){
			$errors = array();
			$uploadedFiles = array();
			$extension = array("jpeg","jpg","png","PNG", "JPG", "JPEG");
			$all_names = "";
			$backup_names = "";
			$n = 0;
			$delete = false;
			$counter = count($_POST['img_dropzone']);

			foreach($_POST['img_dropzone'] as $img){
				if (strlen($img) > 3){
					$array = explode(".", $img);
					rename($directorio.$img,  $directorio. $nombre_seccion. "_tmp_25".$n.'.'.$array[1]);
					$backup_names .= "/".$nombre_seccion."_tmp_25".$n.'.'.$array[1] . ',';
					$n++;
				}
			}

			foreach($_FILES["file"]["tmp_name"] as $key=>$tmp_name){

				$temp = $_FILES["file"]["tmp_name"][$key];
				$imageFileType = pathinfo( $directorio . basename($_FILES["file"]["name"][$key]),PATHINFO_EXTENSION);
				$name = "/".$nombre_seccion."_galeria_".$counter. "." . $imageFileType;
				$counter++;
				$UploadOk = true;
				if(empty($temp))
					break;

				if(in_array($imageFileType, $extension) == false)
					$UploadOk = false;

				if($UploadOk){
					move_uploaded_file($temp, $directorio.$name);
					array_push($uploadedFiles, $name);
					$all_names .= $name . ",";
				}
			}
			$backup_names = trim($backup_names, ',');
			$backup_names_array = explode(",", $backup_names);
			$backup_namess = '';
			$counter = 0;

			foreach($backup_names_array as $img){
				if (strlen($img) > 3){
					$array = explode(".", $img);
					rename($directorio.$img, $directorio . $nombre_seccion ."_galeria_".$counter.'.'.$array[1]);
					$backup_namess .= "/".$nombre_seccion."_galeria_".$counter.'.'.$array[1] . ',';
					$counter++;
				}
			}

			$datos['background_img'] =  $backup_namess.$all_names ;
			$datos['css'] = '';
			$datos['text'] = "";
			return $datos;
		}
	}

	function draw_previus_img($images){
		$gallery = '';
		if (strlen($images) > 3){
			$images = trim($images, ',');
			$array = explode(",", $images);
			$count = 0;
			foreach($array as $names){
				$clearfix = ($count % 4 == 0)? '<div class = "clearfix"></div>': '';
				$gallery .= $clearfix . '<div class = "col-sm-3">
								<div class="checkbox ">
									<label for= "img_'.$count.'"><input type="checkbox" name = "img[]" id = "img_'.$count.'" value="'.$names.'">
										<img class = "img-responsive" src="'. base_url("img/fondos". $names) .'" alt="Anamar Beauty Lounge">
									</label>
								</div>
							</div>';
				$count++;
			}
		}
		$gallery .= '';
		return $gallery;
	}

	function delete_images($images){
		$datos = array();
		if (strlen($images) > 3){
			$imgs = '';
			$images = trim($images, ',');
			$array = explode(",", $images);
			foreach($array as $img){
				if (!in_array($img, $_POST['img']))
					$imgs .= $img . ",";
			}
			$datos['background_img'] =  $imgs;
			$datos['css'] = '';
			$datos['text'] = '';
			return $datos;
		}
		return $datos;
	}

	function draw_hidden_gallery_in_dropzone($images){
		$gallery = '';
		if (strlen($images) > 3){
			if($images != ''){
				$images = trim($images, ',');
				$array = explode(",", $images);
				$count = 0;
				$gallery .= '<div class = "hidden_images">';
				foreach($array as $names){
					$gallery .= '<input type="text" class = "hidden" name = "img_dropzone[]" value="'.$names.'">';
				}
				$gallery .= '</div>';
			}
		}
		return $gallery;
	}

	function gallery_front($images){
		$gallery = '';
		if (strlen($images) > 3){
			$images = trim($images, ',');
			$array = explode(",", $images);
			$count = 0;
			foreach($array as $names){
				$clearfix = ($count % 4 == 0)? '<div class = "clearfix"></div>': '';
				$gallery .= $clearfix . '<li class = "col-sm-3">
								<a href="contacto" class = "thumbnail"><img class = "img-responsive" src="'. base_url("img/fondos". $names) .'" alt="Anamar Beauty Lounge"></a>
							</li>';
				$count++;
			}
		}
		return $gallery;
	}
	function navbar($data){
		$count = 0;
		$navbar = '<ul class="dropdown-menu">';
		foreach($data as $key => $value){
			if($value->estatus == '1'){
				switch($value->pagina){
					case 'Servicios':
						$navbar .= '<li><a href="' .site_url($value->pagina).'">'.$value->pagina.'</a></li><li role="separator" class="divider"></li>';
						$count = 1;
					break;
					case 'Maquillaje':
					case 'Microblading':
					case 'Novias':
					case 'Peinados':
						$navbar .= '<li><a href="' .site_url($value->pagina).'">'.$value->pagina.'</a></li>';
						$count = 1;
					break;
					case 'Pestañas':
						$navbar .= '<li><a href="pestanas">'.$value->pagina.'</a></li>';
						$count = 1;
					break;
					default:
					break;
				}
			}
		}
		$navbar .= '</ul>';
		$navbar = ($count)? $navbar : '';
		return $navbar;
	}

	function images_helper($images){
		$html = '';
		if(is_array($images)){
			foreach($images as $key){
				$html .= '<div class="col-sm-6"><form class="gallery_form" method="post"><div class="panel panel-default"><div class="panel-body"><div class="row">
				<div class="col-sm-12"><img class = "img-responsive gallery_img center-block" src = "'.base_url($key->background_img).'" alt = "anamar"><br><input type="file" class="form-control file_gallery"><input type = "hidden" class = "name_img_hidden" value = "'. $key->background_img.'"><br></div></div><div class="row">
				<div class="col-sm-12"><input type="text" class="form-control img_title" placeholder="Titulo de la imagen" value = "'.$key->css.'"><br></div>
				<div class="col-sm-12"><input type="text" class="form-control img_url" placeholder="Url" value = "'.$key->html.'"><br></div>
				<div class="col-sm-12"><textarea class="form-control img_desc" rows="3" placeholder="Descripción">'.$key->text.'</textarea><br></div>
				</div><div class="row pull-right"><div class="col-sm-12"><button type="button" class="btn btn-default " onclick="save_img(this);">Guardar</button><button type="button" class="btn btn-default " onclick="remove_img(this);">Eliminar</button></div></div></div></div></form></div>';
			}
		}else{
			$html = '<div class="col-sm-6"><form class = "gallery_form" method = "post"><div class="panel panel-default"><div class="panel-body"><div class="row"><div class="col-sm-12"><input type="file" class="form-control file_gallery"><br></div></div><div class="row"><div class="col-sm-12"><input type="text" class="form-control img_title" placeholder="Titulo de la imagen"><br></div><div class="col-sm-12"><input type="text" class="form-control img_url" placeholder="Url"><br></div><div class="col-sm-12"><textarea class="form-control img_desc" rows="3" placeholder="Descripción"></textarea><br></div></div><div class="row pull-right"><div class="col-sm-12"><button type="button" class="btn btn-default " onclick="save_img(this);">Guardar</button><button type="button" class="btn btn-default " onclick="remove_img(this);">Eliminar</button></div></div></div></div></form></div>';
		}
		return $html;
	}
	function gallery_front_new_gallery($images){
		$html = '';
		$count = 0;
		if(is_array($images)){
			$html .= '<div class="lightbox-gallery row">';
			foreach($images as $key){
				$count++;
				$html .= '<div class = "col-sm-3 galery_size"><img height= "250" class = "img-responsive center-block" src="'.base_url($key->background_img).'" alt="'.$key->text.'">
						  <input type = "hidden" class = "title" value = "'.$key->css.'"><input type = "hidden" class = "url" value = "'.$key->html.'"></div>';
				if(($count % 4) == 0)
					$html .= '<div class ="clearfix" ></div>';
			}
			$html .= '</div>';
		}else{
			//~ $html = '<div class="col-sm-6"><form class = "gallery_form" method = "post"><div class="panel panel-default"><div class="panel-body"><div class="row"><div class="col-sm-12"><input type="file" class="form-control file_gallery"><br></div></div><div class="row"><div class="col-sm-12"><input type="text" class="form-control img_title" placeholder="Titulo de la imagen"><br></div><div class="col-sm-12"><input type="text" class="form-control img_url" placeholder="Url"><br></div><div class="col-sm-12"><textarea class="form-control img_desc" rows="3" placeholder="Descripción"></textarea><br></div></div><div class="row pull-right"><div class="col-sm-12"><button type="button" class="btn btn-default " onclick="save_img(this);">Guardar</button><button type="button" class="btn btn-default " onclick="remove_img(this);">Eliminar</button></div></div></div></div></form></div>';
		}
		return $html;
	}


?>



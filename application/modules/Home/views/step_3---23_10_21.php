<?php error_reporting(E_ALL & ~E_NOTICE); ?>
<style>

</style>

<div class="container">

	<div class="main-wapper custpage3">

		<?php 

		$old_color_array = $this->session->userdata('colors_list');

		$cat_array = $this->session->userdata('colors_category_list');

		
	//	print_r($old_color_array);

		?>





		<!--======== Mid Containmer ========-->

		<div class="mid-conttainer">

			<div class="row">

			<!-- Step header -->

			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 hidden-lg hidden-md hidden-sm hidden-xs">

					<div class="col-md-2 col-lg-2 col-xs-12 col-sm-4" >

						<h4 class="step_3_heading_4" style=""><?php echo ($cat_array['category']=='1')?"Indoor":"Outdoor"; ?></h4>

					</div>

			</div>

			<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 sloganpre">

				<div class="slogan custsloganstep3">

				<?php if($cat_array['category']=='1'){ ?>    

				 <h3><?php echo $sitesettings['step_three_title']; ?></h3>

				 <!--<h3>INNOVATION STATION</h3>-->

				 <?php echo $sitesettings['step_three_editor']; ?>

				 <?php }

				 else{ ?>

				 <h3><?php echo $sitesettings['step_three_title_2']; ?></h3>

				 <!--<h3>INNOVATION STATION</h3>-->

				 <?php echo $sitesettings['step_three_editor_2']; ?>

				

				 <?php } ?>

				</div>

			</div>

			

			

			

			<input type="hidden" name="save_gallery_indoor_albums" id="save_gallery_indoor_albums" value="<?php echo ($gallery_indoor_albums!= false)?"1":"0"; ?>">

			    

			    

     <input type="hidden" name="save_gallery_outdoor_albums" id="save_gallery_outdoor_albums" value="<?php echo ($gallery_outdoor_albums!= false)?"1":"0"; ?>">

			

			

			<!-- selected Colors -->

				<!--<div class="col-md-1 col-lg-1"></div>-->

				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">

					<div class="" >

						<h4 class="step_3_heading_4" style=""><?php echo ($cat_array['category']=='1')?"Indoor":"Outdoor"; ?></h4>

					</div>

					<div class="selected-color-final">

						<ul class="main-list">

							<!--default black-->
							<?php if($cat_array['category']=='2' || $cat_array['category']=='1') {?>
							<div class="custnewpage3 col-md-4 col-lg-4 col-xs-12 col-sm-6">



							<li id="delete_part1_0" data-count_var="0" class="">

								<figure> 

									<img src="<?php echo base_url(); ?>uploads/colors/	2019071810200953.jpg" alt="">

								</figure>

								<div class="content">

									<div  class="name">Black</div>

									<ul class="coarse_fine">

										<li id="fine1_0" data-colid="0" data-count="0" class="fine_1 fine_1_1_0 active">

											<span class="fine" data-id="1" data-coarse="0" data-fine="1">Fine</span>

										</li>

										<li><span style="background-color: transparent;width: 75px;border-color: transparent;height: 24px;"></span></li>						

									</ul>

									

									<div class="slider_dropdown">

										<input type='button' value='-' class='qtyminus' field='slider_value_text1_0' />

										<input type="number" name="slider_value_text1_0" id="slider_value_text1_0" value="<?php if(!empty($old_color_array) && array_key_exists(0,$old_color_array)){ echo $old_color_array[0]['value']; } else { if($cat_array['category']=='1'){echo 5;}else{echo 20;} } ?>" min="0" max="100" class="slider_text_box" data-cnt="0" data-id="1" readonly />

										<input type='button' value='+' class='qtyplus' field='slider_value_text1_0' />

									</div>

								</div>

								

								

								<div class="color_slider slider_range fine" data-id='1' aria-disabled="false" style="width: 100%;" id="slide01" data-hexcode="#000000" data-count="0"  >

									

										

										

											<input type="hidden" name="fixed_min_value_black" id="fixed_min_value_black" value="<?php  if($cat_array['category']=='1'){echo 5;}else{echo 20;}  ?>" />

										

								

									  	<input type="hidden" name="slider_value1_0" id="slider_value1_0" value="<?php if(!empty($old_color_array) && array_key_exists(0,$old_color_array)){ echo $old_color_array[0]['value']; } else { if($cat_array['category']=='1'){echo 5;}else{echo 20;} } ?>" />



								  </div>



								 <div class="filled-color center_text progress-value progress-value1_0">
								 	<?php if(!empty($old_color_array) && array_key_exists(0,$old_color_array)){ echo $old_color_array[0]['value']; } else { if($cat_array['category']=='1'){echo 5;}else{echo 20;} } ?>%
								 </div>

							 </li>

							</div>
						<?php } ?>
							<!--default black-->

							<?php 

							if($old_color_array!=''){ 

							$i=1;

							/*echo "<pre>";
							print_r($old_color_array);*/

							foreach($old_color_array as $array){

								$condition = array('status' => '1','id' => $array['id']);

								$get_color = $this->common_model->get_single('color_room',$condition);

								if($get_color!=false){

									//$cork_class = '';

									$readonly = '';

									if($get_color['id']!=1){

										//$cork_class ="cork_class";

									//	$readonly = 'readonly';

									//}
										//echo "<pre>";		
										//print_r($array);

					  ?>



					<div class="custnewpage3 col-md-4 col-lg-4 col-xs-12 col-sm-6" >

					<li id="delete_part<?php echo $array['id']; ?>_<?php echo $i; ?>" data-count_var="<?php echo $i; ?>" class="<?php //echo $cork_class; ?>">

					  <a data-id="<?php echo $array['id']; ?>" data-count="<?php echo $i; ?>" class="remove"><span aria-hidden="true">×</span></a>

					  <figure> 

						  <img src="<?php echo base_url(); ?>uploads/colors/<?php echo $get_color['color_img']; ?>" alt="">



						</figure>

					  <div class="content">

						<div  class="name"> <?php echo $get_color['color_title']; ?> </div>

						 <ul class="coarse_fine">

								<?php if($get_color['fine'] == 1 && $get_color['coarse'] !=1 && $get_color['color_title']!='Black'){ ?>

								<li id="fine<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="fine_1 fine_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">

									<span class="fine" data-id="<?php echo $get_color['id']; ?>" data-colid="<?php echo $i; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>">Fine</span>

								</li>

								<li><span style="background-color: transparent;width: 75px;border-color: transparent;height: 24px;"></span></li>

								<?php } ?>

								<?php if($get_color['coarse'] == 1 && $get_color['fine'] !=1   && $get_color['color_title']!='Black'){ ?>

								<li id="coarse<?php echo $get_color['id']; ?>_<?php echo $i; ?>"  data-count="<?php echo $i; ?>" class="coarse_1 coarse_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">

									<span class="coarse" data-id="<?php echo $get_color['id']; ?>"   data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>">Coarse </span>

								</li>

								<li><span style="background-color: transparent;width: 56px;border-color: transparent;height: 24px;"></span></li>

								<?php } ?>

								

								<?php if($get_color['coarse'] == 1 && $get_color['fine']==1 && $get_color['color_title']!='Black'){ ?>


								<?php 		
								//echo $get_color['jumbo']."<br>";
								//echo $array['jumbo'];

								if($array['coarse'] == 0 && $array['fine'] == 0 && $get_color['jumbo']==1 || isset($array['jumbo'])>0){
									$active="active";
								}else if($array['coarse'] == 0 && $array['fine'] == 1 && $get_color['jumbo']==1 && $cat_array['category']=='2'){

									$active="active";
									$activeChunk="";

								}else{
									$active="";	
									$activeChunk="active";									
																			
								}

								if($array['coarse'] == 1 && $array['fine'] == 0 && $get_color['jumbo']==0 ){
									$active2="active";										
								}else{
									$active2='';
								}

								if($array['coarse'] == 0 && $array['fine'] == 1 && $get_color['jumbo']==0 && $get_color['chunk']==0){
									$active1="active";										
								}else{
									$active1='';
								}

								if($get_color['chunk'] == 1 && $get_color['jumbo']==1 ){
									$activeChunk="";				
								}else if($get_color['chunk'] == 1 && $get_color['jumbo']==0 ){
									$activeChunk="active";	
								}else{									
									$activeChunk="";
								}


								?>	

									<li id="fine<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="fine_1 fine_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo $active1; ?>">

									<span class="fine" data-id="<?php echo $get_color['id']; ?>"  data-colid="<?php echo $get_color['id']; ?>"data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>" data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Fine</span>

								</li>

								<li id="coarse<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="coarse_1 coarse_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo $active2; ?>">

									<span class="coarse" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>" data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Coarse</span>

								</li>
						<!-- **************** add  Jumbo**************** -->		
									<?php if($get_color['jumbo'] == 1){ ?>

									<li id="jumbo<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="jumbo_1 jumbo_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo  $active; ?>">

									<span class="jumbo" id="<?php echo $get_color['id']; ?>" data-id="<?php echo $get_color['id']; ?>" data-jumbo="<?php echo $get_color['jumbo']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Jumbo</span>

									</li>

									<?php  } ?>	
					<!-- **************** End Jumbo**************** -->

					<!-- **************** add  Chunk**************** -->		
									<?php if($get_color['chunk'] == 1){ 
										//echo $get_color['chunk'];
										?>

									<li id="chunk<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="chunk_1 chunk_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo  $activeChunk; ?>">

									<span class="chunk" id="<?php echo $get_color['id']; ?>" data-id="<?php echo $get_color['id']; ?>" data-jumbo="<?php echo $get_color['jumbo']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>" >Chunk</span>

									</li>

									<?php  } ?>	
					<!-- **************** End Chunk**************** -->
								<?php } ?>

	
								



								<?php if($get_color['color_title']=='Black'){ ?>

								<li><span style="background-color: transparent;width: 69px;border-color: transparent;height: 24px;"></span></li>

								<li><span style="background-color: transparent;width: 69px;border-color: transparent;height: 24px;"></span></li>

								<?php } ?>

							</ul>

						<?php /*echo ($array['fine']==1)?"Fine":"Coarse";*/ ?>

						<?php 
							if($get_color['fine']=='1' && $get_color['coarse']=='0' && $get_color['jumbo']=='0'){
								$mixValue='15';
								$classJubmo="classFineCourse";
								$slider_rangeValue="slider_rangeFineCourse";
							}
							else if($get_color['fine']=='0' && $get_color['coarse']=='1' && $get_color['jumbo']=='0'){
								$mixValue='15';
								$classJubmo="classFineCourse";
								$slider_rangeValue="slider_rangeFineCourse";

							}else if($get_color['fine']=='1' && $get_color['coarse']=='1' && $get_color['jumbo']=='1' && $cat_array['category']=='1'){
								$mixValue='0';
								$valueJubmoChunk='30';
								$classJubmo="classJubmo";
								$classJubmoChunk="classJubmoChunk";
								$qtyplusJubmo="qtyplusJubmo";
								$slider_rangeValue="slider_rangeJumbo";
								
							}else if($get_color['fine']=='1' && $get_color['coarse']=='1'  && $cat_array['category']=='1'){
								$mixValue='0';
								$valueJubmoChunk='0';
								$classJubmo="classJubmo";
								$classJubmoChunk="classJubmoChunk";
								$qtyplusJubmo="qtyplusJubmo";
								//$slider_rangeValue="slider_rangeCunk";
								
							}
							else if($get_color['chunk']=='1'){
								$mixValue='0';
								$valueJubmoChunk='0';
								$classJubmo="classJubmo";
								$classJubmoChunk="classJubmoChunk";
								$qtyplusJubmo="qtyplusJubmo";
								$slider_rangeValue="slider_rangeJumbo";
								
							}
							else if($get_color['fine']=='1' && $get_color['coarse']=='1' && $get_color['jumbo']=='1' && $cat_array['category']=='2'){
								$mixValue='20';
								$classJubmo="qtyplusJubmo";
								$slider_rangeValue="slider_rangeJumboOutDoor";
							}
							else{
								$mixValue=$array['value'];;
								$classJubmo='';
								$qtyplusJubmo='';
								$stylePoointer='';
								$slider_rangeValue="";
								$valueJubmoChunk="";
								$classJubmoChunk="";

							}	
						 ?>

						<div class="slider_dropdown">

						

							<input type='button' value='-' class='qtyminus' field='slider_value_text<?php echo $get_color['id'].'_'.$i; ?>' id="qtyminusId_<?php echo $get_color['id'];?>" data-id="<?php echo $get_color['id'];?>"  data-count="<?php echo $i;?>" /> 

							

							<input type="number" name="slider_value_text<?php echo $get_color['id'].'_'.$i; ?>" id="slider_value_text<?php echo $get_color['id'].'_'.$i; ?>" value="<?php echo $mixValue; ?>" min="0" max="100" class="slider_text_box" data-cnt="<?php echo $i; ?>" data-id="<?php echo $array['id']; ?>"  <?php echo $readonly; ?> readonly />

							<input type='button' value='+' class='qtyplus <?php echo @$qtyplusJubmo; ?>' field='slider_value_text<?php echo $get_color['id'].'_'.$i; ?>' id="qtyPlushsId_<?php echo $get_color['id'];?>" data-id="<?php echo $get_color['id'];?>"  data-count="<?php echo $i;?>"/>

						</div>

					  </div>
					  <!-- <div class="color_slider slider_range fine" data-id='1' aria-disabled="false" style="width: 100%;" id="slide01" data-hexcode="#000000" data-count="0"  > -->


					  <div class="color_slider slider_range <?php echo $slider_rangeValue; ?>  <?php //echo ($array['fine']==1)?"fine":"coarse"; ?>" data-id='<?php echo $array['id']; ?>' aria-disabled="false" style="width: 100%;" id="slide<?php echo $i.$array['id']; ?>" data-hexcode="<?php echo $get_color['hex_code']; ?>" data-count="<?php echo $i; ?>"  field='slider_range_text<?php echo $get_color['id'].'_'.$i; ?>'   >


					  	<!-- <input type="hidden" name="fixed_min_value_black" id="fixed_min_value_black" value="<?php  if($cat_array['category']=='1'){echo 5;}else{echo 20;}  ?>" /> -->

						  <input type="hidden" data-id='<?php echo $get_color['id']; ?>' name="slider_value<?php echo $get_color['id'].'_'.$i; ?>" class="slider_valueP<?php echo $get_color['id']; ?> <?php echo $classJubmo.$get_color['id']; ?>" id="slider_value<?php echo $get_color['id'].'_'.$i; ?>" value="<?php //echo $array['value']; ?><?php echo $mixValue; ?>" />

						  	<input type="hidden" name="slider_value<?php echo $get_color['id'].'_'.$i; ?>" data-id='<?php echo $get_color['id']; ?>'  class="slider_valueP<?php echo $get_color['id']; ?>" id="slider_value<?php echo $get_color['id'].'_'.$i; ?>" value="<?php echo $mixValue; ?>" />


						  	<input type="hidden" data-id='<?php echo $get_color['id']; ?>' name="slider_valueJumboChunk<?php echo $get_color['id'].'_'.$i; ?>" class="slider_valueJumboChunk<?php echo $get_color['id']; ?> <?php echo @$classJubmoChunk.$get_color['id']; ?>" id="slider_valueJumboChunk<?php echo $get_color['id'].'_'.$i; ?>" value="<?php //echo $array['value']; ?><?php //echo $valueJubmoChunk; ?>" />


						  	<input type="hidden" name="fixed_min_value_Chunk_Jumbo<?php echo $get_color['id'];?>" id="fixed_min_value_Chunk_Jumbo<?php echo $get_color['id'];?>" value="30" />



					  </div>



					 <div class="filled-color center_text progress-value progress-value<?php echo $get_color['id'].'_'.$i; ?>" max="30">

						<?php //echo $array['value']; ?>0%

					 </div> 

					</li>

					  </div>



					<?php } } $i++; }} ?>

					

						</ul>

					</div>		

					<!-- process bar -->

					<div class="processbar">

						<div class="row">

							<div class="col-md-6 col-sm-6 col-xs-6">

								<h4>Progress</h4>

							</div>



							<div class="col-md-6 col-sm-6 col-xs-6">

								<div class="proces">

								0%

								</div>

							</div>

						</div>

						<div class="row" style="margin-top:10px;">

							<div class="col-md-12 col-sm-12 col-xs-12">

								<div class="progress_total" style="opacity:0;">

								</div>

								<div style="" class="progress_color_div">

								</div>

							</div>

							<div class="col-md-12 col-sm-12 col-xs-12 nav_buttons_all_step hidden-xs">

								<div class="step-links">			

									<!--<a class="btn noleft2 leftcss reset_and_go_to_home" href="#">RESET</a>-->

									<a class="btn noleft leftcss" href="<?php echo base_url(); ?>home/step_2">BACK</a>

									<a class="btn right rightcss mix_it" href="#">MIX IT</a>

								</div>

							</div>

						</div>

						<input type="hidden" name="tot_progress_input" id="tot_progress_input" value="0" class="slidebgcolor">

					</div>

				</div>

				<!--<div class="col-md-1 col-lg-1"></div>-->

			</div>

		</div>

		<?php $this->load->view('login_reg_form'); ?>

		<div class="col-xs-12 hidden-lg hidden-md hidden-sm nav_buttons_step_below">

			<div class="step-links">			

				<a class="btn left leftcss" href="<?php echo base_url(); ?>home/step_2">BACK</a>

				<a class="btn right rightcss mix_it" href="#">MIX IT</a>

			</div>	

		</div>	

	</div>

</div>
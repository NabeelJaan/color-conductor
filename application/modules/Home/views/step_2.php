<div class="container">

	<div class="main-wapper">

	<?php $cat_array = $this->session->userdata('colors_category_list'); ?>

		<!--======== Mid Containmer ========-->

		<div class="mid-conttainer">

			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sloganpre custpage2resc1">

					<div class="slogan custsloganstep2">

						<h3><?php echo $sitesettings['step_two_title']; ?></h3>

						<!--<h3>COLOR ROOM</h3>-->

						

						<div class="slogannewup"><!--Db Tabel site_settings_table -->

						<?php //echo $sitesettings['step_two_editor']; ?>
						<ul>
							<li>Please select your base colors</li>
							<li>Choose up to 6 colors <!-- (Black is automatically selected) --></li>
							<li>All colors with a COARSE / FINE option may be selected twice.</li>
						</ul>

						</div>

						<!--<div class="slogannewup">

						Please select your base colors Choose up to 5 colors (Black is automatically selected) All colors with a Coarse / Fine option may be selected twice.

						</div>-->

					</div>

				</div>







	 <input type="hidden" name="save_gallery_indoor_albums" id="save_gallery_indoor_albums" value="<?php echo ($gallery_indoor_albums!= false)?"1":"0"; ?>">

			    

			    

     <input type="hidden" name="save_gallery_outdoor_albums" id="save_gallery_outdoor_albums" value="<?php echo ($gallery_outdoor_albums!= false)?"1":"0"; ?>">



				<!-- select Color -->

				<div class="row">

				<!--<div class="col-md-1"></div>-->

				<div class="<?php if($cat_array['category']=='1'){ echo 'col-md-8'; }else{ echo 'col-md-8'; } ?> col-sm-12 col-xs-12 custpage2resc1">  

					<!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

						<div class="slogannew">

							Please select your base colors<br><span>

								All colors with a Coarse / Fine option may be selected twice.</span>

						</div>

					</div>-->

					<div class=" custmobilecsspage2">

					<div class="col-md-12 col-sm-12 col-xs-12">

						<ul class="select-color">

							<?php

							$old_color_array = $this->session->userdata('colors_list');



							//echo "<pre>";

							//print_r($old_color_array);die;

							

							$color_ids = array();

							if($old_color_array!=''){

								foreach($old_color_array as $color_id)

								{

									$color_ids[]=$color_id['id'];

								}	

							}



							$i = 0;

							$each_color = array();

							foreach ($colors_list as $color) {

								if ($color['color_title'] != 'Black') {

									$each_color = (array)$color;

									$i++;

									?>

									<li class="pick_color pc_color<?php echo $color['id']; ?> <?php echo (in_array($color['id'],$color_ids))?"active":""; ?>" data-id = "<?php echo $color['id']; ?>" data-fine = "<?php echo $color['fine']; ?>" data-coarse = "<?php echo $color['coarse']; ?>" data-jumbo = "<?php echo $color['jumbo']; ?>" >

										<figure>

										  <img src="<?php echo base_url(); ?>uploads/colors/<?php echo $color['color_img']; ?>" alt="">

										</figure>

										<!--<div class="color-name">

										  <?php echo $color['color_title']; ?>

										</div>-->

										<div class="color-name-new">

										  <?php echo $color['color_title']; ?>

										</div>

									</li>

									<?php

								}

							}

							?>

						</ul>

					</div>	

					</div>

				</div>		 

				<div class="col-xs-12 hidden-lg hidden-md hidden-sm">

					<div class="row">

						<div class="col-md-3 col-lg-2 col-sm-2 col-xs-12 custpage2resc1">

							<h4 class="step_3_heading_4"><?php echo ($cat_array['category']=='1')?"Indoor":"Outdoor"; ?></h4>

						</div>

					</div>



				</div>

				<!-- selected Colors -->
				
				<div class="col-md-4 col-sm-12 col-xs-12 custpage2resc1">  

					<div class="selected-color selnew">

						<div class="row hidden-xs">

							<div class="col-md-3 col-lg-2 col-sm-2 col-xs-12">

								<h4><?php echo ($cat_array['category']=='1')?"Indoor":"Outdoor"; ?></h4>

							</div>

							<div class="col-md-9 col-lg-10 col-sm-10 col-xs-12 nav_buttons_all_step hidden-xs">

								<div class="step-links">			

									<a class="btn noleft leftcss" href="<?php echo base_url(); ?>home">BACK</a>

									<a class="btn right rightcss go_to_step3" href="#">NEXT</a>

								</div>

							</div>

						</div>

						<ul class="main-list color_drop_section changemiancss">



						<!--default black-->
<?php if($cat_array['category']=='2' || $cat_array['category']=='1' ) {?>
						<div class="custnewpage2 col-md-12 col-lg-12 col-sm-6 col-xs-12 card selected_colors">

							 <li class="card selected_colors">

							<figure class="fine"> 

								<img src="<?php echo base_url(); ?>uploads/colors/2019071810200953.jpg" alt=""> 

							</figure>

							<div class="content">

								<div class="name">Black</div>

								<ul class="coarse_fine">						

									<li class="fine_1 active" id="fine0_1" data-colid="0" data-count="1"><span class="fine" data-id="0" data-coarse="0"data-jumbo="0" data-fine="1">Fine</span></li>

									<!-- <li><span style="background-color: transparent;width: 69px;border-color: transparent;"></span></li>

									<li><span style="background-color: transparent;width: 69px;border-color: transparent;"></span></li> -->

								</ul>

							</div> 

						</li>	

						</div>
					<?php } ?>
						<!--default black-->

						<?php

//print_r($old_color_array);

						  if($old_color_array!=''){ 

								$i=1;

								foreach($old_color_array as $array){



									if($array['id'] == "" && empty($array['id'])){

									$condition = array('status' => '1');

									} else {

									$condition = array('status' => '1','id' => $array['id']);

									}

									

//print_r($condition);

									$get_color = $this->common_model->get_single('color_room',$condition);

//print_r($get_color);

									if($get_color!=false){

									    if($get_color['id']!=1){

						  ?>





				   <div class="custnewpage2 col-md-12 col-lg-12 col-sm-6 col-xs-12">

					   <li class="selected_granulas selected_granulas<?php echo $get_color['id']; ?>  counter_<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-counter="<?php echo $i; ?>" id="<?php echo $get_color['id']; ?>">

						<a data-counter="<?php echo $i; ?>" id="<?php echo $get_color['id']; ?>" class="remove delete_current"><span aria-hidden="true">×</span></a>

							<figure class="<?php echo ($array['fine']==1)?"fine":"coarse"; ?>"> 

							<img src="<?php echo base_url(); ?>uploads/colors/<?php echo $get_color['color_img']; ?>" alt=""> </figure><div class="content">

							<div class="name"><?php echo $get_color['color_title']; ?></div>

							<ul class="coarse_fine">



							<?php if($get_color['fine'] == 1 && $get_color['coarse']!=1){ ?>

							<li class="fnbr" id="fine<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="fine_1 fine_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">
								
								<span class="fine" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Fine</span>
							

							</li>
							<?php if($get_color['coarse']){ ?>
							<!-- <li><span style="background-color: transparent;width: 69px;border-color: transparent;"></span></li> -->
							<?php } ?>

							<?php } ?>

							<?php if($get_color['coarse'] == 1 && $get_color['fine']!=1){ ?>

							<li id="coarse<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="coarse_1 coarse_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">

								<span class="coarse" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Coarse</span>

							</li>
							<?php if($get_color['fine']){ ?>
							<!-- <li><span style="background-color: transparent;width: 69px;border-color: transparent;"></span></li> -->
							<?php } ?>



							<?php } ?>

				<!---- add jumbo---------------------->			
							<?php if($get_color['jumbo'] == 1 && $get_color['coarse'] == 1 && $get_color['fine']!=1){ ?>

							<li id="jumbo<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="jumbo_1 jumbo_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">

								<span class="jumbo" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Jumbo</span>

							</li>
							<?php if($get_color['jumbo']){ ?>
							<!-- <li><span style="background-color: transparent;width: 69px;border-color: transparent;"></span></li> -->
							<?php } ?>



							<?php } ?>

				<!----End add jumbo---------------------->	

				<!---- add Chunk---------------------->			
							<?php if($get_color['chunk'] == 1){ ?>

							<li id="jumbo<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="chunk_1 chunk_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">

								<span class="chunk" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Chunk</span>

							</li>
							<?php if($get_color['chunk']){ ?>
							<!-- <li><span style="background-color: transparent;width: 69px;border-color: transparent;"></span></li> -->
							<?php } ?>



							<?php } ?>

							<?php if($get_color['chunk'] == 1 && $get_color['jumbo'] == 1 && $get_color['fine'] == 0 && $get_color['coarse'] == 0){ ?>

							<li id="jumbo<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="chunk_1 chunk_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> active">

								<span class="chunk" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>" data-chunk="<?php echo $get_color['chunk']; ?>">Chunk</span>

							</li>

							<?php } ?>

				<!----End add Chunk---------------------->			

							<?php if($get_color['coarse'] == 1 && $get_color['fine']==1){ ?>

								<li id="fine<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="fine_1 fine_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo ($array['fine']==1)?"active":""; ?>">

								<span class="fine" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>">Fine</span>

							</li>

							<li id="coarse<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="coarse_1 coarse_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo  ($array['coarse']==1)?"active":""; ?>">

								<span class="coarse" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['coarse']; ?>" data-fine="<?php echo $get_color['fine']; ?>"  data-jumbo="<?php echo $get_color['jumbo']; ?>">Coarse</span>

							</li>


							<!-- <li id="jumbo<?php echo $get_color['id']; ?>_<?php echo $i; ?>" data-colid="<?php echo $get_color['id']; ?>" data-count="<?php echo $i; ?>" class="jumbo_1 jumbo_1_<?php echo $get_color['id']; ?>_<?php echo $i; ?> <?php echo  ($get_color['jumbo']==1)?"active":""; ?>">

								<span class="coarse" data-id="<?php echo $get_color['id']; ?>" data-coarse="<?php echo $get_color['jumbo']; ?>" data-fine="<?php echo $get_color['fine']; ?>" data-jumbo="<?php echo $get_color['jumbo']; ?>">Jumbo</span>

							</li> -->



							<?php } ?>







						</ul>

						</div>

					</li>

				 </div>

				 <?php } } $i++; }} ?>

			  </ul>

			</div>

			</div>

				<!--<div class="col-md-1"></div>-->

				</div>

			</div>     

		</div>

		<?php $this->load->view('login_reg_form'); ?>

		<div class="col-xs-12 hidden-lg hidden-md hidden-sm">

			<div class="step-links">			

				<a class="btn left leftcss" href="<?php echo base_url(); ?>home">BACK</a>

				<a class="btn right rightcss go_to_step3" href="#">NEXT</a>

			</div>

		</div>

	</div>

</div>